<?php 

#Salir si alguno de los datos no está presente
if(
	!isset($_POST["codigo"]) || 
	!isset($_POST["nombre"]) || 
	!isset($_POST["apellido"]) || 
	!isset($_POST["telefono"]) || 
	!isset($_POST["gmail"]) || 
	!isset($_POST["direccion"]) ||
  !isset($_POST["id"])
) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "../base_de_datos.php";
$id = $_POST["id"];
$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$gmail = $_POST["gmail"];
$direccion = $_POST["direccion"];

$registros = $base->prepare("UPDATE clientes SET Codigo = ?, Nombre = ?, Apellido = ?, Telefono = ?, Email = ?, Direccion = ? WHERE Id = ?;");
$resultado = $registros->execute([$codigo, $nombre, $apellido, $telefono, $gmail, $direccion, $id]);

if($resultado === TRUE){
	 header("Location: ../lista_clientes.php?status=b");
	exit;
}else 
echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del producto";

?>