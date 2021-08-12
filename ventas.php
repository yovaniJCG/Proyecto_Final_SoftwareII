
<?php
include_once "base_de_datos.php";
$sentencia = $base->query("SELECT ventas.total, ventas.fecha, ventas.id, GROUP_CONCAT(	productos.codigo, '..',  productos.descripcion, '..', productos_vendidos.cantidad SEPARATOR '__') AS productos FROM ventas INNER JOIN productos_vendidos ON productos_vendidos.id_venta = ventas.id INNER JOIN productos ON productos.id = productos_vendidos.id_producto GROUP BY ventas.id ORDER BY ventas.id;");
$ventas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>
<?php 
$total_dinero= $base->query(" SELECT SUM(total) AS total_todas_ventas FROM ventas");
$resultado = $total_dinero->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ventas Reportes</title>
</head>
   <link rel="stylesheet" href="Iconos/css/all.min.css">
 <link rel="stylesheet" href="css/style copy.css?t=1">
  <link rel="stylesheet" href="css/reset.css?t=1">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/layout.css?t=1">
  <link rel="stylesheet" href="css/nav.css?t=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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


  <?php if(isset($_GET['m'])) : ?>
        <div class="flash-data" data-flashdata="<?= $_GET['m']; ?>"></div>
        <?php endif; ?>

  <section class="sec1">
    <div class="max-width">
      <div class="titulo">
      <i class="fas fa-check"></i> <h1>Reporte de Ventas</h1>
      </div>
      <div class="añadir">
        <a href="vender_producto.php">
          <i class="fas fa-plus-square"></i> Nueva Venta
        </a>
      </div>
    </div>
    <div class="tabla">
      <table border="0" cellpadding="0" cellspacing="0" aling="center">
        <thead >
          <tr>
            <!-- <th HEIGHT="35px" >ID</th> -->
         	<th HEIGHT="35px" >#</th>
					<th>Fecha</th>
					<th>Productos vendidos</th>
					<th>Total</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($ventas as $venta){ ?>
          <tr>
            
            <td><?php echo $venta->id ?></td>
            <td><?php echo $venta->fecha ?></td>

            	<td>
						<table border="1px" cellspacing="0" style=padding:1rem;>
							<thead>
								<tr>
									<th>Código</th>
									<th>Descripción</th>
									<th>Cantidad</th>
								</tr>
							</thead>
							<tbody>
                	<?php foreach(explode("__", $venta->productos) as $productosConcatenados){ 
								$producto = explode("..", $productosConcatenados)
								?>
								<tr>
									<td><?php echo $producto[0] ?></td>
									<td><?php echo $producto[1] ?></td>
									<td><?php echo $producto[2] ?></td>
								</tr>
                		<?php } ?>
							</tbody>
						</table>
					</td>

          <td><?php echo $venta->total ?> lps</td>
					<td><a href="<?php echo "Acciones/vender_eliminarVentaReporte.php?id=" . $venta->id?>" class='btn_del'><i class="eliminar fa fa-trash"></i></a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
	     <?php foreach ($resultado as $total_d) {
    } ?>
    <div class="total_todas_ventas">
      <p>Total en todas las ventas : <?php echo $total_d->total_todas_ventas ?></p>
    </div>
  </section>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>

  /**Alert de eliminar***/

$('.btn_del').on('click', function(e){
  e.preventDefault();
  const href = $(this).attr('href');

  Swal.fire({
  title: 'Seguro que quieres eliminar?',
  text: "Se borrara de forma permanente",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, Eliminar!'
}).then((result) => {
  if (result.value) {
    document.location.href = href;
  }
})
});

const flashdata = $('.flash-data').data('flashdata');
if(flashdata) {
  Swal.fire({
  position: 'top-center',
  icon: 'info',
  title: 'Exito',
  html: '<p class="red">Registro Eliminado</p>',
  showConfirmButton: false,
  timer: 2000
});
}
/*************END ALERT ELIMINAR******************/

    $(document).ready(function () {
      $('body').addClass('js');

      var $menu = $('#menu'),
        $menulink = $('.menu-link')

      var $links = $('#menu').find('a');//dentro id menu encuentra enlances 'a'

      $menulink.click(function () {
        $menulink.toggleClass('active')
        $menu.toggleClass('active')
        return false;
      });

      //esto es para cuando le de click a un enlace del menu me lleve a la seccion y automatico se cierre el menu
      $links.click(function () {
        $menulink.toggleClass('active')
        $menu.toggleClass('active')

      });
    });


  </script>
</body>
</html>
