 


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

        <button type="submit">Valider</button>

    </div>
    
    

     
    

</form>
 </body>
 </html>