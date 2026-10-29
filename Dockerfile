FROM php:8.2-apache

# Atualiza os pacotes e instala a dependência necessária para o SQLite
RUN apt-get update && apt-get install -y \
    libsqlite3-dev \
    && docker-php-ext-install pdo pdo_sqlite

# Copia todos os ficheiros do seu projeto para o diretório web do servidor Apache
COPY . /var/www/html/

# Ajusta as permissões para garantir que o site consegue ler e escrever corretamente
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
