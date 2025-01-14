<?php
$host = 'localhost';  // Hôte de la base de données
$dbname = 'partage_de_recettes';  // Nom de la base de données
$username = 'root';  // Utilisateur
$password = '';  // Mot de passe

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>
