FROM php:7.4.5-fpm

RUN set -ex; \
    apt-get update; \
    apt-get install -y --no-install-recommends \
    imagemagick \
    libfreetype6-dev \
    libjpeg-dev \
    libjpeg62-turbo-dev \
    libmagickwand-dev \
    libmcrypt-dev \
    libmemcached-dev \
    libxml2-dev \
    libpng-dev \
    libzip-dev \
    libssl-dev \
    unzip \
    zip

RUN pecl install imagick; \
    pecl install memcached; \
    pecl install mcrypt-1.0.3; \
    pecl install redis; \
    pecl install xdebug; \
    docker-php-ext-configure gd --with-freetype --with-jpeg; \
    docker-php-ext-configure zip; \
    echo "extension=memcached.so" >> /usr/local/etc/php/conf.d/memcached.ini; \
    docker-php-ext-install gd; \
    docker-php-ext-install mysqli; \
    docker-php-ext-install pdo_mysql; \
    docker-php-ext-install opcache; \
    docker-php-ext-install soap; \
    docker-php-ext-install zip; \
    docker-php-ext-install exif; \
    docker-php-ext-install bcmath; \
    docker-php-ext-enable imagick mcrypt redis; \
    apt-get purge -y --auto-remove -o APT::AutoRemove::RecommendsImportant=false; \
    rm -rf /var/lib/apt/lists/*;

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
