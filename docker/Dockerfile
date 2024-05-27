FROM php:8.2-apache
WORKDIR /var/www/html

RUN a2enmod rewrite \
    && docker-php-ext-install mysqli pdo pdo_mysql \
    && docker-php-ext-enable mysqli pdo pdo_mysql

EXPOSE 80
