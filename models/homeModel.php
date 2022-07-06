<?php 
	require "database.php";

	$sql="SELECT nom,description,image FROM animals";
	$stat=$connexion->prepare($sql);

	$stat->execute();
	$stat->fetchAll();


 ?>