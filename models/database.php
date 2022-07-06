<?php 
  // les champs de notre serveur et la base de données
   
  class DataBase 
  {

    private static $hostName = "localhost";
    private static $dbName = "db_thezoo";
    private static $dbUser = "root";
    private static $password = "";

    public static $connexion = null; 

    public static function connect() 
    {

      try {
        // connexion à la base de données
        self::$connexion = new PDO("mysql:host=".self::$hostName.";dbname=".self::$dbName, self::$dbUser, self::$password);
    
        // Mise en place du mode PDO en cas d'erreur ou d'exception
        self::$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        }
        catch(PDOException $e){
            echo 'Erreur  : '.$e->getMessage();
        }
        
        return self::$connexion;
      }

    public static function disconnnect() 
    {
      
      self::$connexion = null;
    }


  }
