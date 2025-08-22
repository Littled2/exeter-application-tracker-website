FROM php:8.2-apache

RUN a2enmod rewrite

# If using SSL locally:
# RUN a2enmod ssl
# COPY certs/*.pem /etc/apache2/ssl/
# COPY apache-vhost.conf /etc/apache2/sites-available/000-default.conf

# Copy your site into container
COPY src/ /var/www/html/

EXPOSE 80
