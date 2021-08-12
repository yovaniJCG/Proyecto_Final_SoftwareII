<?php
session_start();

unset($_SESSION["carrito"]);
$_SESSION["carrito"] = [];

header("Location: ../vender_producto.php?status=2");
?>