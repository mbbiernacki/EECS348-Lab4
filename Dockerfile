FROM php:8.2-apache

# copy all Lab4 files into the Apache web root
COPY . /var/www/html/

# expose port 80 so we can reach it in the browser
EXPOSE 80
