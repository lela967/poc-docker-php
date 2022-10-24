# Dockerfile for Apache2
#
# Details:
# - Apache 2.4
##

# Pull base image.
#FROM ubuntu:18.04
FROM debian:stretch-slim

# Maintainer
MAINTAINER LELA <lela@lela.net>

# Install Apache2
RUN apt-get -y update && apt-get install -y \
    apache2

# Custom apache2 configuration
COPY conf.d/* /etc/apache2/conf-enabled/

# Enable rewrite module
RUN a2enmod rewrite cgi proxy proxy_fcgi actions alias

# Configure Apache2
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid
ENV APACHE_RUN_DIR /var/run/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2
ENV APACHE_LOG_DIR /var/log/apache2

#RUN mkdir ${APACHE_RUN_DIR}

# Expose ourselves
# EXPOSE 80

# Run!
ENTRYPOINT [ "/usr/sbin/apache2", "-DFOREGROUND" ]
