FROM ubuntu:16.04

RUN apt-get update && apt-get -qqy install php7.0 php-xml php-zip php-mbstring php-intl php-mysql iputils-ping php-xdebug nginx nano composer

WORKDIR /code

COPY .config/php/fpm/php.ini /etc/php/7.0/fpm/php.ini
COPY .config/php/cli/php.ini /etc/php/7.0/cli/php.ini
COPY .config/nginx/sonata /etc/nginx/sites-availanle/default

ENV PHP_IDE_CONFIG=serverName=sonata.lan

CMD service php7.0-fpm start
CMD service nginx start