<?php 
	require "database.php";

      $connexion = DataBase::connect();
      $stat=$connexion->query('SELECT * FROM animals ORDER BY id DESC LIMIT 4');

      $stat->execute();

 ?>