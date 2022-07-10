<?php 
	require "database.php";

      $connexion = DataBase::connect();
      $stat=$connexion->query('SELECT * FROM animals ORDER BY nom DESC LIMIT 15');

      $stat->execute();
 ?>