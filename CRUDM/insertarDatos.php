<?php
include "../config/conexion.php";

$id_proveedor = $_POST['id_proveedor'];
$id_producto = $_POST['id_producto'];
$cantidad_comprada = $_POST['cantidad_comprada'];
$precio_total = $_POST['precio_total'];
$fecha_transaccion = $_POST['fecha_transaccion'];

$sql = "INSERT INTO tbl_transacciones (id_proveedor, id_producto, cantidad_comprada, precio_total, fecha_transaccion)
    VALUES ('$id_proveedor', '$id_producto', '$cantidad_comprada', '$precio_total', '$fecha_transaccion')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/marcas/index.php");
} else {
    echo "Datos no insertados";
}
?>
