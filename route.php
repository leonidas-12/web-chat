<?php

/*routes  */
$uri = $_SERVER["REQUEST_URI"]; 

switch($uri) {
    case "/messagerie/logout":
    case "/messagerie/inscription?reg_erreur=pass_length":
    case "/messagerie/inscription?reg_erreur=pass_length2":
    case "/messagerie/inscription?reg_erreur=already":
    case "/messagerie/inscription?reg_erreur=email_length":
    case "/messagerie/inscription?reg_erreur=email":
    case "/messagerie/inscription?reg_erreur=pass":
        require "inscription_formulaire.php";
        break; 
    
    case "/messagerie/":
        require "index.php";
        break;

    case "/messagerie/login":
        require "index.php";
        break;

    case "/messagerie/chat":
        require "chat.php";
        break;
        
    default:
        require "erreur.php";
        break;
}  


?>
