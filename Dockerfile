FROM php:7-apache

RUN a2enmod rewrite
RUN docker-php-ext-install gettext
COPY ./ /var/www/html/
