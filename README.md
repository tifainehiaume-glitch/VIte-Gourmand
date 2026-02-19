# Vite & Gourmand – Application Web

## Présentation
Cette application permet de consulter les menus de l’entreprise **Vite & Gourmand**, de passer commande et de filtrer les menus par thème, régime et allergènes.  
Elle est compatible bureau et mobile et a été conçue pour des événements familiaux ou festifs.

---

## Prérequis
Avant de lancer l’application, assurez-vous d’avoir installé :
- Un serveur web (Apache, Nginx, etc.)  
- PHP 7.4+  
- MySQL ou MariaDB  

---

## Installation en local

1. **Cloner le dépôt**
```bash
git clone https://votre-depot-git.git
cd vite-gourmand
```
2. **Copier les fichiers sur le serveur**

Copier tout le contenu dans le répertoire du serveur web (ex. htdocs ou www)

3. **Créer une base de données**
## Depuis le terminal MySQL ou phpMyAdmin
CREATE DATABASE vite_gourmand;
USE vite_gourmand;
SOURCE database.sql;

4. **Configurer l’application**

Modifier le fichier de configuration (ex. config.php) avec vos informations de connexion à la base de données

5. **Accéder à l’application**

Ouvrir votre navigateur et aller sur http://localhost/vite-gourmand


## Identiant test 
Admin: admin@vite-et-gourmand.fr / admin123
Client: alice.bernard@gmail.fr / alice123
