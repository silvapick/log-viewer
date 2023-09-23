# Utiliza la imagen oficial de PHP 8.2
FROM php:8.2-fpm

# Instala las dependencias requeridas
RUN apt-get update && apt-get install -y \
	libpng-dev \
	libjpeg-dev \
	libfreetype6-dev \
	zip \
	unzip \
	&& docker-php-ext-configure gd --with-freetype --with-jpeg \
	&& docker-php-ext-install -j$(nproc) gd pdo pdo_mysql

# Configura el directorio de trabajo
WORKDIR /var/www/html

# Instala Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Expon el puerto 9000 para el servidor PHP-FPM
EXPOSE 9000