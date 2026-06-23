FROM php:8.3-apache

# Instala extensões PHP que você precisar (ex: pdo, mysqli, etc.)
RUN apt-get update && apt-get install -y \
    libzip-dev \
    && docker-php-ext-install pdo_mysql zip

# Copia todo o projeto para dentro do container
COPY . /var/www/html/

# Define o DocumentRoot para a pasta public
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

# Ajusta as configurações do Apache
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Habilita mod_rewrite (útil para rotas limpas)
RUN a2enmod rewrite

# Permissões corretas
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Porta padrão
EXPOSE 80

CMD ["apache2-foreground"]