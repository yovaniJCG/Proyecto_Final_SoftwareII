<?php
if(!isset($_GET["id"])) exit();
$id = $_GET["id"];
include_once "../base_de_datos.php";
$sentencia = $base->prepare("DELETE FROM ventas WHERE id = ?;");
$resultado = $sentencia->execute([$id]);
if($resultado === TRUE){
	header("Location: ../ventas.php?m=1");
	exit;
}
else echo "Algo salió mal";
?>