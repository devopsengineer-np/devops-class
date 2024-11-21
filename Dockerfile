FROM php:8.4-fpm


RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN apt-get update && apt-get install -y nginx

COPY nginx.conf /etc/nginx/sites-available/default

COPY php.ini /usr/local/etc/php/

RUN mkdir -p /var/www/html

EXPOSE 80

CMD service nginx start && php-fpm 
