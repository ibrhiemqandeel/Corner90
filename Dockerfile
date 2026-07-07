FROM php:8.2-fpm-alpine

# تثبيت الإضافات الأساسية للنظام ولارافل
RUN apk add --no-cache \
    nginx \
    shadow \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    zip \
    libzip-dev \
    unzip \
    git \
    bash \
    oniguruma-dev

RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd pdo pdo_mysql mbstring zip exif pcntl

# نسخ الـ Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# نسخ ملفات المشروع بالكامل
COPY . .

# تثبيت حزم الـ Composer
RUN composer install --no-dev --optimize-autoloader --no-interaction

# تهيئة مجلد قاعدة البيانات وصلاحيات المجلدات الحيوية المبدئية
RUN mkdir -p database storage bootstrap/cache \
    && touch database/database.sqlite \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache database

# نسخ ملف إعدادات Nginx
COPY ./nginx.conf /etc/nginx/nginx.conf

# تهيئة مجلدات التشغيل لـ Nginx وتعديل ضبط استماع PHP-FPM ليعمل عبر المنفذ 9000 بشكل قطعي
RUN mkdir -p /run/nginx && chown -R www-data:www-data /run/nginx \
    && sed -i 's/listen = .*/listen = 127.0.0.1:9000/' /usr/local/etc/php-fpm.d/www.conf

EXPOSE 80

# تشغيل الـ Migrations أولاً، ثم إعادة ضبط الصلاحيات للمجلدات والملفات الناتجة عنها، ثم تشغيل الخدمات
# تشغيل الـ Migrations، تنظيف كاش لارافل، اختبار الإعدادات، ثم الإقلاع
CMD sh -c " \
    php artisan migrate --force && \
    php artisan config:clear && \
    php artisan route:clear && \
    php artisan view:clear && \
    chown -R www-data:www-data database storage bootstrap/cache && \
    chmod -R 775 database storage bootstrap/cache && \
    php-fpm -D && \
    nginx -t && \
    nginx -g 'daemon off;' \
"
