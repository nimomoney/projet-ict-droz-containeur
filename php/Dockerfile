ARG PHP_VERSION=8.3

FROM php:${PHP_VERSION}-fpm

RUN apt-get update && apt-get install -y \
    libicu-dev \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql intl mysqli

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && echo "xdebug.mode=develop,coverage" >> /usr/local/etc/php/conf.d/xdebug.ini

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer