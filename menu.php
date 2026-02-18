<?php
// Inclure le fichier de configuration
require_once 'config.php';

try {
    $stmt = $pdo-> query ("SELECT * FROM menu WHERE menu_id = $_GET[menu_id]");
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
            <li><a href="/contact.html">Nous Contacter</a></li>
            <li><a href="/connecter.php">Me Connecter</a></li>
     </ul>  
    </nav>
</header>
   <h1><?= $menus[0]['titre'] ?></h1>
</body>
</html>