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
  <title>Registrar nuevo producto</title>
   <link rel="stylesheet" href="Iconos/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="css/lista_productos.css">

</head>

<body>

<section class="sec1">
  
  <div class="for">
    <h1 title="regresar" class="regresar"><a href="listar_productos.php"><i class="fas fa-arrow-left"> regresar</i></a></h1>
    <h1><i class="fas fa-plus-square"></i> Insertando un nuevo producto.</h1>
    <form action="Acciones/producto_nuevo.php" method="POST">

      <label for="cod">Código de barras:</label><br>
      <input type="text" name="codigo" placeholder="Codigo de barra" class="inp" required>

      <label for="cod">Descripción:</label><br>
      <textarea name="descripcion" id="descripcion" class="text inp" placeholder="Escribe el nombre del producto"   required></textarea>

      <label for="cod">Precio de venta:</label><br>
      <input type="number" name="preVenta" placeholder="Precio de venta" class="inp" required>

      <label for="cod">Precio de compra:</label><br>
      <input type="number" name="preCompra" placeholder="precio de compra" class="inp" required>

      <label for="cod">Existencia:</label><br>
      <input type="number" name="existencia" placeholder="existencia del producto" class="inp" required>

      <div class="boton">
        <button type="submit">Guardar</button>
        <button class="canse" type="reset">Canselar</button>
      </div>
    </form>
  </div> 
</section>
</body>

</html>