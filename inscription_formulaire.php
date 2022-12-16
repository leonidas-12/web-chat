
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">

        <div class="assets">
            <div class="logo">
                <h5>web-chat</h5>
            </div>
           
            <div class="text-content">
                <h2>Rester en contact avec vos proches</h2>
            </div>
        </div>

        <div class="main">
            <form class="form" method="post" action="">
                <?php
                    if (isset($_POST)) require "inscription.php";
                    if (isset($_GET['reg_erreur'])){
                        $erreur = $_GET['reg_erreur'];

                        switch($erreur){
                            case "pass":
                                echo "<div class='alert'>Les mots de passe ne sont pas identiques </div>";
                            break;
                            case "pass_length":
                                echo "<div class='alert'>Le mot de passe doit contenir au moins 5 charactere</div>";
                             break;
                            case "pass_length2":
                                echo "<div class='alert'>Le mot de passe doit contenir moins de 20 charactere</div>";
                                break;
  
                            case "email":
                                echo "<div class='alert'>Email invalide</div>";
                            break;

                            case "email_length":
                                echo "<div class='alert'>Email long</div>";
                            break;

                            case "already":
                                echo "<div class='alert'>Compte existant</div>";
                            break;
                            }
                    } 

                ?>
                        <h3>
                        Inscrivez vous dès maintenant
                        </h3>
                    
                        <label for="first-name">Prénom</label>
                        <input type="text" name="firstname" id="Fname" class="all-input" placeholder="Votre Prénom *" required value="<?php echo (isset($_GET['lastname']) ? $_GET['lastname']: '')?>">

                        <label for="last-name">Nom</label>
                        <input type="text" name="lastname" id="Lname" class="all-input" placeholder="Votre Nom *" required>

                        <label for="email">E-mail</label>
                        <input type="email" name="email" id="Email" class="all-input" placeholder="Votre E-mail *" required>

                        <label for="pass">Mot de passe</label>
                        <input type="password" class="Pass"  minlength="5" name="pass" placeholder="Votre Mot de Passe *" required>
                        
                        <label for="retape-passwprd">Confirmer le mot de passe</label>
                        <input type="password" id="Pass2"  name="pass2" placeholder="Confirmer le Mot de Passe *" required>
                    
                        <button id="connexion" type="submit" class="btn-submit">
                            <h4>
                                Inscription
                            </h4>

                        </button>
            </form>
        </div>
    </div>
    <script src="assets/app.js"></script>       
</body>
</html>          
            
            
           
