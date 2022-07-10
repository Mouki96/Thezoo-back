<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Page Contact</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../assets/css/feuille.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
</head>
<body>

	<input type="checkbox" name="" id="check" />
    <label for="check" class="btn-label">
        <span id="btn">☰</span>
        <span id="cancel">X</span>
    </label>
    <div class="sidebar">
        <header> TheZOO
        </header>
        <ul>
            <li><a href="../../index.php">Accueil</a></li>
            <li><a href="./espece.php">Espèces</a></li>
            <li><a href="./categorie.php">Catégories</a></li>
            <li><a href="#">A Propos</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="./Contact.php">Contact</a></li>
        </ul>
    </div>

	<?php 
		require_once '../partials/footer.php';
	?>

</body>
</html>