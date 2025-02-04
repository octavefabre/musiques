<?php 
    // Inclure le script de connexion à la DB
    require_once("./dbconnect.php");

    // Récupérer l'ID du produit (envoyé par le formulaire du fichier "index.php")
    $artisteId = $_POST["identifiant"];

    // Teste si la connexion à la BDD est réussie
    if($conn):

        // 1 - Rediger une requête qui va permettre de récupérer l'ensemble des informations d'un produit particulier en se basant sur son ID.
        $requeteFind = "SELECT * FROM artistes WHERE id = $artisteId";

        // 2 - Exécuter la requête
        $exec = $conn->query($requeteFind);

        // 3 - Traiter le resultat
        // On utilise FETCH ici car la récupération de données basées sur un ID est une requête qui ne retournera qu'un seul résultat
        $result = $exec->fetch(PDO::FETCH_ASSOC);
?>

<!-- On crée le formulaire de modification.
    Chaque champ de ce formulaire est hydraté avec les données précédentes
-->
<form action="./modifier.php" method="post">
    <input type="text" name="nom" value="<?php echo $result["nom"]; ?>">
    <input type="text" name="genre" value="<?php echo $result["genre"]; ?>">
    <input type="number" name="nbmorceau" value="<?php echo $result["nbmorceau"]; ?>">
    <input type="hidden" name="id" value="<?php echo $result["id"]; ?>">
    <input type="submit" value="Modifier le profil ">
</form>

<?php endif; ?>