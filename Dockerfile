# Use an official PHP image as the base image
FROM php:8.2-apache

# Install MySQL server and other necessary dependencies
RUN apt-get update \
    && apt-get install -y default-mysql-server libzip-dev nano\
    && docker-php-ext-install zip mysqli pdo pdo_mysql \
    && docker-php-ext-enable mysqli

# Copy custom configuration file
COPY deploy/apache.conf /etc/apache2/conf-enabled/custom.conf

# Optional: Ensure the Apache configuration is correct
RUN apachectl configtest

# Configure Apache to work with PHP
RUN a2enmod rewrite

# Copy your application files into the container
COPY deploy /var/www/html/

# Set permissions for Apache
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose port 80
EXPOSE 80

# Start MySQL and Apache services
CMD /var/www/html/script.sh && apache2-foreground
