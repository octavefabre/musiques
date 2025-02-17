<?php

    // 1ère étape : récupérer les données du formulaire et s'assurer qu'elles soient conformes
    $username = $_POST["username"];
    $passw = $_POST["passw"];

    // 2nd étape : écrire la requête avec des valeurs non définitives
    $req = "INSERT INTO users (username, pass) VALUES (:username, :pwd)";

    // 3ème étape : préparer la requête
    $etat = $conn->prepare($req);
    
    // Etape 4 : binder / remplacer les valeurs non définitives de la requête
    $etat->bindParam('username', $username, PDO::PARAM_STR);
    $etat->bindParam('pwd', $passw, PDO::PARAM_STR);

    // Etape 5 : executer la requête
    $result = $etat->execute();
    
    if($result):
        echo "Utilisateur ajouté avec succès !";
    endif;
    
?>