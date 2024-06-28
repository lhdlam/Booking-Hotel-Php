FROM php:7.4-apache

# Cài đặt extension mysqli
RUN docker-php-ext-install mysqli
