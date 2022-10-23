FROM php:7.4-fpm-alpine3.15

RUN apk update && apk add \
curl ca-certificates zip unzip supervisor gcc postgresql-dev gnupg musl-dev make libxml2-dev libpng-dev python2 supervisor unixodbc-dev libzip-dev build-base shadow vim curl git freetype-dev libpng libwebp-dev libjpeg-turbo-dev libpng-dev libxpm-dev mysql-client \
    php7 \
    php7-fpm \
    php7-common \
    php7-pdo \
    php7-pdo_mysql \
    php7-pdo_pgsql \
    php7-mysqli \
    php7-pgsql \
    php7-mcrypt \
    php7-mbstring \
    php7-xml \
    php7-openssl \
    php7-json \
    php7-phar \
    php7-zip \
    php7-gd \
    php7-dom \
    php7-session \
    php7-zlib \
    php7-pear \ 
    php7-dev \
    php7-curl \
    php7-tokenizer \
    php7-dev \
    php7-phar \
    php7-intl \
    php7-dom \
    php7-xmlreader \
    php7-xmlwriter \
    php7-ctype \
    php7-session
    
# Add and Enable PHP-PDO Extenstions
RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql
RUN docker-php-ext-enable pdo_mysql pdo_pgsql
RUN docker-php-ext-install gd
RUN docker-php-ext-enable gd
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install sockets
RUN docker-php-ext-enable sockets
RUN docker-php-ext-install bcmath
RUN docker-php-ext-enable bcmath
RUN docker-php-ext-install zip
RUN docker-php-ext-enable zip

# Installing composer
RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN rm -rf composer-setup.php

# Remove Cache
RUN rm -rf /var/cache/apk/*

# Add UID '1000' to www-data
RUN usermod -u 1000 www-data

# Copy existing application directory permissions
ADD . /var/www/html
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 775 /var/www/html/storage
RUN chmod -R 777 /var/www/html/storage/logs

# Change current user to www
USER www-data

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]