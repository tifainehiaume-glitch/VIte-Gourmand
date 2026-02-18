# Utilise une image PHP avec Apache
FROM php:8.2-apache

# Installe les extensions PHP nécessaires (PDO, MySQL, etc.)
RUN docker-php-ext-install pdo pdo_mysql

# Active le module Apache rewrite (pour les URLs propres)
RUN a2enmod rewrite

# Copie les fichiers du projet dans le conteneur
COPY . /var/www/html

# Définit le répertoire de travail
WORKDIR /var/www/html

# Expose le port 80 (HTTP)
EXPOSE 80