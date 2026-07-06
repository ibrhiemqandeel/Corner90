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

# تثبيت حزم الـ Composer مع تحسين الـ Autoload
RUN composer install --no-dev --optimize-autoloader --no-interaction

# تهيئة مجلد قاعدة البيانات وصلاحيات المجلدات الحيوية للمستخدم الصحيح
RUN mkdir -p database storage bootstrap/cache \
    && touch database/database.sqlite \
    && chown -R www-data:www-data /var/www/html \
    && chmod -R 775 storage bootstrap/cache database

# نسخ ملف إعدادات Nginx
COPY ./nginx.conf /etc/nginx/nginx.conf

EXPOSE 80

# تشغيل الـ Migrations وضمان بقاء الصلاحيات سليمة ثم تشغيل السيرفر
CMD sh -c "chown -R www-data:www-data database storage bootstrap/cache && php artisan migrate --force && php-fpm -D && nginx -g 'daemon off;'"
