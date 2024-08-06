<?php
include("./database.php");

$crearalta =  "INSERT INTO users (nombre,apellido,tel,email,password) VALUES (
    '{$_POST['nombre_user']}',
    '{$_POST['apellido_user']}',
    '{$_POST['tel_user']}',
    '{$_POST['email_user']}',
    '{$_POST['password_user']}');";
$insert_users = mysqli_query($db, $crearalta);

if ($insert_users) {
    header("Location: index.php");
} 