
<?php 
	include ("../Database/database.php");
 

    // Insertion de données dans la table 'animal' de notre base de données 'db_thezoo'

    $insertValeur = $connexion->prepare("INSERT INTO animals (nom, description, image)
    VALUES (:nom, :description, :image)");
    $insertValeur->bindParam(':nom', $nom);
    $insertValeur->bindParam(':description', $description);
    $insertValeur->bindParam(':image', $image);
    /*$insertValeur->/*execute();*/
    
 ?>



 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title></title>
 </head>
 <body>
 	<form action="insert.php" method="POST">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">
    </div>

    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
    </div>

    <div>
        <label for="image">Image:</label>
        <input type="file" id="image" name="image">
    </div>
    
    

     
    

</form>
 </body>
 </html>