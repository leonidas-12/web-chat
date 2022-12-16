

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
                        if(isset($_POST)) require "connexion.php";
                        
                        if(isset($_GET['log_erreur']))
                        {
                            $erreur = htmlspecialchars($_GET['log_erreur']);

                            switch($erreur){
                                case "pass":
                                    echo "<div class='alert'>Mot de passe incorrect</div>";
                                break;
            
                                case "email":
                                    echo "<div class='alert'>Email incorrect</div>";
                                break;
            
                                case "already":
                                    echo "<div class='alert'>Compte inexistant</div>";
                                break;
                                }
                        }
                    ?>
                    <h3> Connexion </h3>
                  
                        <label for="email">Email</label>
                        <input type="email" name="email" id="input-email" class="all-input" placeholder="Votre email"></input >
                        
                        <label for="mot de passe">Mot de passe</label>
                        <div id="eyes">
                            <input type="password" class="input-password" id="pass" name="pass" placeholder="Votre mot de passe"  value="<?=(isset($_POST['pass'])? $_POST['pass']: '')?>">
                            </input >
                            <div id="eyes-svg"> 
                                <svg xmlns="http://www.w3.org/2000/svg" fill="#087eba" viewBox="0 0 24 24" width="20" height="20" ><g id="password-show" data-name="01 align center">
                                <path d="M23.821,11.181v0C22.943,9.261,19.5,3,12,3S1.057,9.261.179,11.181a1.969,1.969,0,0,0,0,1.64C1.057,14.739,4.5,21,12,21s10.943-6.261,11.821-8.181A1.968,1.968,0,0,0,23.821,11.181ZM12,19c-6.307,0-9.25-5.366-10-6.989C2.75,10.366,5.693,5,12,5c6.292,0,9.236,5.343,10,7C21.236,13.657,18.292,19,12,19Z"/>
                                <path d="M12,7a5,5,0,1,0,5,5A5.006,5.006,0,0,0,12,7Zm0,8a3,3,0,1,1,3-3A3,3,0,0,1,12,15Z"/></g>
                                </svg>

                                <svg xmlns="http://www.w3.org/2000/svg" id="hide-password" fill="#087eba" viewBox="0 0 24 24" width="20" height="20">
                                <path d="M23.271,9.419A15.866,15.866,0,0,0,19.9,5.51l2.8-2.8a1,1,0,0,0-1.414-1.414L18.241,4.345A12.054,12.054,0,0,0,12,2.655C5.809,2.655,2.281,6.893.729,9.419a4.908,4.908,0,0,0,0,5.162A15.866,15.866,0,0,0,4.1,18.49l-2.8,2.8a1,1,0,1,0,1.414,1.414l3.052-3.052A12.054,12.054,0,0,0,12,21.345c6.191,0,9.719-4.238,11.271-6.764A4.908,4.908,0,0,0,23.271,9.419ZM2.433,13.534a2.918,2.918,0,0,1,0-3.068C3.767,8.3,6.782,4.655,12,4.655A10.1,10.1,0,0,1,16.766,5.82L14.753,7.833a4.992,4.992,0,0,0-6.92,6.92l-2.31,2.31A13.723,13.723,0,0,1,2.433,13.534ZM15,12a3,3,0,0,1-3,3,2.951,2.951,0,0,1-1.285-.3L14.7,10.715A2.951,2.951,0,0,1,15,12ZM9,12a3,3,0,0,1,3-3,2.951,2.951,0,0,1,1.285.3L9.3,13.285A2.951,2.951,0,0,1,9,12Zm12.567,1.534C20.233,15.7,17.218,19.345,12,19.345A10.1,10.1,0,0,1,7.234,18.18l2.013-2.013a4.992,4.992,0,0,0,6.92-6.92l2.31-2.31a13.723,13.723,0,0,1,3.09,3.529A2.918,2.918,0,0,1,21.567,13.534Z"/>
                                </svg>
                            </div>
                            

                        </div>
                        
                        
                        <button id="connection" class="btn-submit" type="submit">
                            <h4>
                                connexion
                            </h4>
                            
                        </button>
                        
                </form>
            </div>
        </div>
    </div>
    <script src="assets/app.js"></script>
</body>
</html>
