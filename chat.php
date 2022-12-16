<?php
session_start();
if (!isset($_SESSION["email"])) {
    header('Location: index.php');
}

$firstname = $_SESSION["firstname"];
$lastname = $_SESSION["lastname"];
$email = $_SESSION["email"];

if (isset($_POST)) require "inscription.php";

/* print_r($uri); */

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/style.css">
        <title>Document</title>
    </head>
    <body>
        
        <!-- menu -->
        <div class="webchat-container">

            <div class="menu">
                <div class="menu-content">

                    <div class="menu-items menu-items-click">
                        <img class="menu-img" src="assets/img/messages.svg" alt="messages-icon">
                        <h6 class="text-icon">MESSAGES</h6>
                    </div>
                        
                    <div class="menu-items">
                        <img class="menu-img" src="assets/img/contacts.svg" alt="contacts-icon">
                        <h6 class="text-icon">CONTACTS</h6>
                    </div>                        

                    <div class="menu-items">
                        <img class="menu-img" src="assets/img/ajouter-utilisateur.svg" alt="editer-icon">
                        <h6 class="text-icon">AJOUTER DES<br>  CONTACTS</h6>
                    </div>

                    <div class="menu-items">
                        <img cleass="menu-img" src="assets/img/editer.svg" alt="edition-icon">
                        <h6 class="text-icon">PREFERENCES</h6>
                    </div>
                           
                </div>
            </div>

            <!-- user login and status -->
            <div class="user-login">
                <?php echo "$firstname  $lastname" ?></h1>
                <a href="deconnexion.php">Déconnexion</a>
            </div>

            <!-- messages -->

            <div class="contacts-messages">
                <h2>MESSAGES</h2>
                <div id="search-user-container">
                    <svg xmlns="http://www.w3.org/2000/svg" id="bottom" viewBox="0 0 24 24" width="20" height="20">
                    <path d="M18.71,8.21a1,1,0,0,0-1.42,0l-4.58,4.58a1,1,0,0,1-1.42,0L6.71,8.21a1,1,0,0,0-1.42,0,1,1,0,0,0,0,1.41l4.59,4.59a3,3,0,0,0,4.24,0l4.59-4.59A1,1,0,0,0,18.71,8.21Z"/></svg>
                    </svg>
                    <input type="search" id="search-user-input"  placeholder="Rechercher un utilisateur">

                    <div id="search-user-content">
                        
                    </div>                 
                </div>      
            </div>
             

            <div class="messages">
                <div class="send-messages-content">
                    <h4> <?php echo "friends firstname" ?> </h4>
                    <h4> <?php echo "firiends lastname" ?> </h4>
                </div>

                <div class="div">
                    <img src="assets/img/agrafe.svg">
                    <form action="" method="post" id="send-message-form">
                        <textarea id="story" name="story" action=""> </textarea>
                            <div id="options">
                                <button type="submit" id="btn-send-message">
                                    <img src="assets/img/fleche-droite.svg">
                                </button> 
                            </div>                                                                                                                                            
                    </form>  

                </div>
            </div>
        </div>

    <script src="assets/app.js"></script>
          <!-- Charge React -->
        <!-- <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script> -->
        <!-- <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script> -->

        <!-- charge le composant react -->
        <!-- <script src="like_button.js"></script> -->
    </body>
</html>
