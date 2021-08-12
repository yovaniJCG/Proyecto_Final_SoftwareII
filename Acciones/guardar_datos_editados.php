<?php 

#Salir si alguno de los datos no es resivido
if(
	!isset($_POST["codigo"]) || 
	!isset($_POST["descripcion"]) || 
	!isset($_POST["preCompra"]) || 
	!isset($_POST["preVenta"]) || 
	!isset($_POST["existencia"]) || 
	!isset($_POST["id"])
) exit();

include_once "../base_de_datos.php";
$id = $_POST["id"];
$codigo = $_POST["codigo"];
$descripcion = $_POST["descripcion"];
$precioCompra = $_POST["preCompra"];
$precioVenta = $_POST["preVenta"];
$existencia = $_POST["existencia"];

$registros = $base->prepare("UPDATE productos SET codigo = ?, descripcion = ?, precioCompra = ?, precioVenta = ?, existencia = ? WHERE id = ?;");
$resultado = $registros->execute([$codigo, $descripcion, $precioCompra, $precioVenta, $existencia, $id]);

if($resultado === TRUE){
	 header("Location: ../listar_productos.php?status=b");
  $msm = "Datos Editados Correctamente";
	exit;
}else 
echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";

?>
<!-- ----------------------------------------------------------------------------- -->
