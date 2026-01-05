FROM php:8.2-apache

RUN a2enmod rewrite

COPY public/ /var/www/html/

COPY app/ /var/www/html/app/

COPY config/ /var/www/html/config/

RUN chown -R www-data:www-data /var/www/html


FROM php:8.2-apache

RUN a2enmod rewrite

COPY public/ /var/www/html/
COPY app/ /var/www/html/app/
COPY config/ /var/www/html/config/

RUN chown -R www-data:www-data /var/www/html
