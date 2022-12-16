<?php

function donnees_valide($donnees)
{
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    
    return $donnees;
}

//trim => Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
//stripslashes => Suprime tous les \ et retourne une chaine de charactère
//htmlspecialchars=> Convertit les caractères spéciaux en entités HTML