FROM php:7.3-apache

RUN apt-get update -y

RUN apt-get install -y \
    wget \
    curl \
    git-core \
    zip \
    unzip \
    libjpeg-dev \
    libpng-dev \
    libpng16-16 \
    libzip-dev \
    libpq-dev \
    && apt-get clean \
    && docker-php-ext-install mbstring pdo pdo_mysql opcache gd mysqli \
    && docker-php-ext-enable gd pdo_mysql \
    && docker-php-ext-configure zip --with-libzip \
    && docker-php-ext-install zip

# Apache Config
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
RUN a2enmod rewrite

# Composer
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer && \
    chmod +x /usr/local/bin/composer && \
    composer self-update --preview
RUN command -v composer

WORKDIR /var/www/html

EXPOSE 8100
