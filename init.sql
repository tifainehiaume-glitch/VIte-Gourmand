-- Création de la base de données avec encodage UTF-8
CREATE DATABASE IF NOT EXISTS `vite-et-gourmand-db`
CHARACTER SET utf8mb4
COLLATE utf8mb4_unicode_ci;

USE `vite-et-gourmand-db`;

-- Définition de l'encodage par défaut pour les tables
SET NAMES utf8mb4;
SET CHARACTER SET utf8mb4;

-- Table regime
CREATE TABLE regime (
    regime_id INT AUTO_INCREMENT PRIMARY KEY,
    libelle VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table theme
CREATE TABLE theme (
    theme_id INT AUTO_INCREMENT PRIMARY KEY,
    libelle VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table allergene
CREATE TABLE allergene (
    allergene_id INT AUTO_INCREMENT PRIMARY KEY,
    libelle VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table role
CREATE TABLE role (
    role_id INT AUTO_INCREMENT PRIMARY KEY,
    libelle VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table utilisateur
CREATE TABLE utilisateur (
    email VARCHAR(50) PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    telephone VARCHAR(20),
    ville VARCHAR(50),
    pays VARCHAR(50),
    adresse_postale VARCHAR(255),
    role_id INT,
    FOREIGN KEY (role_id) REFERENCES role(role_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table horaire
CREATE TABLE horaire (
    horaire_id INT AUTO_INCREMENT PRIMARY KEY,
    heure_ouverture VARCHAR(50) NOT NULL,
    heure_fermeture VARCHAR(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table menu
CREATE TABLE menu (
    menu_id INT AUTO_INCREMENT PRIMARY KEY,
    titre VARCHAR(50) NOT NULL,
    nombre_personne_minimum INT NOT NULL,
    prix_par_personne DOUBLE NOT NULL,
    quantite_restante INT,
    description VARCHAR(255),
    regime_id INT,
    theme_id INT,
    FOREIGN KEY (regime_id) REFERENCES regime(regime_id),
    FOREIGN KEY (theme_id) REFERENCES theme(theme_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table plat
CREATE TABLE plat (
    plat_id INT AUTO_INCREMENT PRIMARY KEY,
    titre_plat VARCHAR(50) NOT NULL,
    type_plat VARCHAR(50) NOT NULL,
    photo BLOB,
    description VARCHAR(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table commande
CREATE TABLE commande (
    numero_commande INT AUTO_INCREMENT PRIMARY KEY,
    date_commande DATE NOT NULL,
    heure_prestation VARCHAR(50),
    prix_livraison DOUBLE,
    prix_total DOUBLE NOT NULL,
    statut VARCHAR(50) NOT NULL,
    pret_materiel BOOLEAN,
    restitution_materiel BOOLEAN,
    email VARCHAR(50),
    FOREIGN KEY (email) REFERENCES utilisateur(email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table avis
CREATE TABLE avis (
    avis_id INT AUTO_INCREMENT PRIMARY KEY,
    note INT NOT NULL,
    description VARCHAR(255),
    statut VARCHAR(50),
    email VARCHAR(50),
    FOREIGN KEY (email) REFERENCES utilisateur(email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table propose (relation entre menu et plat)
CREATE TABLE propose (
    menu_id INT,
    plat_id INT,
    PRIMARY KEY (menu_id, plat_id),
    FOREIGN KEY (menu_id) REFERENCES menu(menu_id),
    FOREIGN KEY (plat_id) REFERENCES plat(plat_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table adapte (relation entre menu et régime)
CREATE TABLE adapte (
    menu_id INT,
    regime_id INT,
    PRIMARY KEY (menu_id, regime_id),
    FOREIGN KEY (menu_id) REFERENCES menu(menu_id),
    FOREIGN KEY (regime_id) REFERENCES regime(regime_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table contient (relation entre plat et allergène)
CREATE TABLE contient (
    plat_id INT,
    allergene_id INT,
    PRIMARY KEY (plat_id, allergene_id),
    FOREIGN KEY (plat_id) REFERENCES plat(plat_id),
    FOREIGN KEY (allergene_id) REFERENCES allergene(allergene_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Table possede (relation entre menu et thème)
CREATE TABLE possede (
    menu_id INT,
    theme_id INT,
    PRIMARY KEY (menu_id, theme_id),
    FOREIGN KEY (menu_id) REFERENCES menu(menu_id),
    FOREIGN KEY (theme_id) REFERENCES theme(theme_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;