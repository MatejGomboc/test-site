FROM debian:buster

RUN apt-get update && \
    apt-get install -y apache2 sqlite3 php php-sqlite3 && \
    apt-get clean

COPY private/apache2.conf /etc/apache2/
COPY private/test-site.conf /etc/apache2/sites-available/
COPY public/* /var/www/test-site/public/
COPY private/credentials.sql /var/www/test-site/private/

RUN a2dissite 000-default.conf && \
    rm -r /var/www/html && \
    sqlite3 /var/www/test-site/private/credentials.db < /var/www/test-site/private/credentials.sql && \
    rm /var/www/test-site/private/credentials.sql && \
    a2ensite test-site.conf

CMD ["apachectl", "-D", "FOREGROUND"]

EXPOSE 80
