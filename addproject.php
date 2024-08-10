<?php
session_start();
require_once './_db/dbconnect.php';
// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
    
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Projet</title>
    <link rel="stylesheet" href="./assets/css/projecthandler.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Archivo+Black&family=Libre+Barcode+128+Text&family=Special+Elite&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Ajouter un Projet</h1>
        <?php include 'nav.php'; ?>
        <div id="logout-container">
            <a href="./_db/logout.php" class="benjamin" id="logout">Déconnexion</a>
        </div>
    </header>
    <main>
        <form id="projectForm" method="POST" autocomplete="off" enctype="multipart/form-data">
            <label for="titre">Titre du projet</label>
            <input type="text" id="titre" name="titre" required>          
            <label for="description_courte">Description courte</label>
            <textarea id="description_courte" name="description_courte" required></textarea>  
            <label for="image">Image du projet</label>
            <input type="file" id="image" name="image" accept="image/*" required>
            <div id="imagePreview"></div>
            <input type="hidden" id="image_path" name="image_path">
            <button type="submit" name="add_project">Ajouter le projet</button>
        </form>
        <div id="errorMessage" style="color: red;"></div>
        <div id="successMessage" style="color: green;"></div>
    </main>
    <footer>
    <p>&copy; 2024 - Gestion de Projets. Tous droits reserves. Marina TACITE</p>
    </footer>
    <script src="./assets/js/uploadimg.js"></script>
</body>
</html>