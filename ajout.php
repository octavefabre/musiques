<?php
// Paramètre de connexion à la DB
require_once("./dbconnect.php");

// Récupération des données du formulaire
$nom = $_POST["nom"];
$genre = $_POST["genre"];
$nbmorceau = $_POST["nbmorceau"];

// Utilisation de la fonction de PDO

// Teste si la connexion avec PDO fonctionne:
if ($conn): ?>
    <h1>Connexion à la base de données réussie</h1>

    <?php 
    // Préparation de la requête d'insertion
    $requete = "INSERT INTO artistes (nom, genre, nbmorceau) VALUES ('$nom', '$genre', '$nbmorceau')";
    $exec =$conn->query($requete);
    if($exec):?>
    
        <h1>Insertion réussie</h1>
    <?php else: ?>
        <h1>Erreur lors de l'insertion</h1>
    <?php endif; ?>
<?php else: ?>
    <h1>Erreur de connexion à la base de données</h1>
<?php endif; ?>