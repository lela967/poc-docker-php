##
# Dockerfile for PHP-8.1-FPM
##

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



#RUN update-rc.d php7.4-fpm defaults
#RUN /usr/sbin/service php7.4-fpm start
#/usr/sbin/php-fpm7.4 --fpm-config /etc/php/7.4/fpm/php-fpm.conf
#CMD [ "service", "php7.4-fpm", "start" ]
#CMD ["/etc/init.d/php7.4-fpm", "start"]



# Expose ourselves
EXPOSE 9000

# Run!
#ENTRYPOINT [ "/usr/sbin/php-fpm7.4", "--fpm-config", "/etc/php/7.4/fpm/php-fpm.conf" ]
#ENTRYPOINT [ "bash" ]
