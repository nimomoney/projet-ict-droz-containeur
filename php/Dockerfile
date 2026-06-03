ARG PHP_VERSION=8.3

FROM php:${PHP_VERSION}-fpm

RUN apt-get update && apt-get install -y \
    libicu-dev \
    git \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql intl mysqli

RUN git clone https://github.com/xdebug/xdebug.git /usr/src/php/ext/xdebug \
    && docker-php-ext-install xdebug \
    && echo "xdebug.mode=develop,coverage" >> /usr/local/etc/php/conf.d/xdebug.ini

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer