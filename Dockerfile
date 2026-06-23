FROM php:8.2-apache

# Instala extensões do MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Ativa mod_rewrite (opcional mas recomendado)
RUN a2enmod rewrite

# Copia o projeto para o Apache
COPY . /var/www/html/

# Ajusta permissões
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80