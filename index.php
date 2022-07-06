<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/feuille.css">
	<title></title>
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
            <li><a href="Contact.html">Contact</a></li>
        </ul>
    </div>


         <div class="banniere">
             <img src="images/banini.jpg" alt="l'éléphant" title="faune">
             <h2>King of Animals</h2>
        </div>


        <!-- Container contenant les animaux page Principale -->

    <div class="container1"> 

    	<div class="section2">

            <ul class="picture2">

             <?php 
                require 'models/database.php';

               $connexion = DataBase::connect();
               $stat=$connexion->query('SELECT * FROM animals');

               $stat->execute();
                foreach($stat as $accueil){
                
            ?>
           <li class="read" >
               <h3><?= $accueil["nom"]; ?></h3>
            <img src="images/"<?php echo $accueil['image']; ?> 
               <p><?php  echo $accueil["description"] ; ?></p> 
           </li>

                <?php }  ?>

       </ul>

    </div>








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
                <p> ici on présente diverse race d'animaux!</p>
            </li>

        </ul>
        <hr class="ligne">
        <div>
        	<p>Created By Mouki_Bakuss</p>
        </div>
    </footer>


  



    
</body>
</html>
</body>
</html>