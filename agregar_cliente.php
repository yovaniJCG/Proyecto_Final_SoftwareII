<?php
error_reporting(E_ALL);//para ver errores graves.
ini_set('display_errors', 1);

session_name("yova");
session_start();

if (!isset($_SESSION["usuario"])) {
  header("location:dlogin.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transacional proveedor</title>
   <link rel="stylesheet" href="Iconos/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="css/lista_productos.css">

</head>

<body>

<section class="sec1">
  
  <div class="for">
    <h1 title="regresar" class="regresar"><a href="lista_clientes.php"><i class="fas fa-arrow-left"> regresar</i></a></h1>
    <h1><i class="fas fa-plus-square"></i> Agregar un nuevo cliente.</h1>

    <form method="POST" action="Acciones/Agregar_Cliente.php">

      <label for="cod">Código del cliente:</label><br>
      <input type="number" name="codigo" placeholder="Codigo de cliente" class="inp" required>

      <label for="cod">Nombre :</label><br>
      <input type="text" name="nombre" placeholder="Nombre del cliente" class="inp" required>

      <label for="cod">Apellido:</label><br>
      <input type="text" name="apellido" placeholder="Escribe apellido del cliente" class="inp" required>

      <label for="cod">Telefono:</label><br>
      <input type="number" name="telefono" placeholder="Escribe numero de telefono " class="inp" required>

      <label for="cod">Correo Electronico:</label><br>
      <input type="email" name="gmail" placeholder="Escribe correo electronico" class="inp" required>

      <label for="cod">Direccion:</label><br>
      <textarea name="direccion" id="direccion" class="text inp" placeholder="Escribe direccion del cliente"   required></textarea>

      <div class="boton">
        <button type="submit">Guardar</button>
        <button class="canse" type="reset">Canselar</button>
      </div>
    </form>
  </div> 
</section>
</body>

</html>