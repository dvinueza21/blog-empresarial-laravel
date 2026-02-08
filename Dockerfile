# -------- Build frontend (Vite) --------
FROM node:20-alpine AS nodebuilder
WORKDIR /app
COPY package*.json ./
RUN npm ci
COPY . .
RUN npm run build

# -------- PHP + Composer --------
FROM php:8.2-fpm-alpine

# Dependencias del sistema (extensiones típicas Laravel)
RUN apk add --no-cache \
    nginx supervisor bash curl \
    icu-dev oniguruma-dev libzip-dev zip unzip \
    freetype-dev libjpeg-turbo-dev libpng-dev \
    mysql-client

RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install pdo pdo_mysql intl mbstring zip gd opcache

# Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copiamos el proyecto
COPY . .

# Copiamos el build de Vite
COPY --from=nodebuilder /app/public/build /var/www/html/public/build

# Instala dependencias PHP
RUN composer install --no-dev --optimize-autoloader

# Permisos para storage/cache
RUN mkdir -p storage bootstrap/cache \
 && chown -R www-data:www-data storage bootstrap/cache

# Config Nginx + Supervisor
COPY docker/nginx.conf /etc/nginx/nginx.conf
COPY docker/supervisord.conf /etc/supervisord.conf

EXPOSE 8080

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]