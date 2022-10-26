## ---------------------------- #
#                               #
#   Dockerfile for PHP-7.4-FPM  #
#                               #
## ---------------------------- #

# Pull base image.
FROM debian:bullseye

# Maintainer
MAINTAINER LELA <lela@lela.net>

RUN apt-get -y update

# Install some packages
RUN apt-get install -y \
    htop \
    curl \
    wget \
    vim

# Add sury DEB Repository
#RUN cd /tmp
#RUN curl -sSL https://packages.sury.org/php/README.txt | bash -x

# Install PHP7.4
RUN apt-get install -y \
    php7.4 \
    php7.4-fpm \
    php7.4-mysql \
    php7.4-cli \
    php7.4-mbstring \
    php7.4-curl \
    php7.4-xml \
    composer

# Custom apache2 configuration
COPY conf.d/poc-docker-php.conf /etc/php/7.4/fpm/pool.d/poc-docker-php.conf

# Create directory for PHP-FPM .pid file
mkdir -p /run/php

# Expose ourselves
EXPOSE 9000

# Run!
ENTRYPOINT [ "/usr/sbin/php-fpm7.4", "-F", "-R" ]
