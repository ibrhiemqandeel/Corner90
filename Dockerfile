FROM php:8.3-fpm-alpine

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

# تهيئة مجلد قاعدة البيانات وصلاحيات المجلدات الحيوية
RUN mkdir -p database storage bootstrap/cache \
    && touch database/database.sqlite \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache database

# نسخ ملف إعدادات Nginx
COPY ./nginx.conf /etc/nginx/nginx.conf

# إصلاح Alpine: إنشاء مجلد الـ PID لـ Nginx ومجلد الـ Socket وتحديد المالك مسبقاً
RUN mkdir -p /var/run /run/nginx \
    && chown -R www-data:www-data /var/run /run/nginx

EXPOSE 80

# تشغيل الـ Migrations ثم تشغيل الخدمات والانتظار حتى تجهيز الـ socket
# تشغيل الـ Migrations، اختبار الإعدادات، ثم تشغيل الخدمات ومراقبة المخرجات
CMD sh -c " \
    chown -R www-data:www-data database storage bootstrap/cache && \
    php artisan migrate --force && \
    php-fpm -D && \
    echo '==> Testing Nginx configuration...' && \
    nginx -t && \
    echo '==> Starting Nginx...' && \
    nginx -g 'daemon off;' \
"
