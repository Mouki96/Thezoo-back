<?php 
  // les champs de notre serveur et la base de données
    $hostName = "localhost";
    $dbUser   = "root";
    $dbName   = "db_thezoo";
    $password = "";
    
  
try {
    // connexion à la base de données
    $connexion = new PDO("mysql:host=$hostName;dbname=$dbName", $dbUser, $password);

    // Mise en place du mode PDO en cas d'erreur ou d'exception
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    catch(PDOException $e){
        echo 'Erreur  : '.$e->getMessage();
    }

    




 ?>