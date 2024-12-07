FROM ubuntu

ENV DEBIAN_FRONTEND noninteractive

RUN apt update
RUN apt install -y cron bash wget curl unzip php php php-cgi libapache2-mod-php php-common php-pear php-mbstring php-mysql php-curl php-imap php-zip

# Set working directory
WORKDIR /var/www

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

CMD [ "cron", "-f" ]
