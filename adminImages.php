

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Image</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">IdImage</th>
            <th scope="col">name</th>
            <th scope="col">image</th>
            <th scope="col">idUser</th>
            </tr>
        </thead>
        <tbody>
            
            <?php 
                    $mysqli = new mysqli("localhost", "root", "", "php_proyecto");
                    if ($mysqli->connect_errno) {
                        printf("Conexión fallida: %s\n", $mysqli->connect_error);
                        exit();
                    }

                    $sql = "SELECT * FROM images";
                    $result = $mysqli->query($sql);
                     while($row = $result->fetch_assoc()){
                ?>
                <tr>
                <th scope="row"><?php printf($row['id']);?> </th>
                <td><?php echo $row['name'];?></td>
                <td> <img src="data:image/jpg;base64, <?php echo base64_encode($row['image']); ?>" alt=""  class="img-fluid" alt="Responsive image"></td>
                <td><?php echo $row['idUser'];?></td>
                <td> <a href="deleteImage.php?id=<?php echo $row['id'];?>">Eliminar</a></td>
                </tr>
            <?php
            }
            ?>
            
        </tbody>
</table>
  </body>
</html>