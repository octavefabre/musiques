
<?php 
//Paramètre de connexion à la BD 
$host = 'localhost';
$user = 'root';
$password = '';
$dbName = 'musiques';

//Utilisation de la fonction de connexion PDO 
$conn = new PDO("mysql:host=$host;dbname=$dbName", $user, $password);
?>