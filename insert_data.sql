SET NAMES utf8mb4;
SET CHARACTER SET utf8mb4;


-- Insertion des régimes
INSERT INTO regime (libelle) VALUES
('Végétarien'),
('Vegan'),
('Sans gluten'),
('Classique'),
('Halal'),
('Sans lactose'),
('Pescetarien');

-- Insertion des thèmes
INSERT INTO theme (libelle) VALUES
('Evenement'),
('Classique'),
('Festif');

-- Insertion des allergènes
INSERT INTO allergene (libelle) VALUES
('Gluten'),
('Lactose'),
('Noix'),
('Poisson'),
('Oeufs');

-- Insertion des rôles
INSERT INTO role (libelle) VALUES
('Administrateur'),
('Employé'),
('Utilisateur');

-- Insertion des utilisateurs
INSERT INTO utilisateur (email, nom, prenom, telephone, ville, pays, adresse_postale, role_id) VALUES
('admin@vite-et-gourmand.fr', 'Dupont', 'Julie', '0612345678', 'Bordeaux', 'France', '123 Rue des Gourmets, Bordeaux', 1),
('employe@vite-et-gourmand.fr', 'Martin', 'José', '0687654321', 'Bordeaux', 'France', '456 Rue des Saveurs, Bordeaux', 2),
('alice.bernard@gmail.fr', 'Bernard', 'Alice', '0712345678', 'Paris', 'France', '789 Rue de Paris, Paris', 3),
('pierredurand@outlook.fr', 'Durand', 'Pierre', '0787654321', 'Lyon', 'France', '321 Rue de Lyon, Lyon', 3);

-- Insertion des horaires
INSERT INTO horaire (heure_ouverture, heure_fermeture) VALUES
('09:00', '18:00');

-- Insertion des plats
INSERT INTO plat (titre_plat, type_plat, description) VALUES
('Mesclun de jeunes pousses', 'Entrée', 'Mélange de jeunes pousses de salades avec sa vinaigrette maison.'),
('Velouté de potimarron', 'Entrée', 'Velouté crémeux de potimarron avec crème fraîche.'),
('Terrine de campagne avec du pain rustique', 'Entrée', 'Terrine maison à base de viande de porc et d’épices.'),
('Foie gras mi-cuit avec tost de pain brioché', 'Entrée', 'Foie gras mi-cuit accompagné de pain brioché et confiture de figues.'),
('Velouté de courgettes', 'Entrée', 'Velouté crémeux de courgettes avec herbes fraîches.'),
('Salade de chèvre chaud', 'Entrée', 'Salade verte avec chèvre chaud sur toast et noix.'),
('Salade de quinoa aux légumes croquants', 'Entrée', 'Salade de quinoa avec légumes croquants, herbes de Provence et vinaigrette citronnée.'),
('Houmous et légumes croquants', 'Entrée', 'Houmous maison accompagné de bâtonnets de légumes croquants.'),
('Velouté de légumes de saison', 'Entrée', 'Velouté de légumes frais de saison.'),
('Supreme de poulet rôti avec des pommes de terre grenailles', 'Plat', 'Suprême de poulet rôti accompagné de pommes grenailles au thym.'),
('Blanc de poulet grillé avec légumes vapeur', 'Plat', 'Blanc de poulet grillé accompagné de légumes vapeur.'),
('Boeuf mijoté aux légumes de saison', 'Plat', 'Boeuf mijoté avec légumes de saison et herbes.'),
('Magret de canard avec gratin dauphinois', 'Plat', 'Magret de canard accompagné de gratin dauphinois.'),
('Tajines de cabillaud aux légumes de saison', 'Plat', 'Tajine de cabillaud aux légumes de saison.'),
('Lasagnes aux légumes de saison', 'Plat', 'Lasagnes maison avec légumes de saison et béchamel.'),
('Wok de légumes de saison', 'Plat', 'Wok de légumes de saison avec sauce au soja.'),
('Curry de légumes de saison', 'Plat', 'Curry de légumes de saison au lait de coco.'),
('Saumon grillé avec du riz et des légumes vapeur', 'Plat', 'Saumon grillé accompagné de légumes de vapeur et de riz.'),
('Tarte fines aux pommes', 'Dessert', 'Tarte aux pommes maison avec une touche de cannelle.'),
('Mousse au chocolat', 'Dessert', 'Mousse légère au chocolat noir.'),
('Salade de fruits frais', 'Dessert', 'Salade de fruits frais de saison.'),
('Compote de pommes artisanale', 'Dessert', 'Compote de pommes maison avec une touche de vanille.'),
('Poire pochée', 'Dessert', 'Poires pochées dans un sirop de fruits rouges maison.');

-- Insertion des menus
INSERT INTO menu (titre, nombre_personne_minimum, prix_par_personne, quantite_restante, description, regime_id, theme_id) VALUES
('Tradition Familiale', 10, 25, 26, 'Un menu classique et chaleureux pour profiter en famille.', 4, 1),
('Elegance Légère', 10, 23, 20, 'Un menu léger et raffiné pour les occasions spéciales.', 4, 2),
('Terroir Français', 8, 29, 30, 'Un menu traditionnel revisité.', 4, 3),
('Classique Festif', 8, 36, 30, 'Un menu premium pour célébrations.', 4, 4),
('Végétarien Fraicheur', 8, 24, 30, 'Un menu léger et coloré.', 1, 1),
('Végan Epicé', 8, 28, 20, 'Un menu végan pour les fêtes.', 2, 3),
('Végan sans Gluten', 8, 30, 30, 'Un menu végétal sans gluten.', 2, 2),
('Sans Lactose', 8, 22, 26, 'Un menu festif sans lactose.', 6, 3),
('Sans Gluten', 8, 27, 30, 'Un menu sans gluten pour les fêtes.', 3, 3),
('Pescétarien', 8, 26, 20, 'Un menu poisson premium.', 7, 1);

-- Insertion des relations entre menus et plats
INSERT INTO propose (menu_id, plat_id) VALUES
(1, 1), -- Menu Noël contient Salade César
(1, 3), -- Menu Noël contient Poulet rôti aux herbes
(1, 5), -- Menu Noël contient Tarte aux pommes
(2, 2), -- Menu Pâques contient Velouté de potimarron
(2, 4), -- Menu Pâques contient Lasagnes bolognaises
(2, 6), -- Menu Pâques contient Mousse au chocolat
(3, 2), -- Menu Végétarien contient Velouté de potimarron
(3, 6), -- Menu Végétarien contient Mousse au chocolat
(4, 1), -- Menu Mariage contient Salade César
(4, 4), -- Menu Mariage contient Lasagnes bolognaises
(4, 5); -- Menu Mariage contient Tarte aux pommes

-- Insertion des relations entre menus et régimes
INSERT INTO adapte (menu_id, regime_id) VALUES
(1, 4), -- Menu Noël est Classique
(2, 4), -- Menu Pâques est Classique
(3, 1), -- Menu Végétarien est Végétarien
(4, 4); -- Menu Mariage est Classique

-- Insertion des relations entre plats et allergènes
INSERT INTO contient (plat_id, allergene_id) VALUES
(1, 1), -- Salade César contient Gluten
(1, 2), -- Salade César contient Lactose
(3, 2), -- Poulet rôti aux herbes contient Lactose
(4, 1), -- Lasagnes bolognaises contiennent Gluten
(4, 2), -- Lasagnes bolognaises contiennent Lactose
(5, 1), -- Tarte aux pommes contient Gluten
(5, 2); -- Tarte aux pommes contient Lactose