# Use the official PHP 7.4 Apache base image
FROM php:7.4-apache

# Install the mysqli extension
RUN docker-php-ext-install mysqli

# Copy the contents of the current directory to /var/www/html/
COPY . /var/www/html/

# Ensure the ownership and permissions of the files
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html
