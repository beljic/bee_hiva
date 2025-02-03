FROM php:8.3-cli

# Install system dependencies
RUN apt-get update && apt-get install -y unzip git

# Set working directory
WORKDIR /app

# Copy composer files first for better caching
COPY composer.json composer.lock ./

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install project dependencies
RUN composer install --no-interaction --prefer-dist

# Install PHPUnit globally
RUN composer global require phpunit/phpunit --dev

# Ensure global Composer binaries are in PATH
ENV PATH="${PATH}:/root/.composer/vendor/bin"

# Copy the rest of the application files
COPY . .

# Set default command
CMD ["php", "-S", "0.0.0.0:8000"]
