FROM php:8.2-cli

# Instalar dependencias del sistema y extensiones de PHP que Laravel necesita
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libzip-dev \
    && docker-php-ext-install pdo pdo_pgsql zip

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copiar todo el proyecto
COPY . .

# Instalar dependencias de PHP (sin las de desarrollo, para producción)
RUN composer install --no-dev --optimize-autoloader

# Dar permisos a las carpetas que Laravel necesita escribir
RUN chmod -R 775 storage bootstrap/cache

# Puerto que Render va a usar
EXPOSE 10000

# Comando que arranca el servidor cuando Render despliega
CMD php artisan config:cache && php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=10000