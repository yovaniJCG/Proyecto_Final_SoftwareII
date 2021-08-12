<?php

if (empty($_POST["user"]) || empty($_POST['contra'])) {
	header("location:dlogin.php?status=c");
	exit();
}

$useri=($_POST["user"]);
$passw=($_POST["contra"]);

$coneccion = mysqli_connect("localhost", "root", "", "proyecto_ventas");

$query="SELECT * FROM users  WHERE Usuario = '$useri'";

$resultado= (mysqli_query($coneccion, $query)); 
$row_user= mysqli_fetch_assoc($resultado);

if (empty($row_user['Usuario'])) {
	header("Location:dlogin.php?status=a");
}else{
	$cont = $row_user['pass']; 

	if (password_verify($passw, $cont)) {
		session_name("yova");
		session_start();
		$_SESSION["usuario"]=$_POST["user"];
		header("location:index.php");
	}else{
		header("Location:dlogin.php?status=b");
	}
}
?>