<?php 
ini_set("display_errors", 0);

if(!isset($_POST["codigo"]) || !isset($_POST["descripcion"]) || !isset($_POST["preVenta"]) || !isset($_POST["preCompra"]) || !isset($_POST["existencia"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "../base_de_datos.php";
$codigo = $_POST["codigo"];
$descripcion = $_POST["descripcion"];
$precioVenta = $_POST["preVenta"];
$precioCompra = $_POST["preCompra"];
$existencia = $_POST["existencia"];

$registros = $base->prepare("INSERT INTO productos(codigo, descripcion, precioVenta, precioCompra, existencia) VALUES (?, ?, ?, ?, ?);");
$resultado = $registros->execute([$codigo, $descripcion, $precioVenta, $precioCompra, $existencia]);

// $cuenta = $resultado->rowCount();

if($resultado === TRUE){
	header("Location: ../listar_productos.php?status=c");
	
}
else echo "Algo salió mal. Por favor verifica que la tabla exista";

?>
