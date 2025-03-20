<?php 

    try{
        $user = "root";
        $pass = "";
        $bdd = new PDO('mysql:host=localhost;dbname=sjc_hardware', $user, $pass);


    }catch(PDOException $e){
        print "Erreur! :" .$e->getMessage().
        "<br/>";
        die();  

    }

?>