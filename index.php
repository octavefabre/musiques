<?php
    // Inclure le script de connexion à la DB 
    require_once("../dbconnect.php");

    //Test si la connexion avec PDO fonctionne :
    if ($conn): ?>
        <h1> Connexion à la BDD réussie ! </h1>
        <?php 
           
        $requete = "SELECT * FROM artistes";
        
        $exec = $conn->query($requete);
 
        $result = $exec->fetchAll(PDO::FETCH_ASSOC);
        
        ?>

        <?php else: ?>
        <h1> Connexion à la BDD échouée ! </h1>
        <?php endif; ?>

    