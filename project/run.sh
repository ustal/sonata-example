#!/bin/bash


docker run \
    -d \
    -it \
    --name=sonata \
    --hostname=sonata \
    --net=sonata \
    --restart=always \
    --entrypoint bash \
    -p 127.0.0.1:80:80 \
    -v `pwd`:/code \
    -v `pwd`/.config/php/fpm/php.ini:/etc/php/7.0/fpm/php.ini \
    -v `pwd`/.config/php/cli/php.ini:/etc/php/7.0/cli/php.ini \
    -v `pwd`/.config/nginx/sonata:/etc/nginx/sites-available/default \
    sonata