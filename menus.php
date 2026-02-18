<?php
// Inclure le fichier de configuration
require_once 'config.php';

try {
    // Requête pour récupérer tous les menus
    $sql = "SELECT menu_id, titre, nombre_personne_minimum, prix_par_personne, description FROM menu";
    $stmt = $pdo->query($sql);
    $menus = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Erreur lors de la récupération des menus : " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Vite & Gourmand</title>
</head>
<body>
    <header>
    <nav>
     <a href="/index.html" class="logo" >
        <img src="logo-vite-et-gourmand.svg" alt="Logo Vite & Gourmand" class="logo-image"> 
     </a>
     <ul class="navbar">
            <li><a href="/menus.php">Nos Menus</a></li>
            <li><a href="/contact.html">Nous Contacter</a></li>
            <li><a href="/connecter.html">Me Connecter</a></li>
     </ul>  
    </nav>
</header>
<main>
    <div class="space"></div>
<div>
    <h2>Nos Menus</h2>
</div>
<div class="menus">
    <?php foreach ($menus as $menu): ?>
               <div class="menu">
                   <h3><a href="/menu.php?menu_id=<?= $menu['menu_id'] ?>"><?= $menu['titre'] ?></a></h3>
                   <p><?= $menu['description'] ?></p>
                   <img src="menu<?= $menu['menu_id'] ?>.jpg" alt="Menu <?= $menu['menu_id'] ?>" class="menu-image">
                </div>
            <?php endforeach; ?>
<div class="menu">
        <h3><a href="/menu1.html">Tradition Familiale</a></h3>
        <p>Classique</p>
        <p>Stock: 26</p>
        <img src="menu1.jpg" alt="Menu 1" class="menu-image">
        <p>Menu simple et chaleureux.</p>
        <div class="menu-details">
        <p>Velouté de potimarron et légumes de saison.</p>
        <p>Suprême de poulet rôti accompagné de pommes grenailles au thym.</p>
        <p>Tarte fine aux pommes</p>
        </div>
        <p>Allergènes: Gluten, Lactose</p>
        <p>Régime alimentaire: Classique</p>
        <p>conditions de stockage, d'utilisation</p>
        <p>Nombre de personne minimum: 10.</p>
        <p>Prix minimun: 25€.</p>
    </div>
    <div class="menu">
        <h3><a href="/menu2.html">Elégance légère</a></h3>
        <p>Classique</p>
        <p>Stock: 20</p>
        <img src="menu2.jpg" alt="Menu 2" class="menu-image">
        <p>Menu léger et raffiné.</p>
        <div class="menu-details">
        <p>Mesclun de jeunes pousses, vinaigrette maison.</p>
        <p>Blanc de poulet grillé, légumes vapeur.</p>
        <p>Compote de pommes artisanale.</p>
        </div>
        <p>Allergènes: aucun majeur.</p>
        <p>Régime alimentaire: Classique.</p>
        <p>Conditions de stockage, d'utilisation</p>
        <p>Nombre de personne minimum: 10.</p>
        <p>Prix minimun: 23€.</p>
    </div>
    <div class="menu">
        <h3><a href="/menu3.html">Terroir Français</a></h3>
        <p>Festif</p>
        <p>Stock: 30</p>
        <img src="menu3.jpg" alt="Menu 3" class="menu-image">
        <p>Menu traditionnel revisité.</p>
        <div class="menu-details">
        <p>Terrine de campagne maison, pain rustique.</p>
        <p>Boeuf mijoté aux légumes de saison.</p>
        <p>Tarte fine aux pommes.</p>
        </div>
        <p>Allergènes: Gluten</p>
        <p>Régime alimentaire: Classique.</p>
        <p>Conditions de stockage, d'utilisation</p>
        <p>Nombre de personne minimum: 8.</p>
        <p>Prix minimun: 29€.</p>
    </div>
    <div class="menu">
        <h3><a href="/menu4.html">Classique Festif</a></h3>
        <p>Festif</p>
        <p>Stock: 30</p>
        <img src="menu4.jpg" alt="Menu 4" class="menu-image">
        <p>Menu premium pour célébrations.</p>
        <div class="menu-details">
        <p>Foie gras mi-cuit, toast brioché.</p>
        <p>Magret de canard, gratin dauphinois.</p>
        <p>Mousse au chocolat noir.</p>
        </div>
        <p>Allergènes: Gluten, Lactose, Oeufs<p>
        <p>Régime alimentaire: Classique</p>
        <p>Conditions de stockage, d'utilisation</p>
        <p>Nombre de personne minimum: 8.</p>
        <p>Prix minimun: 36€.</p>
    </div>
    <div class="menu">
        <h3><a href="/menu5.html">Pescétarien Festif</a></h3>
        <p>Festif</p>
        <p>Stock: 30</p>
        <img src="menu5.jpg" alt="Menu 5" class="menu-image">
        <p>Menu pescétarien pour les fêtes.</p>
        <div class="menu-details">
        <p>Velouté de courgettes et herbes fraîches.</p>
        <p>Tajine de cabillaud aux légumes de saison.</p>
        <p>Poire pochée au coulis de fruits rouges.</p>
        </div>
        <p>Allergènes: Poisson</p>
        <p>Régime alimentaire: Pescétarien</p>
        <p>Conditions de stockage, d'utilisation</p>
        <p>Nombre de personne minimum: 8.</p>
        <p>Prix minimun: 32€.</p>
    </div>
    <div class="menu">
        <h3><a href="/menu6.html">Végétarien Gourmand</a></h3>
        <p>Evénement</p>
        <p>Stock: 26</p>
        <img src="menu6.jpg" alt="Menu 6" class="menu-image">
        <p>Menu généreux et savoureux.</p>
        <div class="menu-details">
        <p>Salade de chèvre chaud, miel et noix.</p>
        <p>Lasagne aux légumes de saison.</p>
        <p>Mousse au chocolat noir.</p>
        </div>
        <p>Allergènes: Noix, Lait, Gluten, Oeufs</p>
        <p>Régime alimentaire: Végétarien</p>
        <p>Conditions de stockage, d'utilisation</p>
        <p>Nombre de personne minimum: 8.</p>
        <p>Prix minimun: 27€.</p>
    </div>
    <div class="menu">
        <h3><a href="/menu7.html">Végétarien Fraicheur</a></h3>
        <p>Evénement</p>
        <p>Stock: 30</p>
        <img src="menu7.jpg" alt="Menu 7" class="menu-image">
        <p>Menu léger et coloré.</p>
        <div class="menu-details">
        <p>Salade de quinoa et légumes aux herbes de Provence.</p>
        <p>Wok de légumes de saison.</p>
        <p>Salade de fruits frais.</p>
        </div>
        <p>Allergènes: Aucun Majeur</p>
        <p>Régime alimentaire: végétarien</p>
        <p>conditions de stockage, d'utilisation</p>
        <p>Nombre de personne minimum: 10.</p>
        <p>Prix minimun: 24€.</p>
    </div>
    <div class="menu">
        <h3><a href="/menu8.html">Végan Epicé</a></h3>
        <p>Festif</p>
        <p>Stock: 20</p>
        <img src="menu8.jpg" alt="Menu 8" class="menu-image">
        <p>Menu végan pour les fêtes.</p>
        <div class="menu-details">
        <p>Houmous et légumes croquants.</p>
        <p>Curry de légumes de saison au lait de coco.</p>
        <p>Salade de fruits frais.</p>
        </div>
        <p>Allergènes: Noix</p>
        <p>Régime alimentaire: Végan</p>
        <p>Conditions de stockage, d'utilisation</p>
        <p>Nombre de personne minimum: 8.</p>
        <p>Prix minimun: 26€</p>
    </div>
    <div class="menu">
        <h3><a href="/menu9.html">Végan sans Gluten</a></h3>
        <p>Evénement</p>
        <p>Stock: 30</p>
        <img src="menu9.jpg" alt="Menu 9" class="menu-image">
        <p>Menu végétal sans gluten.</p>
        <div class="menu-details">
        <p>Salade de quinoa et légumes aux herbes de Provence.</p>
        <p>Curry de légumes de saison au lait de coco.</p>
        <p>Compote de pommes artisanale.</p>
        </div>
        <p>Allergènes: Noix</p>
        <p>Régime alimentaire: Végan/Sans Gluten</p>
        <p>Conditions de stockage, d'utilisation</p>
        <p>Nombre de personne minimum: 8.</p>
        <p>Prix minimun: 26€.</p>
    </div>
    <div class="menu">
        <h3><a href="/menu10.html">Sans Lactose</a></h3>
        <p>Festif</p>
        <p>Stock: 26</p>
        <img src="menu10.jpg" alt="Menu 10" class="menu-image">
        <p>Menu festif sans lactose.</p>
        <div class="menu-details">
        <p>Houmous et légumes croquants.</p>
        <p>Boeuf mijoté aux légumes de saison.</p>
        <p>Salade de fruits frais.</p>
        </div>
        <p>Allergènes: Aucun Majeur</p>
        <p>Régime alimentaire: Sans Lactose</p>
        <p>Conditions de stockage, d'utilisation</p>
        <p>Nombre de personne minimum: 8.</p>
        <p>Prix minimun: 26€.</p>
    </div>
    <div class="menu">
        <h3><a href="/menu11.html">Sans Gluten</a></h3>
        <p>Festif</p>
        <p>Stock: 30</p>
        <img src="menu11.jpg" alt="Menu 11" class="menu-image">
        <p>Menu sans gluten pour les fêtes.</p>
        <div class="menu-details">
        <p>Velouté de légumes de saison.</p>
        <p>Saumon grillé, riz, légumes vapeur de saison.</p>
        <p>Salade de fruits frais.</p>
        </div>
        <p>Allergènes: Poisson</p>
        <p>Régime alimentaire: Sans Gluten, Pescétarien</p>
        <p>Conditions de stockage, d'utilisation</p>
        <p>Nombre de personne minimum: 8.</p>
        <p>Prix minimun: 28€.</p>
    </div>
    <div class="menu"> 
        <h3><a href="/menu12.html">Pescétarien</a></h3>
        <p>Evénement</p>
        <p>Stock: 20</p>
        <img src="menu12.jpg" alt="Menu 12" class="menu-image">
        <p>Menu poisson premium.</p>
        <div class="menu-details">
        <p>Salade de quinoa aux herbes.</p>
        <p>Saumon grillé, riz, légumes vapeur de saison.</p>
        <p>Tarte fine aux pommes.</p>
        </div>
        <p>Allergènes: Poisson, Gluten, Lactose</p>
        <p>Régime alimentaire: Pescétarien</p>
        <p>Conditions de stockage, d'utilisation</p>
        <p>Nombre de personne minimum: 8.</p>
        <p>Prix minimun: 30€.</p>
    </div>
</div>
</main>  
<footer>
    <div class="horaires">
        <p>Nos Horaires:</p>
        <p>Lundi - Dimanche: 9h - 18h</p>
    </div>
    <nav class="mentions">
        <p class="ml"><a href="#">Mentions Legales</a></p>
        <p class="cg"><a href="#">Conditions Generales</a></p>
    </nav>
</footer>
</body>
</html>