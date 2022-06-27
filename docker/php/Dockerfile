FROM php:8.0-fpm
WORKDIR /var/www/webroot
RUN apt-get update -y && apt-get install -y \
  apt-transport-https \
  curl \
  wget \
  git \
  autoconf \
  libssl-dev \
  libcurl4-openssl-dev \
  libpq-dev \
  zlib1g-dev libicu-dev g++ \
  libfreetype6-dev \
  libjpeg62-turbo-dev \
  libpng-dev \
  libonig-dev \
  libzip-dev \
  libmcrypt-dev \
  && docker-php-ext-configure intl \
  && docker-php-ext-install bcmath \
  && docker-php-ext-install -j$(nproc) iconv mbstring mysqli pdo_mysql intl zip \
  && docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install -j$(nproc) gd \
  && curl -s https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin/ --filename=composer \
  && rm -rf /tmp/* \
  ADD php.ini /usr/local/etc/php/conf.d/40-custom.ini
CMD ["php-fpm"]
