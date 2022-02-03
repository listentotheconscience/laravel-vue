FROM php:8.1-fpm

COPY composer.lock composer.json /var/www/

WORKDIR /var/www/

USER root

RUN apt-get update && apt-get install -y \
        curl \
        wget \
        git \
        libfreetype6-dev \
        libonig-dev \
        libpq-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
        libzip-dev \
        && docker-php-ext-install iconv mbstring mysqli pdo_pgsql zip \
        && docker-php-ext-configure gd --with-freetype --with-jpeg \
        && docker-php-ext-install gd

RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /var/www/

RUN chmod -R 777 /var/www/
RUN chmod -R 777 /var/www/storage/logs/laravel.log

EXPOSE 9000
CMD ["php-fpm"]