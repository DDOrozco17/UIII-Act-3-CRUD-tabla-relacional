<?php
include "../config/conexion.php";

$nombre_producto = $_POST['nombre_producto'];
$categoria_producto = $_POST['categoria_producto'];
$precio_unitario = $_POST['precio_unitario'];
$cantidad_stock = $_POST['cantidad_stock'];
$provedor = $_POST['provedor'];
$fecha_llegada = $_POST['fecha_llegada'];
$descripcion_productos = $_POST['descripcion_productos'];

$sql = "INSERT INTO tbl_productos (nombre_producto, categoria_producto, precio_unitario, cantidad_stock, provedor, fecha_llegada, descripcion_productos)
    VALUES ('$nombre_producto', '$categoria_producto', '$precio_unitario', '$cantidad_stock', '$provedor', '$fecha_llegada', '$descripcion_productos')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/categorias/index.php");
} else {
    echo "Datos no insertados";
}
?>
