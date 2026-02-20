# ================================
# Laravel + PHP 8.4 + Nginx (NO DB)
# ================================
FROM php:8.4-fpm

# System dependencies (NO database libs)
RUN apt-get update && apt-get install -y \
    nginx \
    git \
    unzip \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libzip-dev \
    zip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        mbstring \
        zip \
        exif \
        pcntl \
        gd \
    && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# App directory
WORKDIR /var/www/html

# Copy app
COPY . .

# Prevent git ownership warning
RUN git config --global --add safe.directory /var/www/html

# Install PHP deps (NO scripts, NO DB)
RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-scripts \
    --no-interaction

# Permissions
RUN chown -R www-data:www-data storage bootstrap/cache

# Nginx config
COPY docker/nginx.conf /etc/nginx/conf.d/default.conf

# Expose web port
EXPOSE 80

# Start services
CMD sh -c "nginx -g 'daemon off;' & exec php-fpm"