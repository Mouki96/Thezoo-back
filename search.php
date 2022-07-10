<?php 
     require "models/especesModel.php";

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	 <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TheZOO | Acceuil</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/feuille.css">
	<title>Page de recherche</title>
</head>
<body>

	<input type="checkbox" name="" id="check">
    <label for="check" class="btn-label">
        <span id="btn">☰</span>
        <span id="cancel">X</span>
    </label>
    <div class="sidebar">
        <header> TheZOO
        </header>
        <ul>
            <li><a href="index.html">Accueil</a></li>
            <li><a href="search.html">Espèces</a></li>
            <li><a href="categorie.html">Catégories</a></li>
            <li><a href="#">A Propos</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>

    <input type="search" name="search" placeholder="Rechercher un animal" id="Filt"
    onkeyup="searchFilter()">
    <!-- debut de nos cards contenant différent espèces -->

     <div class="card1">

       <ul class="picture" id="listener">
          <?php 
               foreach ($stat as $espece ) {
                    
               
           ?>
           <li class="see" >
                <h3><?php echo  $espece['nom']; ?></h3>
               <img src="images/<?php echo $espece['image']; ?>">
               <p><?php echo $espece['description']; ?></p>
               
           </li>
           <?php } ?>

           
       </ul>

    </div>
    <!-- Fin de la card -->








    <footer>
        <ul>
            <li>
                <h1>Nous contactez</h1>
                <p> Pour nous joindre appeller au:</p>
            </li>
            <li>
                <h1>Nos références</h1>
                <p>Nous serions toujours disponible pour vous!</p>
            </li>
            <li>
                <h1>Nos catalogues</h1>
                <p> ici on présente diverse race d'animaix!</p>
            </li>
        </ul>
    </footer>

    <script src="js/feuille.js"></script>
    <script src="js/filtrage.js"></script>

</body>
</html>