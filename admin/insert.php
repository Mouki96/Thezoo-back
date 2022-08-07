
<?php 
	include ("../Database/database.php");

    $nom = $description = $image = $nomError = $descriptionError = $imageError = "";
    $isSuccess = $isvalid = true;
    
    if(!empty($_POST)) {

        $nom          = $_POST['nom'];
        $description  = $_POST['description'];
        

        if(empty($nom)) {
            $nomError = " remplissez le nom ";
            $isSuccess = false;
        }

        if(empty($description)) {
            $descriptionError = " remplissez la description";
            $isSuccess = false;

        }
        if(($_FILES['image']['error']== 4)) {

            $imageError = " Choisissez une image ";
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

         /*if($isSuccess && $isValid)*//*{*/

            $imageDir ='../src/assets/images/';
            $imageFile = $imageDir . basename($image);
            // Move image into good folder
            $moveImage = move_uploaded_file($_FILES['image']['tmp_name'], $imageFile);
            
        // Insertion de données dans la table 'animal' de notre base de données 'db_thezoo'
            
            $insertValeur = $connexion->prepare("INSERT INTO animals (nom, description, image)
            VALUES (:nom, :description, :image)");
            $insertValeur->execute(array('nom'=> $nom,
                                        'description'=> $description,
                                        'image'=> $image));
            
            /*$insertValeur->/*execute();*/
        /*}*/
    }
}
    
 ?>



 


 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <title></title>
 </head>
 <body>
    <form action="insert.php" method="POST" enctype="multipart/form-data">
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

        <button type="submit">Valider</button>

    </div>
    
    

     
    

</form>
 </body>
 </html>