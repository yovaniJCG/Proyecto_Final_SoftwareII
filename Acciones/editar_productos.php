<?php 
 if(!isset($_GET["id"])) exit();
 $id = $_GET["id"];
 include_once "../base_de_datos.php";
 $registros = $base->prepare("SELECT * FROM productos WHERE id = ?;");
 $registros->execute([$id]);
 $producto = $registros->fetch(PDO::FETCH_OBJ);
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
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
     <link rel="stylesheet" href="../Iconos/css/all.min.css">
  <link rel="stylesheet" href="../css/lista_productos.css">
</head>
<body>

<section class="sec1">
  
  <div class="for">
    <h1 title="regresar" class="regresar"><a href="../listar_productos.php"><i class="fas fa-arrow-left"> regresar</i></a></h1>
    <h1><i class="fas fa-plus-square"></i> Editando Producto Con El Id <?php echo $producto->id; ?></h1>


    <form action="guardar_datos_editados.php" method="POST">

    
     <input type="hidden" name="id" value="<?php echo $producto->id; ?>">

      <label for="cod">Código de barras:</label><br>
      <input type="text" value="<?php echo $producto->codigo; ?>" name="codigo" placeholder="Codigo de barra" class="inp" required>

      <label for="cod">Descripción:</label><br>
      <textarea name="descripcion"  id="descripcion" class="text inp" placeholder="Escribe el nombre del producto"   required><?php echo $producto->descripcion ?></textarea>

      <label for="cod">Precio de venta:</label><br>
      <input type="number" value="<?php echo $producto->precioVenta ?>" name="preVenta" placeholder="Precio de venta" class="inp" required>

      <label for="cod">Precio de compra:</label><br>
      <input type="number" value="<?php echo $producto->precioCompra ?>" name="preCompra" placeholder="precio de compra" class="inp" required>

      <label for="cod">Existencia:</label><br>
      <input type="number" value="<?php echo $producto->existencia ?>" name="existencia" placeholder="existencia del producto" class="inp" required>

      <div class="boton">
        <button type="submit">Guardar</button>
       <button class="canse" type="reset"><a href="../listar_productos.php"> Canselar</button></a>
      </div>
    </form>
  </div> 
</section>
  
</body>
</html>