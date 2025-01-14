<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];

    // Upload de l'image
    move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . $image);

    // Insertion dans la base de données
    $sql = "INSERT INTO fleurs (nom, description, image) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nom, $description, $image]);

    echo "Fleur ajoutée avec succès!";
}
?>


