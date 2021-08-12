<?php 
ini_set("display_errors", 0);

if(!isset($_POST["codigo"]) || !isset($_POST["nombre"]) || !isset($_POST["apellido"]) || !isset($_POST["telefono"]) || !isset($_POST["gmail"]) || !isset($_POST["direccion"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "../base_de_datos.php";
$Codigo=$_POST['codigo'];
$Nombre=$_POST['nombre'];
$Apellido=$_POST['apellido'];
$Telefono=$_POST['telefono'];
$Correo=$_POST['gmail'];
$Direccion=$_POST['direccion'];

$registros = $base->prepare("INSERT INTO clientes( Codigo, Nombre, Apellido, Telefono, Email, Direccion) VALUES (?, ?, ?, ?, ?, ?);");
$resultado = $registros->execute([$Codigo, $Nombre, $Apellido, $Telefono, $Correo, $Direccion]);

// $cuenta = $resultado->rowCount();

if($resultado === TRUE){
  header("Location: ../lista_clientes.php?status=c");
  
}else echo "Algo salió mal. Por favor verifica que la tabla exista";

?>

