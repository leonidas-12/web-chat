<?php

//information sur la bd
$hote = "localhost";
$lastname_bd = "messagerie";
$users = "adam";
$pass = "zadam112";

try {
//Indique les parametre a fournir a PDO pour se connecter a la bd
$bdd = new PDO("mysql:host=$hote;dbname=$lastname_bd", $users,$pass);
//definie les attributs de PDO
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Capture et affiche affiche les erreurs possibles
} catch (PDOException $erreur) {
    echo "Erreur: ".$erreur->getMessage();
}

?>