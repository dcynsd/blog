FROM composer as composer

COPY database/ /app/database/
COPY composer.json /app/

RUN set -x ; cd /app \
    && composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/ \
    && composer install \
    --ignore-platform-reqs \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist

FROM php:8.1-fpm-alpine as laravel

ARG LARAVEL_PATH=/app/laravel

COPY --from=composer /app/vendor/ ${LARAVEL_PATH}/vendor/
COPY . ${LARAVEL_PATH}

RUN set -x ; cd ${LARAVEL_PATH} \
    && mkdir -p storage \
    && mkdir -p storage/framework/cache \
    && mkdir -p storage/framework/sessions \
    && mkdir -p storage/framework/testing \
    && mkdir -p storage/framework/views \
    && mkdir -p storage/logs \
    && chmod -R 777 storage \
    && php artisan package:discover \
    && apk update && apk add nginx \
    && apk add m4 autoconf make gcc g++ \
    && docker-php-ext-install pdo_mysql opcache bcmath \
    && chmod 755 ./run.sh \
    && chown -R www-data:www-data storage && chown -R www-data:www-data bootstrap/cache \
    && cat ./laravel.conf > /etc/nginx/http.d/default.conf

WORKDIR ${LARAVEL_PATH}

EXPOSE 80
EXPOSE 9000

ENTRYPOINT ["./run.sh"]
