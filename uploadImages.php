<?php

  require 'database.php';
  $message = '';
  if(isset($_POST["submit"])){
        $revisar = getimagesize($_FILES["image"]["tmp_name"]);
        if($revisar !== false){
           
            $name = $_POST['name'];
            $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));



            $sql = "INSERT INTO images (name ,image) VALUES ('$name', '$image')";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':image', $image);
            $stmt->execute();
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
        

            if ($stmt->execute()) {
                header("Location: /proyectophp/index.php");
            } else {
            $message = 'Sorry there must have been an issue inserting your image';
            }
        }
}
  
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Image</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>

    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

  </body>
</html>