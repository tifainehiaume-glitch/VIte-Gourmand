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
   <h1><?= $menus[0]['titre'] ?></h1>
</body>
</html>