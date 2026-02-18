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
            <li><a href="/menus.html">Nos Menus</a></li>
            <li><a href="/contact.html">Nous Contacter</a></li>
            <li><a href="/connecter.html">Me Connecter</a></li>
     </ul>  
    </nav>
</header>    
<main>
    <div class="space"></div>
<div>
    <h2>Me Connecter</h2>
</div>
<?php
// Inclure le fichier de configuration
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email != "" && $password != "") 
    
    $req = $bd->query("SELECT * FROM utilisateur WHERE email = '$email' AND password = '$password'");
    $rep = $req->fetch();
    if ($rep) {
        header("Location: espace.html");
        exit();
    } else {
        $error_msg = "Identifiant ou mot de passe incorrect.";
    }
}
?>
<section class="connecter-form">
    <form action="#" method="post">
        <div class="contact">
            <label for="email">Identifiant:</label>
            <input type="text" id="email" name="email" required>
        </div>

        <div class="contact">
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required>
            <p>Mot de passe oublié ? <a href="/reinitialiser.html">Réinitialiser</a></p>
        </div>

        <button type="submit"><a href="#">Se Connecter</a></button>
        <div class="inscription">
            <p>Pas encore de compte ? <a href="/inscription.html">S'inscrire</a></p>
        </div>
    </form>
</section>
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