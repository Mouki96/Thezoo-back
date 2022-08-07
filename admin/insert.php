
<?php 
	include ("../Database/database.php");

    $nom = $description = $image = $nomError = $descriptionError = $imageError = "";
    $isSuccess = $isvalid = true;
    
    if(!empty($_POST)) {

        $nom          = $_POST['nom'];
        $description  = $_POST['description'];
        $image        = $_FILES['image'];

        if(empty($nom)) {
            $nomError = " remplissez le nom ";
            $isSuccess = false;
        }

        if(empty($description)) {
            $descriptionError = " remplissez la description";
            $isSuccess = false;

        }
        if(empty($image)) {

            $nomError = " Choisissez une image ";
            $isSuccess = false;

        }

        $image = $_FILES["image"]["name"];
        $fileSize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];
        
        $validImageExtension = ['jpg', 'jpeg', 'png', 'jfif', 'gif'];
        $imageExtension = explode('.', $image);
        $imageExtension = strtolower(end($imageExtension));
        if( !in_array($imageExtension, $validImageExtension) ){
        
        $imageError = 'Attention ! Seuls les fichiers .jpeg, .png, .jfif, .gif ou .jpg sont autorisées';
        $isValid = false;
    
        if($fileSize > 2097152){
            
            $imageError = 'La taille de l\'image ne doit dépasser 2Mo pour la rapidité de votre application,  choississez-en une autre';
            $isValid = false;      
        }
        if($isSuccess && $isValid){

            $imageDir ='../src/assets/image/';
            $imageFile = $imageDir . basename($image);
            // Move image into good folder
            $moveImage = move_uploaded_file($_FILES['image']['tmp_name'], $imageFile);
            
        // Insertion de données dans la table 'animal' de notre base de données 'db_thezoo'
            
            $insertValeur = $connexion->prepare("INSERT INTO animals (nom, description, image)
            VALUES (:nom, :description, :image)");
            $insertValeur->bindParam(':nom', $nom);
            $insertValeur->bindParam(':description', $description);
            $insertValeur->bindParam(':image', $image);
            /*$insertValeur->/*execute();*/
        }
    }
}
    
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
        <span class="error"> <?php echo $nomError ?> </span>
    </div>

    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
        <span class="error"> <?php echo $descriptionError ?> </span>

    </div>

    <div>
        <label for="image">Image:</label>
        <input type="file" id="image" name="image">
        <span class="error"> <?php echo $imageError ?> </span>

    </div>
    
    

     
    

</form>
 </body>
 </html>