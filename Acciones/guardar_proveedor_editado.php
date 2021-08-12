<?php 

#Salir si alguno de los datos no resivido
if(
	!isset($_POST["codigo"]) || 
	!isset($_POST["empresa"]) || 
	!isset($_POST["producto"]) || 
	!isset($_POST["telefono"]) || 
	!isset($_POST["gmail"]) || 
	!isset($_POST["direccion"]) || 
	!isset($_POST["fecha"]) || 
	!isset($_POST["id"])
) exit();



include_once "../base_de_datos.php";
$id = $_POST["id"];
$codigo = $_POST["codigo"];
$empresa = $_POST["empresa"];
$producto = $_POST["producto"];
$telefono = $_POST["telefono"];
$gmail = $_POST["gmail"];
$direccion = $_POST["direccion"];
$fecha = $_POST["fecha"];


$registros = $base->prepare("UPDATE proveedores  SET Codigo = ?, Empresa = ?, Producto = ?, Telefono = ?, Email = ? , Direccion = ? , Fecha_Cont = ? WHERE Id = ?;");

$resultado = $registros->execute([$codigo, $empresa, $producto, $telefono, $gmail, $direccion, $fecha, $id]);

if($resultado === TRUE){
	 header("Location: ../lista_proveedores.php?status=b");
  $msm = "Datos Editados Correctamente";
	exit;
}else 
echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";

?>