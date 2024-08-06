<?php 

require_once './database.php';

$sql = "CREATE TABLE IF NOT EXISTS users("
		. "usuario_id  int(255) auto_increment not null,"
		. "nombre varchar (50),"
		. "apellido varchar (50),"
		. "tel int(255),"
		. "email varchar(255),"
		. "password varchar(255),"
		. "CONSTRAINT pk_users PRIMARY KEY(usuario_id))";

$create_users_table = mysqli_query($db, $sql);

