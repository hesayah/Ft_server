# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: hesayah <marvin@42.fr>                     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/02/23 16:21:43 by hesayah           #+#    #+#              #
#    Updated: 2020/03/05 18:36:40 by hesayah          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

# specifier l'os debian:

FROM debian:buster

# installer les composant ! 

# verifier les packs et mettre a jour:

RUN apt-get update -y && apt-get upgrade -y

# installer ngnix et PhP :

RUN apt-get install -y nginx php7.3-fpm php7.3-gd php7.3-mysql php7.3-curl php7.3-imap php7.3-mbstring php7.3-xml

# installer Mysql :

RUN apt-get install -y mariadb-server

# utiliser les srcs !
 
# ajouter srcs dans srcs :

ADD srcs/ /srcs

# copier le dossier install dans /var/www/html et donner les droits
RUN rm -rf /etc/nginx/sites-available/*
RUN cp -R /srcs/default /etc/nginx/sites-available/
RUN cp -R /srcs/install/* var/www/html/
RUN chmod -R 755 /var/www/html
RUN chown -R www-data:www-data /var/www/html

# configuer mysql !

RUN service mysql start && mysql -u root -e "create database wordpress; GRANT ALL PRIVILEGES ON wordpress.* TO hesayah@localhost IDENTIFIED BY 'takotsubo'"

# configuer Ssl !

RUN apt-get install -y wget libnss3-tools && cd /etc
RUN export VER="v1.3.0" && wget -O mkcert https://github.com/FiloSottile/mkcert/releases/download/${VER}/mkcert-${VER}-linux-amd64
RUN chmod +x mkcert 
RUN ./mkcert -install && ./mkcert localhost

# faire tourner le tout !

CMD service mysql start &&  service nginx start && service php7.3-fpm start && tail -f /dev/null

# HeSayah ;)