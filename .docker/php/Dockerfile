FROM php:8.1-fpm

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN apt-get update -y
RUN apt-get upgrade -y
RUN apt-get install -y git

RUN docker-php-ext-install sockets
RUN chmod +x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions amqp
