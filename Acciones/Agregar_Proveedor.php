
<?php 
ini_set("display_errors", 0);

if(!isset($_POST["codigo"]) || !isset($_POST["empresa"]) || !isset($_POST["producto"]) || !isset($_POST["telefono"]) || !isset($_POST["gmail"]) || !isset($_POST["direccion"]) || !isset($_POST["fecha"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "../base_de_datos.php";
$Codigo=$_POST['codigo'];
$Empresa=$_POST['empresa'];
$Producto=$_POST['producto'];
$Telefono=$_POST['telefono'];
$Correo=$_POST['gmail'];
$Direccion=$_POST['direccion'];
$Fecha=$_POST['fecha'];

$registros = $base->prepare("INSERT INTO proveedores(Codigo, Empresa, Producto, Telefono, Email, Direccion, Fecha_Cont) VALUES (?, ?, ?, ?, ?, ?, ?);");
$resultados = $registros->execute([$Codigo, $Empresa, $Producto, $Telefono, $Correo, $Direccion, $Fecha]);


if($resultados === TRUE){
  header("Location: ../lista_proveedores.php?status=c");
  exit;
}else echo "Algo salió mal. Por favor verifica que la tabla exista"; 


?>