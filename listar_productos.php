<?php 
 ini_set("display_errors", 0);
session_name("yova");
session_start();
if (!isset($_SESSION["usuario"])) {
  header("location:dlogin.php");
}
?>

<?php 
include_once "base_de_datos.php";

$where="";

if (!empty($_POST)) {
  $valor = $_POST['campo'];

  if (!empty($valor)) {
    $where = "WHERE descripcion LIKE '%$valor%' ";
  }
}

$registros = $base->query("SELECT * FROM productos $where;")->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de productos</title>
   <link rel="stylesheet" href="Iconos/css/all.min.css">
   <link rel="stylesheet" href="css/datatables.min.css">
 <link rel="stylesheet" href="css/style copy.css">
  <link rel="stylesheet" href="css/reset.css?t=1">
  <link rel="stylesheet" href="css/grid.css">
  <link rel="stylesheet" href="css/layout.css?t=1">
  <link rel="stylesheet" href="css/nav.css?t=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">   


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="css/datatables.min.js"></script>

  <script>
/*********Data Table********** */
$(document).ready( function () {
    $('#myTable').DataTable({
      "language":{
        "lengthMenu": "Mostrar _MENU_ Registros por pagina",

        "info": "Mostrando pagina _PAGE_ de _PAGES_",

        "infoEmpty": "No hay registros disponibles",

        "infoFiltered": "(filtrada de _MAX_ registros)",

        "loadingRecords": "Cargando. . .",

        "processing": "Procesando. . .",

        "search": "Buscar:",

        "zeroRecords": "No se encontraron Registros coincidentes",

        "paginate":{
          "next":  "Siguiente",
          "previous": "Anterior"
        },
      }
    });
} );
  </script>
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

  <section class="sec1">
    <div class="max-width">

  

      <div class="titulo">
      <i class="fas fa-check"></i> <h1>Productos</h1>
      </div>

      <div class="añadir">
        <a href="insertar_productos.php">
          <i class="fas fa-plus-square"></i> Nuevo Producto
        </a>
      </div>
    </div>

    <div class="max-width">
      <?php 
    		if(isset($_GET["status"])){
       			if($_GET["status"] === "a"){
			?>
						<div class="PE alert-success">
						<i class="far fa-check-circle vertical-middle"></i>	Eliminado (1) producto.
						</div>
				<?php
				}else if($_GET["status"]==="b"){
          	?>
          <div class="PED alert-success">
					<i class="far fa-check-circle vertical-middle"></i>	<strong>¡Correcto!</strong> Producto  Editado.
						</div><br><br><br>
               <?php
        }else if($_GET["status"]==="c"){
          	?>
          <div class="PEA alert-success">
							<i class="far fa-check-circle vertical-middle"></i> Producto Agregado.
						</div><br><br><br>
               <?php
        }
      }
        ?>

        <?php if(isset($_GET['m'])) : ?>
        <div class="flash-data" data-flashdata="<?= $_GET['m']; ?>"></div>
        <?php endif; ?>
  	
          </div>
    <div class="tabla">
      <table class="display" id="myTable">
        <thead class="encabezado">
          <tr>
            <th HEIGHT="35px" >ID</th>
            <th>Codigo</th>
            <th>Descripcion</th>
            <th>Precio Venta</th>
            <th>Precio Compra</th>
            <th>Existencia</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach($registros as $producto){ ?>
          <tr>
            <td><?php echo $producto->id ?></td>
            <td><?php echo $producto->codigo ?></td>
            <td><?php echo $producto->descripcion ?></td>
            <td><?php echo $producto->precioVenta ?> Lps</td>
            <td><?php echo $producto->precioCompra ?> Lps</td>
            <td><?php echo $producto->existencia ?></td>
            <td><a href="<?php echo "Acciones/editar_productos.php?id=" . $producto->id ?>"><i class="editar fa fa-edit"></i></a></td>
					<td><a href="<?php echo "Acciones/eliminar_producto.php?id=" . $producto->id ?>" class='btn_del'><i class="eliminar fa fa-trash"></i></a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </section>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
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