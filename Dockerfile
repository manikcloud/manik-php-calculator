# Use the official PHP image as the base image
FROM php:7.4-apache

# Copy the PHP files to the document root
COPY ./index.php /var/www/html/

# Expose port 80 for the web server
EXPOSE 80
