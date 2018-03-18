FROM ubuntu:16.04

ARG DEBIAN_FRONTEND=noninteractive
RUN apt-get update

RUN apt-get install -y --no-install-recommends apt-utils \ 
	software-properties-common \
	python-software-properties \
	language-pack-en-base && \
	LC_ALL=en_US.UTF-8 add-apt-repository ppa:ondrej/php

RUN apt-get update
RUN apt-get -qqy install php7.1 php7.1-fpm php7.1-xml php7.1-zip php7.1-mbstring php7.1-intl php7.1-mysql iputils-ping php-xdebug nginx nano composer

RUN rm /usr/bin/php
RUN ln -s /usr/bin/php7.1 /usr/bin/php

WORKDIR /code

COPY .config/php/fpm/php.ini /etc/php/7.1/fpm/php.ini
COPY .config/php/cli/php.ini /etc/php/7.1/cli/php.ini
COPY .config/nginx/sonata /etc/nginx/sites-availanle/default

ENV PHP_IDE_CONFIG=serverName=sonata.lan

CMD service php7.1-fpm start
CMD service nginx start