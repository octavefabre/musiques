<?php

// connection to database
 require_once ("./dbconnect.php");

// teste si la connection est établie

if($conn):?>
    <h1> connection established</h1>
     
        

        <?php
        // READ - SELECT ( REQUETE PASSE PARTOUT SELECT * FROM )
        // requete SQL pour selectionner les données
        // Déclarer la requete SQL 

       // $sql = SELECT * FROM users;
        // préparer la requete
        // à la place products je peux y mettre une variable et donc renommer  ou meme inserer variable + tableau 

        $requete = "select * FROM artistes";

        // 2 execeuter la requete et stockage L execution  (vdans la variable $exec)
        // conn à la bd pour effectuer une requete ( SELECT, INSERT, UPDATE, DELETE)
        // on spécifie la requete à executer entre parenthese que j 'ai nommé à la requete precedemment redigée
        $exec = $conn->query($requete);

        // traitement du resultat 

            $result = $exec->fetchAll(PDO::FETCH_ASSOC);

          

        foreach ($result as $key => $value):?>

        <section>
            <div>

                <p><?php echo strtoupper($value['nom']); ?></p>
                <ul>
                    <li>id : <?php echo $value['id']; ?></li>
                    <li>email : <?php echo $value['genre']; ?></li>
                    <li>password : <?php echo $value['nbmorceau']; ?></li>
                
               
                </ul>






                <form action="./supprimer.php" method="post">
                    <input type="hidden" name="identifiant" value=<?php echo $value["id"];?>>
                    <input type="submit" value="Supprimer cette utilisateur">
                </form>
                
            </div>

            <form action="./form-modifier.php" method="post">
                <input type="hidden" name="identifiant" value="<?php
                 echo $value["id"];?>">
                 <input type="submit" value="Modifier ce produit">
            </form>

            

     




        </section>
        <?php endforeach; ?>

        
    
<?php endif;?>