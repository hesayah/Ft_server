# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    README.txt                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: hesayah <marvin@42.fr>                     +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2020/02/23 16:24:23 by hesayah           #+#    #+#              #
#    Updated: 2020/02/23 19:53:34 by hesayah          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

la base :

docker build . -t ft_srv

docker run -p 80:80 -p 443:433 -it ft_srv

les sources pour docker  && ngnix :

https://www.youtube.com/watch?v=sGKSfFlKuEI

https://docs.docker.com/docker-for-mac/

nginx et PhP :

https://www.digitalocean.com/community/tutorials/how-to-install-nginx-on-debian-10

https://www.geek17.com/fr/content/debian-10-buster-installer-et-configurer-la-derniere-version-de-nginx-et-php-73-fpm-105

WordPress :

https://www.hostinger.fr/tutoriels/docker-wordpress/

Mysql :

https://www.tecmint.com/install-wordpress-alongside-lamp-on-debian-10/
https://dev.mysql.com/doc/refman/8.0/en/command-line-options.html

Ssl :

https://www.codeflow.site/fr/article/how-to-create-a-self-signed-ssl-certificate-for-nginx-on-debian-10
https://www.prado.lt/how-to-create-locally-trusted-ssl-certificates-in-local-development-environment-on-linux-with-mkcert
https://computingforgeeks.com/how-to-create-locally-trusted-ssl-certificates-on-linux-and-macos-with-mkcert