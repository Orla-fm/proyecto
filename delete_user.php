<?php
    require_once("database.php");

    
    if(!isset($_GET["id"]) || empty($_GET["id"]) || !is_numeric($_GET["id"])){
        header("Location:index.php");
    }
    
    $id = $_GET['id'];
    $delete_user = mysqli_query($db,"DELETE FROM users  WHERE usuario_id = {$id}");
    header("Location: index.php");
    

