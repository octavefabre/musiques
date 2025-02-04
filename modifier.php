<?php 
// Récupère chaque valeur transmise par $_POST et les stocke dans des variables distinctes
$nom = $_POST["nom"];
$genre = $_POST["genre"];
$nbMorceau = $_POST["nbmorceau"]; // Vous pouvez choisir de ne pas mettre à jour le mot de passe si le champ est vide
$artisteId = $_POST["id"];

// Inclure le script de connexion à la DB
require_once("./dbconnect.php");

// Teste si la connexion à la base de données a fonctionné correctement
if ($conn):

    // Préparer la requête de mise à jour de l'utilisateur
    // On ne met à jour le mot de passe que s'il est fourni
    $requete = "UPDATE artistes SET nom = '$nom', genre = '$genre', nbmorceau = '$nbMorceau' WHERE id = $artisteId";

    // Exécuter la requête
    $exec = $conn->query($requete);

    // Vérifier si l'exécution de la requête s'est bien passée
    if ($exec):
        echo "<h1>Mise à jour réussie</h1>";
    else:
        echo "<h1>Erreur lors de la mise à jour</h1>";
    endif;

else:
    echo "<h1>Erreur de connexion à la base de données</h1>";
endif;
?>
