<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vender</title>
   <link rel="stylesheet" href="Iconos/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="css/vender.css?t=1">

    <link rel="stylesheet" href="css/reset.css?t=1">
  <link rel="stylesheet" href="css/grid.css?t=1">
  <link rel="stylesheet" href="css/layout.css?t=1">
  <link rel="stylesheet" href="css/nav.css?t=1">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  

  <header class="container-fluid header">
    <div class="container f0">
      <div class="item ph12 md4  inli-block  vertical-middle">
        <a href="index.php">
        <h1 class="logo round">Productos</h1>
      </a>
      </div>
      <!--Begin Pattern HTML-->
      <a href="#menu" class="menu-link"><i class="fas fa-bars f4"></i></a>
      <nav class="item ph12 md8  inli-block  vertical-middle center md-right p0 menu" id="menu" role="navigation">
        <ul>
          <li class="nobullet vertical-middle"><a class="item" href="index.php">Inicio</a></li>
          <li class="nobullet vertical-middle"><a class="item" href="listar_productos.php">Productos</a></li>
          <li class="nobullet vertical-middle"><a class="item" href="vender_producto.php">Vender</a></li>
          <li class="nobullet vertical-middle"><a class="item" href="ventas.php">Ventas</a></li>
          <li class="nobullet  vertical-middle "><a class="item " href="destruir_session.php"><i title="Salir"
                class="fas fa-sign-out-alt   f2"></i></a>
          </li>
        </ul>
      </nav>
    </div>
    <!--End Pattern HTML-->
  </header>

    <section class="secventas">
      <div class="max-width">
        <i class="fas fa-check"></i> <span>Seccion de ventas</span>


		<?php
      ini_set("display_errors", 0);
      session_start();
      if(!isset($_SESSION["carrito"])) $_SESSION["carrito"] = [];
      $granTotal = 0;

			if(isset($_GET["status"])){
				if($_GET["status"] === "1"){
					?>
						<div class="alert-caselar alert-success">
							<strong>¡Correcto!</strong> Venta realizada correctamente
						</div>
					<?php
				}else if($_GET["status"] === "2"){
					?>
					<div class="alert-caselar alert-info">
							<strong><i class="fas fa-check-double vertical-middle"></i> Venta cancelada</strong>
						</div>
					<?php
				}else if($_GET["status"] === "3"){
					?>
					<div class="alert alert-info">
							<strong>Ok!!</strong> Producto quitado de la lista☻
						</div>
					<?php
				}else if($_GET["status"] === "4"){
					?>
					<div class="alert noex alert-warning">
						<i class="fas fa-exclamation-triangle vertical-middle" style="color: yellow;"></i>	<strong>Warning:</strong> El producto que buscas no existe !!
						</div>
					<?php
				}else if($_GET["status"] === "5"){
					?>
					<div class="alert alert-danger">
						<i class="fas fa-exclamation-triangle vertical-middle" style="color: yellow; font-size:22px"></i>		<strong>Warning: </strong>El producto está agotado
						</div>
					<?php
				}else{
					?>
					<div class="alert alert-danger">
							<strong>Error:</strong> Algo salió mal mientras se realizaba la venta
						</div>
					<?php
				}
			}
		?>

        <div class="buscador">
          <form method="post" action="vender_agregarAlCarrito.php">
            <label for="codigo" class="label">Código de barras:</label><br>
            <input autocomplete="off" class="inp" autofocus class="form-control" name="codigo" required type="text"
              id="codigo" placeholder="Escribe el código del producto">
          </form>
        </div>

        <div class="con">
          <table border="1px" cellpadding="0" cellspacing="0" aling="center">
            <thead>
              <tr>
                <th HEIGHT="35px">ID</th>
                <th>Código</th>
                <th>Descripción</th>
                <th>Precio Venta</th>
                <th>Cantidad</th>
                <th>Total</th>
                <th>Quitar</th>
              </tr>
            </thead>
            <tbody>

            	<?php foreach($_SESSION["carrito"] as $indice => $producto){ 
						$granTotal += $producto->total;
					?>

              <tr>
                <td><?php echo $producto->id ?></td>
                <td><?php echo $producto->codigo ?></td>
                <td><?php echo $producto->descripcion ?></td>
                <td><?php echo $producto->precioVenta ?></td>
                <td><?php echo $producto->cantidad ?></td>
                <td><?php echo $producto->total ?></td>
                <td><a class="" href="<?php echo "Acciones/vender_quitarDelCarrito.php?indice=" . $indice?>"><i class="elimina fa fa-trash"></i></a></td>
              </tr>

              <?php } ?>

            </tbody>
          </table>
        </div>
        
        <p class="total" style="padding-top:1rem;"><i class="far fa-money-bill-alt vertical-middle"></i> Total Pagar: Lps<?php echo $granTotal; ?></p>

        <form action="Acciones/vender_TerminarVenta.php" method="POST">
        <input name="total" type="hidden" value="<?php echo $granTotal;?>">
        <div class="boton">
          <button class="terminar" type="submit">Terminar Venta</button>
          <a class="canse" href="Acciones/vender_CanselarVenta.php">Canselar venta</a>
        </div>
              </form>
      </div>
    </section>
 
</body>

</html>