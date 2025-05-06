# Используем официальный PHP-образ
FROM php:8.2-fpm

# Устанавливаем зависимости
RUN apt-get update && apt-get install -y \
    build-essential \
    libpq-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    curl \
    nano \
    && docker-php-ext-install pdo pdo_pgsql zip

# Установка Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Устанавливаем рабочую директорию
WORKDIR /var/www

# Копируем файлы проекта (если build не внутри volume)
COPY . .

# Устанавливаем зависимости Laravel
RUN composer install

# Устанавливаем права
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage

# Указываем команду запуска по умолчанию
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
