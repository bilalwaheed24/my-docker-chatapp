FROM php:7.4-apache
COPY backend/ /var/www/html/
COPY frontend/ /var/www/html/
EXPOSE 80
