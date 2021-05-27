# Introducción a PHP

Para esta práctica iniciamos una máquina de amazon con docker instalado, ya que vamos a usar una imagen de apache y php de docker con el siguiente comando:

`docker run -d --rm --name my-apache-php-app -p 80:80 -v "$PWD":/var/www/html php:7.4-apache`