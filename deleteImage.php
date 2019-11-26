<?php


    require 'database.php';
    $id = $_REQUEST['id'];

    $records = $conn->prepare("DELETE FROM images WHERE id = '$id'");
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    if($records){
        header("Location: /proyectophp/adminImages.php");
    }else{
        echo "An error has occurred, try again";
    }

?>