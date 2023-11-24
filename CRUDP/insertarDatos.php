<?php
include "../config/conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $nombre_proveedor = $_POST['nombre_proveedor'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $correo_electronico = $_POST['correo_electronico'];
    $producto_principal = $_POST['producto_principal'];
    $fecha_entrega = $_POST['fecha_entrega'];
    $total_productos = $_POST['total_productos'];

    // Consulta SQL para insertar datos en la tabla 'tbl_proveedor'
    $sql = "INSERT INTO tbl_proveedor (nombre_provedor, direccion, telefono, correo_electronico, producto_principal, fecha_entrega, total_productos)
            VALUES ('$nombre_proveedor', '$direccion', '$telefono', '$correo_electronico', '$producto_principal', '$fecha_entrega', '$total_productos')";

    // Ejecutar la consulta
    $resultado = mysqli_query($conexion, $sql);

    // Verificar si la inserción fue exitosa
    if ($resultado) {
        header("location:../Formularios/productos/index.php");
    } else {
        echo "Error al insertar datos: " . mysqli_error($conexion);
    }
}

include "../config/conexion.php";
?>
