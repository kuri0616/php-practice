FROM php:8.2-apache

RUN a2enmod rewrite

RUN apt-get update && apt-get install -y \
    vim \
    less \
    curl \
    wget \
    && apt-get clean

COPY ./app/config/apache/000-default.conf /etc/apache2/sites-available/000-default.conf
