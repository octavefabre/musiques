<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un artiste via Formulaire</title>
</head>
<body>
    <h1>Ajouter un artiste</h1>
    <form action="./ajout.php" method="POST">
        <div>
            <label for="nom">Nom de l'artiste :</label><br>
            <input type="text" id="nom" name="nom" placeholder="Le nom de l'artiste" >
        </div>
        <br>
        <div>
            <label for="genre">Genre musical :</label><br>
            <input type="text" id="genre" name="genre" placeholder="Le genre musical de l'artiste" >
        </div>
        <br>
        <div>
            <label for="nbmorceau">Nombre de morceaux :</label><br>
            <input type="number" id="nbmorceau" name="nbmorceau" placeholder="Le nombre de morceaux de l'artiste" >
        </div>
        <br>
        <button type="submit">"Ajouter l'artiste"</button>
    </form>
</body>
</html>