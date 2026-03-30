# Use PHP 8.0 as specified in composer.json (supports PHP 7.3-8.0)
FROM php:8.0-fpm

# Set working directory
WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    nodejs \
    npm \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy the entire application first (so artisan is available)
COPY . .

# Install dependencies and generate new lock file
# This ensures compatibility with PHP 8.0
# Using --no-scripts to avoid running artisan commands before everything is ready
RUN composer update --no-dev --optimize-autoloader --no-interaction --no-scripts

# Run the scripts after installation (including artisan commands)
RUN composer run-script post-autoload-dump

# Set proper permissions
RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www/storage \
    && chmod -R 755 /var/www/bootstrap/cache \
    && chmod -R 755 /var/www/vendor

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]