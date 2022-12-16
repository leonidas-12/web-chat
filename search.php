<?php
require "connexion_bd.php";
        $result = $bdd->query("SELECT * FROM users");
        $result = $result->fetchAll();
        $result = json_encode($result);
        print_r($result);
?>



