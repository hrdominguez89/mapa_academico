# Imagen base
FROM ubuntu:20.04

# Instalar dependencias requeridas por Symfony
RUN apt-get update && \
        DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends \
        apache2 \
        unzip \
        libicu-dev \
        libonig-dev \
        libzip-dev \
        libpq-dev \
        php7.4 \
        php7.4-cli \
        php7.4-mysql \
        php7.4-mysqli \
        php7.4-curl \
        php7.4-gd \
        php7.4-intl \
        php7.4-mbstring \
        php7.4-xml \
        php7.4-zip \
        git

# Habilitar el módulo Apache mod_rewrite
RUN a2enmod rewrite
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Copiar los archivos del proyecto al contenedor
COPY ./ /var/www/html

# Establecer permisos
RUN chown -R www-data:www-data /var/www/html

# Configurar variables de entorno de Symfony
ENV APP_ENV=dev
ENV APP_DEBUG=1
ENV APP_SECRET=df56d689878bd6a2a408421655881d5b

# Instalar dependencias de Composer

# Descarga e instala Composer 2
# Latest release
COPY --from=composer/composer:latest-bin /composer /usr/bin/composer

RUN cd /var/www/html && composer install


# Comando para iniciar Apache en primer plano
CMD ["apachectl", "-D", "FOREGROUND"]

# Exponer el puerto 80
EXPOSE 80
