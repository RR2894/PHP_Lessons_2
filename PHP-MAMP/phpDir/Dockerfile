FROM php:8.0-apache
COPY booksite.php /var/www/html/booksite.php
RUN a2enmod rewrite
CMD ["apache2-foreground"]
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN docker-php-ext-install pdo pdo_mysql
RUN apt-get update && apt-get upgrade -y