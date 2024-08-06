<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

$servername = "localhost:3308";
$username = "root";
$password = "";
$database = "prueba_1";

$db = new mysqli($servername,$username,$password,$database);

if ($db-> connect_error) {
    die("Conexion fallida: ".$db->connect_error);
}