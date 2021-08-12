<?php
session_name("yova");
session_start();

if (!isset($_SESSION["usuario"])) {
  header("location:dlogin.php");
}
?>

<?php 
ini_set("display_errors", 0);
 if(!isset($_GET["id"])) exit();
 $id = $_GET["id"];
 include_once "../base_de_datos.php";
 $registros = $base->prepare("SELECT * FROM clientes WHERE id = ?;");
 $registros->execute([$id]);
 $clientes = $registros->fetch(PDO::FETCH_OBJ);
 if($producto === FALSE){
 	echo "¡No existe algún producto con ese ID!";
	exit();
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
<link rel="stylesheet" href="../css/lista_productos.css">

</head>

<body>

<section class="sec1">
  
  <div class="for">
    <h1 title="regresar" class="regresar"><a href="../lista_clientes.php"><i class="fas fa-arrow-left"> regresar</i></a></h1>
    

    <form form name="prueba" id="prueba" method="POST" action="guardar_clientes_editados.php" onsubmit="" >

 <input type="hidden" name="id" value="<?php echo $clientes->Id; ?>">

  <h1><i class="fas fa-plus-square"></i> Editando clientes Con El Id <?php echo $clientes->Id; ?></h1>

      <label for="cod">Código del cliente:</label><br>
      <input type="number" name="codigo" placeholder="Codigo de cliente" class="inp" required value="<?php echo $clientes->Codigo; ?>">

      <label for="cod">Nombre :</label><br>
      <input type="text" name="nombre" placeholder="Nombre del cliente" class="inp" required value="<?php echo $clientes->Nombre; ?>">

      <label for="cod">Apellido:</label><br>
      <input type="text" name="apellido" placeholder="Escribe apellido del cliente" class="inp" required value="<?php echo $clientes->Apellido; ?>">

      <label for="cod">Telefono:</label><br>
      <input type="number" name="telefono" placeholder="Escribe numero de telefono " class="inp" required value="<?php echo $clientes->Telefono; ?>">

      <label for="cod">Correo Electronico:</label><br>
      <input type="email" name="gmail" placeholder="Escribe correo electronico" class="inp" required value="<?php echo $clientes->Email; ?>">

      <label for="cod">Direccion:</label><br>
    <input type="text" name="direccion" placeholder="Escribe correo electronico" class="inp" required value="<?php echo $clientes->Direccion; ?>">

      <div class="boton">
        <button type="submit">Guardar</button>
        <button class="canse" type="reset">Canselar</button>
      </div>
    </form>
  </div> 
</section>
</body>

</html>