<?php 

include("./includes/autoload.php");
require_once("database.php");


if(!isset($_GET["id"]) || empty($_GET["id"]) || !is_numeric($_GET["id"])){
	header("Location:index.php");
}

$id = $_GET['id'];
$user_query = mysqli_query($db,"SELECT * FROM users  WHERE usuario_id = {$id}");
$user = mysqli_fetch_assoc($user_query);

if (!isset($user["usuario_id"]) || empty($user["usuario_id"])) {
    header('Location:index.php');
}


$sql_update =  "UPDATE users SET (nombre,apellido,tel,email,password) VALUES (
    '{$_POST['nombre_update']}',
    '{$_POST['apellidos_update']}',
    '{$_POST['tel_update']}',
    '{$_POST['email_update']}',
    '{$_POST['password_update']}');";
$update_users = mysqli_query($db, $sql_update); 

if($update_users){
    header("Location: index.php");
} else {
    echo"error";
}


function setValueField($data, $field, $textform = false){
	if(isset($data) && count($data)>=1){ 
		if($textform != false){
			echo 'si'.$data[$field];
		}else{
			echo "value='{$data[$field]}'"; 
		}
	}
}


?>


<div class="container m-5 position-relative">
<h1 class="align-text-top" >Editar usuario: <?php echo $user["nombre"]." ".$user["apellido"]; ?></h1>
<form method="POST" action="" enctype="multipart/form-data">  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="labelNombre">Nombre</label>
      <input type="text" class="form-control" name="nombre_update" <?php setValueField($user, "nombre"); ?> />
    </div>

    <div class="form-group col-md-6">
      <label for="labelApellidos">Apellidos</label>
      <input type="text" class="form-control" name="apellidos_update" <?php setValueField($user, "apellido"); ?> >
    </div>
   </div>

   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="labelEmail">Email</label>
      <input type="email" class="form-control" name="email_update" <?php setValueField($user, "email"); ?>>
    </div>

    <div class="form-group col-md-6">
      <label for="labelPassword">Password</label>
      <input type="password" class="form-control" name="password_update" <?php setValueField($user, "password"); ?>>
    </div>
   </div>

  <div class="form-group">
    <label for="labelTel">Telefono</label>
    <input type="tel" class="form-control" name="tel_update" <?php setValueField($user, "tel"); ?> />
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
        <button type="submit" class="btn btn-danger">Cancelar </button>
    </div>
    <div class="form-group col-md-6">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
  </div>
</form>
</div> 

<?php require_once './includes/footer/footer.php'; ?>