FROM php:8.2-fpm

# Install dependencies (termasuk git, unzip, dan zip agar composer lancar)
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    && docker-php-ext-install pdo pdo_mysql

# Set working directory
WORKDIR /var/www

# Copy semua file ke container
COPY . .

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Jalankan composer install
RUN composer install

# Expose port untuk Laravel
EXPOSE 8000

# Jalankan Laravel
CMD php artisan serve --host=0.0.0.0 --port=8000
