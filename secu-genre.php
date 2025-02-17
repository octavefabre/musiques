<?php
 

 //1ère étape : récupérer les données du formulaire et s'assurer qu'elles soient conformes
    $nom = htmlspecialchars($_POST["nom"]);
    $genre = htmlspecialchars($_POST["genre"]);
    $nbmorceau = htmlspecialchars($_POST["nbmorceau"]);
    

// 2ème étape : écrire la requête avec des valeurs non définitives
$req = "INSERT INTO artistes (nom, genre, nbmorceau) VALUES (:nom, :genre, :nbmorceau)";

// 3ème étape : préparer la requête

$etat = $conn->prepare($req);

// 4ème étape : binder / remplacer les valeurs non définitives de la requête
$etat->bindParam(':nom', $nom, PDO::PARAM_STR);
$etat->bindParam(':genre', $genre, PDO::PARAM_STR);
$etat->bindParam(':nbmorceau', $nbmorceau, PDO::PARAM_INT);

// 5ème étape : exécuter la requête
$result = $etat->execute();

if($result):
    echo "Utilisateur ajouté avec succès !";
endif;

?>
