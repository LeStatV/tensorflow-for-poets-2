FROM tensorflow/tensorflow

WORKDIR /www/tensorflow

RUN apt-get update
RUN apt-get install apache2 libapache2-mod-php 
RUN /etc/init.d/apache2 start
