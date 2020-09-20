FROM alpine:latest

RUN apk add --no-cache openrc apache2 php7-apache2 && \
	rm -r /etc/php7/* /etc/apache2/* /var/www/localhost && \
	mkdir /var/www/site

COPY config/php7 /etc/php7
COPY config/apache2 /etc/apache2

CMD ["/usr/sbin/httpd", "-D", "FOREGROUND"]

EXPOSE 80
