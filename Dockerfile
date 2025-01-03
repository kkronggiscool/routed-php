# Use the official PHP image with Apache
FROM php:8.1-apache

# Enable Apache mod_rewrite (needed for routing)
RUN a2enmod rewrite

# Copy the app's files into the Apache server's public directory
COPY ./ /var/www/html/

# Set permissions for the files (optional but good practice)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 (default HTTP port)
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]
