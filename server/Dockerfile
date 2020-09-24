FROM debian:buster

RUN apt-get update && \
	apt-get install -y apache2 php7.3 php-xdebug php7.3-mysqli && \
	a2dissite 000-default.conf && \
	mkdir /var/www/site

COPY config/apache2/apache2.conf /etc/apache2/apache2.conf
COPY config/apache2/sites-available/site.conf /etc/apache2/sites-available/site.conf
COPY config/php7/php.ini /etc/php/7.3/php.ini

RUN a2ensite site.conf

CMD ["apachectl", "-D", "FOREGROUND"]

EXPOSE 80
EXPOSE 9000
