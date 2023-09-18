FROM php:8.1-fpm-alpine

ENV TZ=Asia/Shanghai
ENV LANG=C.UTF-8
ENV LC_ALL=C.UTF-8

COPY . /root

RUN set -ex \
    && ln -snf /usr/share/zoneinfo/$TZ /etc/localtime \
    && echo $TZ > /etc/timezone \
    && sed -i 's/dl-cdn.alpinelinux.org/mirrors.aliyun.com/g' /etc/apk/repositories \
    && apk update && apk add --no-cache \
    autoconf \
    gcc \
    g++ \
    make \
    # cmake \
    # doxygen \
    # python \
    libpng-dev \
    libzip-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    openssl-dev \
    pcre \
    pcre-dev \
    zlib-dev \
    oniguruma-dev \
    # vim \
    # nginx \
    curl \
    && pecl install redis-5.3.7 && docker-php-ext-enable redis \
    && docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ \
    && docker-php-ext-install -j$(getconf _NPROCESSORS_ONLN) gd pdo_mysql zip bcmath sockets pcntl mbstring opcache ctype\
    && cat /root/docker/php/upload.ini > /usr/local/etc/php/conf.d/docker-php-ext-upload.ini \
    && cat /root/docker/php/opcache.ini > /usr/local/etc/php/conf.d/docker-php-ext-opcache.ini \
    # && cat /root/nginx/conf.d/default.conf > /etc/nginx/conf.d/default.conf \
    && curl -O https://mirrors.aliyun.com/composer/composer.phar \
    && mv composer.phar /usr/local/bin/composer \
    && chmod a+x /usr/local/bin/composer \
    && rm -rf /root/* /var/cache/apk/*

WORKDIR /var/www

EXPOSE 9000

CMD ["php-fpm"]
