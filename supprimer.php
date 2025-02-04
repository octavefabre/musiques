
<?php
var_dump($_POST);
        $usersIdentifiant = $_POST["identifiant"];

        // Inclure le script de connexion à la DB
        require_once("./dbconnect.php");

        // Teste si la connexion avec PDO fonctionne :
        if($conn):?>
            <?php 
                $requete = "DELETE FROM artistes WHERE id = $usersIdentifiant";
                $exec = $conn->query($requete);

            if($exec):
            ?>
                <h1>Suppression effectuée</h1>
            <?php endif; ?>
        
    <?php endif;?>