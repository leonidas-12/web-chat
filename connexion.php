<?php
    session_start();

    require "fonction_php.php";
    require "connexion_bd.php";

    // verifie si le fomulaire est remplie
    if(isset($_POST['email']) && isset($_POST['pass'])){

        //vérifie la validé des données
        $email = donnees_valide($_POST["email"]);
        $pass = donnees_valide($_POST["pass"]);

        //Envoie une requête à la base de données
        $insert = $bdd->prepare("SELECT * FROM users WHERE email = ?");
        $insert->execute(array($email));

        //récupère les données envoyers
        $data = $insert->fetch();
        $row = $insert->rowCount();
        
        if($row == 1){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                if(password_verify($pass, $data["pass"])){
                    $_SESSION["email"] = $data["email"];
                    $_SESSION["lastname"] = $data["lastname"];
                    $_SESSION["firstname"] = $data["firstname"];
                    header("Location: chat.php");
                    exit();
                }else{header("Location: index.php?log_erreur=pass"); exit();}
            }else {header("Location: inndex.php?log_erreur=email"); exit();}
        }else {header("Location: index.php?log_erreur=already"); exit();}
    }
?>









