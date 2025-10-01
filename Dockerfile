FROM php:8.1-apache

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Copy project files to Apache root
COPY . /var/www/html/

# Expose Apache port
EXPOSE 80

