<?php
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
    <h1 title="regresar" class="regresar"><a href="lista_proveedores.php"><i class="fas fa-arrow-left"> regresar</i></a></h1>
    <h1><i class="fas fa-plus-square"></i> Agregar un nuevo proveedor.</h1>

    <form form name="prueba" id="prueba" method="POST" action="Acciones/Agregar_Proveedor.php" onsubmit="" >

      <label for="cod">Código de proveedor:</label><br>
      <input type="number" name="codigo" placeholder="Codigo de proveedor" class="inp" required>

      <label for="cod">Nombre Empresa:</label><br>
      <input type="text" name="empresa" placeholder="Nombre de la empresa proveedora" class="inp" required>

      <label for="cod">Producto:</label><br>
      <input type="text" name="producto" placeholder="Escribe producto que provee" class="inp" required>

      <label for="cod">Telefono:</label><br>
      <input type="number" name="telefono" placeholder="Escribe numero de telefono " class="inp" required>

      <label for="cod">Correo Electronico:</label><br>
      <input type="email" name="gmail" placeholder="Escribe correo electronico" class="inp" required>

      <label for="cod">Direccion:</label><br>
      <textarea name="direccion" id="direccion" class="text inp" placeholder="Escribe direccion del proveedor"   required></textarea>

      <label for="cod">Fecha contrato:</label><br>
      <input type="date" name="fecha" placeholder="Escribe fecha de contrato" class="inp" required>

      <div class="boton">
        <button type="submit">Guardar</button>
        <button class="canse" type="reset">Canselar</button>
      </div>
    </form>
  </div> 
</section>
</body>

</html>