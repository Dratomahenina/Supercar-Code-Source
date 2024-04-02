<?php
$host = "localhost";
$dbname = "kim_supercar";
$username = "root";
$password = "";

// Créer une connexion à la base de données
$mysqli = new mysqli($host, $username, $password, $dbname);

// Vérifier la connexion à la base de données
if ($mysqli->connect_error) {
    die("La connexion à la base de données a échoué : " . $mysqli->connect_error);
}

// Définir le jeu de caractères de la connexion
$mysqli->set_charset("utf8");

?>
