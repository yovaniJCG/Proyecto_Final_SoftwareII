<?php 
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "../base_de_datos.php";
$registros = $base->prepare("DELETE FROM proveedores WHERE id = ?;");
$resultado = $registros->execute([$id]);
if($resultado === TRUE){
	header("Location: ../lista_proveedores.php?m=1");
	exit;
}
else echo "Algo salió mal";
?>