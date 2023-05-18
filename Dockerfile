FROM php:8.1-fpm
ENV TZ Asia/Shanghai
RUN date -R

# 换源
RUN echo 'deb http://mirrors.ustc.edu.cn/debian stable main contrib non-free' >/etc/apt/sources.list \
    && echo 'deb http://mirrors.ustc.edu.cn/debian stable-updates main contrib non-free' >>/etc/apt/sources.list
RUN apt-get update --fix-missing  \
    && apt-get install -y openssl vim supervisor \
    && docker-php-ext-install pdo_mysql bcmath

ENV PHPREDIS_VERSION 5.3.7

WORKDIR /var/www

RUN pecl install redis-$PHPREDIS_VERSION \
    && docker-php-ext-enable redis

RUN curl -O https://mirrors.aliyun.com/composer/composer.phar  \
    && mv composer.phar /usr/local/bin/composer  \
    && chmod a+x /usr/local/bin/composer

EXPOSE 9000

CMD ["php-fpm"]
