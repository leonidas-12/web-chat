<?php

require "fonction_php.php";
require "connexion_bd.php";
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['pass2'])) 
  { 
    //eviter la failles xss 
    $firstname = donnees_valide($_POST["firstname"]);
    $lastname = donnees_valide($_POST["lastname"]);
    $email = donnees_valide($_POST["email"]);
    $pass = donnees_valide($_POST["pass"]);
    $pass2 = donnees_valide($_POST["pass2"]);

    if (strlen($pass) <= 5) {
        header("location: /messagerie/inscription?reg_erreur=pass_length");
        exit;
    }

    if (strlen($pass) >= 200) {
        header("location: /messagerie/inscription?reg_erreur=pass_length2");
        exit;
    }

    //verifie si l'utilisateur existe dans la bdd
    $insert = $bdd->prepare('SELECT * FROM users WHERE email = ?');
    $insert->execute(array($email));
    $data = $insert->fetch();
    $row = $insert->rowCount();

    //si l'utilisateur n'existe pas
    if($row == 0){
            if(strlen($email) <= 200){
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                    if($pass == $pass2){
                        //si oui alors le mots de passe est hachée
                        $pass = password_hash($pass, PASSWORD_BCRYPT);
                        
                        //Préparation de requette sql
                        $insert = $bdd->prepare("INSERT INTO users(firstname, lastname, email, pass) 
                        VALUES(:firstname, :lastname, :email, :pass)");

                        //associe les valeurs entrées dans le formulaire au valeur des variables qui contient les champs de formulaire
                        $insert->bindValue(':firstname', $firstname);
                        $insert->bindValue(':lastname', $lastname);
                        $insert->bindValue(':email', $email);
                        $insert->bindValue(':pass', $pass);
                   
                        //execute la requette
                         $insert->execute();

                        header('Location:messagerie.php');
                        exit();
                    }else{header("Location:inscription_formulaire.php?reg_erreur=pass");exit();}                       
                }else{header("Location:inscription_formulaire.php?reg_erreur=email");exit();}  
            }else{ header("Location:inscription_formulaire.php?reg_erreur=email_length");exit();}
        }else{header("Location:inscription_formulaire.php?reg_erreur=already");exit();}
    }
   
