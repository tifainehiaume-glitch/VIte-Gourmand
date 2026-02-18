SET NAMES utf8mb4;
SET CHARACTER SET utf8mb4;


-- Insertion des régimes
INSERT INTO regime (libelle) VALUES
('Végétarien'),
('Vegan'),
('Sans gluten'),
('Classique'),
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
(1, 2), -- Menu Tradition Familiale propose l'entrée Velouté de potimarron
(1, 10), -- Menu Tradition Familiale propose le plat Supreme de poulet rôti avec des pommes de terre grenailles
(1, 19), -- Menu Tradition Familiale propose le dessert Tarte fines aux pommes
(2, 2), -- Menu Elegance Légère propose l'entrée Velouté de potimarron
(2, 11), -- Menu Elegance Légère propose le plat Blanc de poulet grillé avec légumes vapeur
(2, 22), -- Menu Elegance Légère propose le dessert Salade de fruits frais
(3, 3), -- Menu Terroir Français propose l'entrée Terrine de campagne avec du pain rustique
(3, 12), -- Menu Terroir Français propose le plat Boeuf mijoté aux légumes de saison
(3, 19), -- Menu Terroir Français propose le dessert Tarte fines aux pommes
(4, 4), -- Menu Classique Festif propose l'entrée Foie gras mi-cuit avec tost de pain brioché
(4, 13), -- Menu Classique Festif propose le plat Magret de canard avec gratin dauphinois
(4, 20), -- Menu Classique Festif propose le dessert Mousse au chocolat
(5, 5), -- Menu Végétarien Fraicheur propose l'entrée Velouté de courgettes
(5, 14), -- Menu Végétarien Fraicheur propose le plat Tajines de cabillaud aux légumes de saison
(5, 23), -- Menu Végétarien Fraicheur propose le dessert Compote de pommes artisanale
(6, 6), -- Menu Végan Epicé propose l'entrée Salade de chèvre chaud
(6, 15), -- Menu Végan Epicé propose le plat Lasagnes aux légumes de saison
(6, 20), -- Menu Végan Epicé propose le dessert Mousse au chocolat
(7, 7), -- Menu Végan sans Gluten propose le plat Salade de quinoa aux légumes croquants
(7, 16), -- Menu Végan sans Gluten propose le plat Wok de légumes de saison
(7, 21), -- Menu Végan sans Gluten propose le dessert Salade de fruits frais
(8, 8), -- Menu Sans Lactose propose l'entrée Houmous et légumes croquants
(8, 17), -- Menu Sans Lactose propose le plat Curry de légumes de saison
(8, 21), -- Menu Sans Lactose propose le dessert Salade de fruits frais
(9, 7), -- Menu Sans Gluten propose le plat Salade de quinoa aux légumes croquants
(9, 17), -- Menu Sans Gluten propose le plat Curry de légumes de saison
(9, 22), -- Menu Sans Gluten propose le dessert Poire pochée
(10, 8), -- Menu Pescétarien propose l'entrée Houmous et légumes croquants
(10, 11), -- Menu Pescétarien propose le plat Blanc de poulet grillé avec légumes vapeur
(10, 21), -- Menu Pescétarien propose le dessert Salade de fruits frais
(11, 9), -- Menu Sans Gluten propose l'entrée Velouté de légumes de saison
(11, 18), -- Menu Sans Gluten propose le plat Saumon grillé avec du riz et des légumes vapeur
(11, 21), -- Menu Sans Gluten propose le dessert Salade de fruits frais
(12, 7), -- Menu Pescétarien propose le plat Salade de quinoa aux légumes croquants
(12, 18), -- Menu Pescétarien propose le plat Saumon grillé avec du riz et des légumes vapeur
(12, 19); -- Menu Pescétarien propose le dessert Tarte fines aux pommes

-- Insertion des relations entre menus et régimes
INSERT INTO adapte (menu_id, regime_id) VALUES
(1, 4), -- Menu Tradition Familiale adapté au régime Classique
(2, 4), -- Menu Elegance Légère adapté au régime Classique
(3, 4), -- Menu Terroir Français adapté au régime Classique
(4, 4), -- Menu Classique Festif adapté au régime Classique
(5, 6), -- Menu Végétarien Fraicheur adapté au régime Végétarien
(6, 2), -- Menu Végan Epicé adapté au régime Vegan
(7, 2), -- Menu Végan sans Gluten adapté au régime Vegan
(8, 5), -- Menu Sans Lactose adapté au régime Sans lactose
(9, 3), -- Menu Sans Gluten adapté au régime Sans gluten
(10, 1), -- Menu Pescétarien adapté au régime Pescetarien
(11, 3), -- Menu Sans Gluten adapté au régime Sans gluten
(12, 1); -- Menu Pescétarien adapté au régime Pescetarien

-- Insertion des relations entre plats et allergènes
INSERT INTO contient (plat_id, allergene_id) VALUES
(2, 2), -- Velouté de potimarron contient du Lactose
(3, 1), -- Terrine de campagne contient du Gluten
(4, 1), -- Foie gras mi-cuit contient du Gluten
(6, 1), -- Salade de chèvre chaud contient du Gluten
(6, 2), -- Salade de chèvre chaud contient du Lactose
(6, 3), -- Salade de chèvre chaud contient des Noix
(14, 4), -- Tajines de cabillaud aux légumes de saison contient du Poisson
(15, 2), -- Lasagnes aux légumes de saison contient du Lactose
(15, 1), -- Lasagnes aux légumes de saison contient du Gluten
(17, 3), -- Curry de légumes de saison contient des Noix
(18, 4), -- Saumon grillé avec du riz et des légumes vapeur contient du Poisson
(19, 1), -- Tarte fines aux pommes contient du Gluten
(19, 2), -- Tarte fines aux pommes contient du Lactose
(20, 2), -- Mousse au chocolat contient du Lactose
(20, 5); -- Mousse au chocolat contient des Oeufs