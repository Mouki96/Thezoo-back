<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="src/assets/css/feuille.css">
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
            <li><a href="index.php">Accueil</a></li>
            <li><a href="./src/pages/espece.php">Espèces</a></li>
            <li><a href="./src/pages/categorie.php">Catégories</a></li>
            <li><a href="#">A Propos</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="./src/pages/Contact.php">Contact</a></li>
        </ul>
    </div>


         <div class="banniere">
             <img src="src/assets/images/banini.jpg" alt="l'éléphant" title="faune">
             <h2>King of Animals</h2>
        </div>


        <!-- Container contenant les animaux page Principale -->

    <div class="container1"> 

    	<div class="section2">

            <ul class="picture2">

             <?php 
                require "models/homeModel.php";

                foreach($stat as $accueil){
                
            ?>
           <li class="read" >
               <h3><?= $accueil["nom"]; ?></h3>
            <img src="src/assets/images/<?php echo $accueil['image']; ?>"> 
            <p><?php  echo $accueil["description"] ; ?></p> 
           </li>

                <?php }  ?>

       </ul>

    </div>
    <?php 
        require_once('src/partials/footer.php');
    ?>
</body>
</html>
</body>
</html>