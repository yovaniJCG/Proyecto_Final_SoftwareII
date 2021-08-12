
<?php 
 ini_set("display_errors", 0);

 if(!isset($_GET["id"])) exit();
 $id = $_GET["id"];
 include_once "../base_de_datos.php";
 $registros = $base->prepare("SELECT * FROM proveedores WHERE id = ?;");
 $registros->execute([$id]);
 $proveedor = $registros->fetch(PDO::FETCH_OBJ);
 if($proveedor === FALSE){
 	echo "¡No existe algún proveedor con ese ID!";
	exit();
 }
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <link rel="stylesheet" href="../Iconos/css/all.min.css">
  <link rel="stylesheet" href="../css/lista_productos.css">
</head>
<body>

<section class="sec1">
  
  <div class="for">
    <h1 title="regresar" class="regresar"><a href="../lista_proveedores.php"><i class="fas fa-arrow-left"> regresar</i></a></h1>
    <h1><i class="fas fa-plus-square"></i> Editando Proveedores con El Id <?php echo $proveedor->Id; ?></h1>


    <form action="guardar_proveedor_editado.php" method="POST">

    
     <input type="hidden" name="id" value="<?php echo $proveedor-> Id; ?>">

   
      <label for="cod">Código de proveedor:</label><br>
      <input type="number" name="codigo" placeholder="Codigo de proveedor" class="inp" required value="<?php echo $proveedor->Codigo; ?>">

      <label for="cod">Nombre Empresa:</label><br>
      <input type="text" name="empresa" placeholder="Nombre de la empresa proveedora" class="inp" required value="<?php echo $proveedor->Empresa; ?>">

      <label for="cod">Producto:</label><br>
      <input type="text" name="producto" placeholder="Escribe producto que provee" class="inp" required value="<?php echo $proveedor->Producto; ?>">

      <label for="cod">Telefono:</label><br>
      <input type="number" name="telefono" placeholder="Escribe numero de telefono " class="inp" required value="<?php echo $proveedor->Telefono; ?>">

      <label for="cod">Correo Electronico:</label><br>
      <input type="email" name="gmail" placeholder="Escribe correo electronico" class="inp" required value="<?php echo $proveedor->Email; ?>">

    
      <label for="cod">Direccion:</label><br>
      <input type="text" name="direccion" placeholder="Escribe correo electronico" class="inp" required value="<?php echo $proveedor->Direccion; ?>">

      <label for="cod">Fecha contrato:</label><br>
      <input type="date" name="fecha" placeholder="Escribe fecha de contrato" class="inp" required value="<?php echo $proveedor->Fecha_Cont; ?>">
      

      <div class="boton">
        <button type="submit">Guardar</button>
       <button class="canse" type="reset"><a href="../lista_proveedores.php"> Canselar</button></a>
      </div>
    </form>
  </div> 
</section>
  
</body>
</html>