<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

include_once("././database.php");
include_once("././create_table.php");


$list_users = mysqli_query($db,'SELECT * FROM users');

?>

<html>
		<div class="container m-5">
		<div class=" container m-5">
		
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregar_modal">
  			Agregar
		</button>
<form method="POST" action="add_user.php">
<div class="modal fade" id="agregar_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  

	<div class="form-group">
    <label for="name">Nombre:</label>
    <input type="text" class="form-control" name="nombre_user" aria-describedby="name" placeholder="Escribe tu nombre">
  </div>
	<div class="form-group">
    <label for="apellido">Apellido:</label>
    <input type="text" class="form-control" name="apellido_user" aria-describedby="apellido" placeholder="Escribe tu apellido">
  </div>
  <div class="form-group">
    <label for="telefono">Telefono:</label>
    <input type="tel" class="form-control" name="tel_user" aria-describedby="telefono" placeholder="Digita tu numero">
  </div>

  <div class="form-group">
    <label for="email1">Email</label>
    <input type="email" class="form-control" name="email_user" aria-describedby="emailHelp" placeholder="Escribe tu email">
  </div>
  <div class="form-group">
    <label for="password">Contraseña</label>
    <input type="password" class="form-control" name="password_user" placeholder="Escribe tu Contraseña">
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

		</div class="container m-5">
		<table id="datatable" class="table position-relative mx-auto" style="width: 100%;">
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Telefono</th>
					<th>Email</th>
					<th>Password</th>
					<th>Editar/Eliminar</th>
				</tr>
			</thead>
			
			<tbody>

          <?php while ($l_u = mysqli_fetch_assoc($list_users)) { ?>

				<tr>
            <td> <?=$l_u["usuario_id"] ?> </td>
            <td> <?=$l_u["nombre"] ?> </td>
            <td> <?=$l_u["apellido"] ?> </td>
            <td> <?=$l_u["tel"] ?> </td>
            <td> <?=$l_u["email"] ?> </td>
            <td> <?=$l_u["password"] ?> </td>
            <td> <a href="update.php?id=<?=$l_u["usuario_id"]?>" class="btn btn-warning">Editar</a> 
            <a href="delete_user.php?id=<?=$l_u["usuario_id"]?>" class="btn btn-danger">Eliminar</a>
            </td>
                 

				</tr>
				<?php } ?>

			</tbody>
		</table>

		</div>

    

</html>