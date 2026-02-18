<?php
// Inclure le fichier de configuration
require_once 'config.php';

try {
    // Requête pour récupérer le menu spécifique
    $sql = "SELECT * FROM menu WHERE menu_id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_GET['menu_id']]);
    $menu = $stmt->fetch();
} catch (PDOException $e) {
    die("Erreur lors de la récupération du menu : " . $e->getMessage());
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
            <li><a href="/connecter.php">Me Connecter</a></li>
     </ul>  
    </nav>
</header>

<main>
    <div class="space"></div>
<div>
    <h2><?= $menu['titre'] ?></h2>
</div>

<div class="theme-menu"> 
    <p><?= $menu['theme_id'] ?></p>
</div>

<section class="details-menu">
<div class="dtl-menu"> 
    <p class="dtl" style="grid-area: item-1">Description: <?= $menu['description'] ?></p>
    <p class="dtl" style="grid-area: item-2">Stock: <?= $menu['quantite_restante'] ?></p>
    <p class="dtl" style="grid-area: item-3">Nombre de personnes minimum: <?= $menu['nombre_personne_minimum'] ?></p>
    <p class="dtl" style="grid-area: item-4">Prix minimum: <?= $menu['prix_par_personne'] ?>€</p>
    <div class="dtl" style="grid-area: item-5">
        <img src="menu1.jpg" alt="Menu 1" class="menu-image">
    </div>
    <div class="dtl" style="grid-area: item-6">
        <?= $menu['plat'] 
    /* <p>velouté de potimarron et légumes de saison.</p>
    <p>Suprême de poulet rôti accompagné de pommes grenailles au thym.</p>
    <p>Tarte fine aux pommes</p>*/?> 
    </div>
    <p class="dtl" style="grid-area: item-7"> Allergènes: <?= $menu['allergenes'] ?></p>
    <p class="dtl" style="grid-area: item-8">Régime alimentaire: <?= $menu['regime_id'] ?></p>
    <p class="dtl" style="grid-area: item-9">Conditions de stockage, d'utilisation</p>
</div>
</section>

<nav>
    <button class="retour"><a href="/menus.html">Retour</a></button>

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