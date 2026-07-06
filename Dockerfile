# استخدام نسخة PHP رسمية مجهزة بـ FPM و Alpine لخفة الحجم
FROM php:8.2-fpm-alpine

# تثبيت الإضافات الأساسية لـ Laravel و Nginx
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

# تثبيت إضافات PHP لـ MySQL وقواعد البيانات
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl gd

# تثبيت Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# تحديد مجلد العمل
WORKDIR /var/www/html

# نسخ ملفات المشروع
COPY . .

# تثبيت حزم Composer للمشروع
RUN composer install --no-interaction --optimize-autoloader --no-dev

# إعداد صلاحيات المجلدات لتجنب مشاكل Render (مهم جداً لـ Laravel)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# نسخ إعدادات Nginx
COPY ./nginx.conf /etc/nginx/nginx.conf

# منفذ التشغيل الذي تحتاجه Render
EXPOSE 80

# تشغيل Nginx و PHP-FPM معاً عند بدء الحاوية
CMD sh -c "php-fpm -D && nginx -g 'daemon off;'"
