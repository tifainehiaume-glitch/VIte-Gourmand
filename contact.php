<?php 
require_once 'config.php';
session_start();
if( $_SERVER['REQUEST_METHOD'] === 'POST') {;
    $valid = true;

    if(isset($_POST['submit'])) {
        $object = (int) trim($_POST['contact']);
        $name = (string) trim($_POST['name']);
        $email = (string) trim($_POST['email']);
        $message = (string) trim($_POST['message']);

        if(empty($name)) {
            $valid = false;
            $er_nom = "Veuillez entrer votre nom et prénom.";
        }
        if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $valid = false;
            $er_email = "Veuillez entrer une adresse email valide.";
        }
        $verif_object = array(1, 2, 3, 4);

        if(!in_array($object, $verif_object)) {
            $valid = false;
            $er_object = "Objet invalide.";
        }
        $nb_object = (int) $object;
        switch($object) {
            case 1: $object = "Commande"; break;
            case 2: $object = "Problème technique"; break;
            case 3: $object = "Service client"; break;
            case 4: $object = "Autre"; break;
            default: $object = "-- Sélectionnez un objet --"; break;

        }
         if(empty($message)) {
            $valid = false;
            $er_contact = "Veuillez entrer votre message.";
        }
        if ($valid) {

    $to = "contact@vite-et-gourmand.fr";

    $header = "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html; charset=UTF-8\r\n";
    $header .= "From: " . $name . " <" . $email . ">\r\n";

    $user_message = nl2br(htmlspecialchars($message));

    $email_content = "
    <html>
    <head>
        <title>Contact - Vite & Gourmand</title>
    </head>
    <body>
        <p><strong>Nom et Prénom:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Objet:</strong> $object</p>
        <p><strong>Message:</strong></p>
        <p>$user_message</p>
    </body>
    </html>";

    if (mail($to, $object, $email_content, $header)) {
        header("Location: index.html");
        exit();
    } else {
        $er_contact = "Erreur lors de l'envoi de l'email.";
            }


        header("Location: index.html");
        exit();
        }
    }
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
            <li><a href="/contact.php">Nous Contacter</a></li>
            <li><a href="/connecter.php">Me Connecter</a></li>
     </ul>  
    </nav>
</header>    
<main>
    <div class="space"></div>
    <section class="nous-contacter">
        <h2>Nous Contacter</h2>
    </section>
    <section class="contact-form">
        <form action="#" method="post">
       
<!-- si il y a une erreur alors on affiche un message d'erreur-->
<?php if(isset($er_object)) { ?>
<div class="er-msg"><?php echo $er_object; ?></div>
<?php } ?>
        <div class="contact">
            <label for="contact">Object:</label>
            <select name="contact" id="contact" required>
                <?php if(isset($er_object)) { ?>
                <option value="<?= $nb_object ?>" selected><?= $object ?></option>
                <?php } else { ?>
                <option value="" selected>-- Sélectionnez un objet --</option>
<?php }?>
               
                <option value="1">Commande</option>
                <option value="2">Problème technique</option>
                <option value="3">Service client</option>
                <option value="4">Autre</option>
            </select>
            </div>

<?php if(isset($er_nom)) { ?>
<div class="er-msg"><?php echo $er_nom; ?></div>
<?php } ?>


            <div class="contact">
            <label for="name">Nom & Prénom:</label>
            <input type="text" id="name" name="name" placeholder="Votre nom et prénom" required>
            </div>
            
<?php if(isset($er_email)) { ?>
<div class="er-msg"><?php echo $er_email; ?></div>
<?php } ?>
            <div class="contact">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Votre email" required>
            </div>

            <?php if(isset($er_contact)) { ?>
<div class="er-msg"><?php echo $er_contact; ?></div>
<?php } ?>

            <div class="contact">
            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="5" placeholder="Votre message" required></textarea>
            </div>

            <button type="submit" name="submit">Envoyer</button>
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