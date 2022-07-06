<?php 
	require "database.php";

	$stat=$connexion->prepare('SELECT * FROM animals');

	$stat->execute();
	$home = $stat->fetchAll();

 ?>