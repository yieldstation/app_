FROM php:8.0-fpm-buster
SHELL ["/bin/bash", "-oeux", "pipefail", "-c"]

ENV COMPOSER_ALLOW_SUPERUSER=1 \
  COMPOSER_HOME=/composer

COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

RUN apt-get update && \
  apt-get -y install git unzip libzip-dev libicu-dev libonig-dev libpq-dev && \
  apt-get clean && \
  rm -rf /var/lib/apt/lists/* && \
  docker-php-ext-install intl pdo_pgsql zip bcmath && \
  composer create-project --prefer-dist "laravel/laravel=8.*" /work

COPY ./php.ini /usr/local/etc/php/php.ini

WORKDIR /work