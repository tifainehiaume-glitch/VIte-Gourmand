<?php
// Inclure le fichier de configuration
require_once 'config.php';

try {
    $stmt = $pdo-> query ("SELECT m.menu_id, m.titre, m.description, m.prix_par_personne, m.nombre_personne_minimum, m.quantite_restante, r.regime_id, r.libelle AS regime_libelle, t.theme_id, t.libelle AS theme_libelle FROM menu m LEFT JOIN adapte a ON m.menu_id = a.menu_id LEFT JOIN regime r ON a.regime_id = r.regime_id LEFT JOIN possede p ON m.menu_id = p.menu_id LEFT JOIN theme t ON p.theme_id = t.theme_id WHERE m.menu_id = $_GET[menu_id];");
    $menus = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Erreur lors de la récupération du menu : " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <header>
    <nav>
     <a href="/index.html" class="logo" >
        <img src="logo-vite-et-gourmand.svg" alt="Logo Vite & Gourmand" class="logo-image"> 
     </a>
     <ul class="navbar">
            <li><a href="/menus.php">Nos Menus</a></li>
            <li><a href="/contact.php">Nous Contacter</a></li>
            <li><a href="/connecter.php">Me Connecter</a></li>
     </ul>  
    </nav>
</header>
<main>
    <div class="space">
    <h1><?= $menus[0]['titre'] ?></h1>
    </div>

   <div class="theme-menu"> 
    <p><?= $menus[0]['theme_libelle'] ?></p>
</div>

<section class="details-menu">
<div class="dtl-menu"> 
    <p class="dtl" style="grid-area: item-1">Description: <?= $menus[0]['description'] ?></p>
    <p class="dtl" style="grid-area: item-2">Stock: <?= $menus[0]['quantite_restante'] ?></p>
    <p class="dtl" style="grid-area: item-3">Nombre de personnes minimum: <?= $menus[0]['nombre_personne_minimum'] ?></p>
    <p class="dtl" style="grid-area: item-4">Prix minimum: <?= $menus[0]['prix_par_personne'] ?>€</p>
   <!-- <div class="dtl" style="grid-area: item-5">
        <img src="menu1.jpg" alt="Menu 1" class="menu-image">
    </div> --> 
    <div class="dtl" style="grid-area: item-6">
        <?= $menus[0]['menus_plats']
    /* <p>velouté de potimarron et légumes de saison.</p>
    <p>Suprême de poulet rôti accompagné de pommes grenailles au thym.</p>
    <p>Tarte fine aux pommes</p>*/?> 
    </div>
    <p class="dtl" style="grid-area: item-7"> Allergènes: <?= $menus[0]['allergenes'] ?></p>
    <p class="dtl" style="grid-area: item-8">Régime alimentaire: <?= $menus[0]['regime_libelle'] ?></p>
    <p class="dtl" style="grid-area: item-9">Conditions de stockage, d'utilisation</p>
</div>
</section>

<nav>
    <button class="retour"><a href="/menus.php">Retour</a></button>

    <button class="commander"><a href="/commander.html">Commander</a></button>
</nav>

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