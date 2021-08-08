
FROM ubuntu
ENV DEBIAN_FRONTEND=noninteractive
RUN apt-get update
RUN sudo apt-get install apache2 -y
RUN sudo apt-get install php libapache2-mod-php php-mysql php-curl php-gd php-json php-zip php-mbstring -y
RUN sudo service apache2 restart
RUN sudo apt-get install mysql-server -y
ADD . /var/www/html
RUN apt-get clean
EXPOSE 80
CMD ["apache2ctl","-D","FOREGROUND"]
