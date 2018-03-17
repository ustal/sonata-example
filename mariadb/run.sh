#!/bin/bash

docker run -d --name=mariadb-sonata --restart=always --net=sonata --hostname=mariabd -e MYSQL_ROOT_PASSWORD=mypass -e TZ=Europe/Kiev -e TERM=xterm mariadb