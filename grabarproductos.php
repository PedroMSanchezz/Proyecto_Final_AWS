<?php
include('conexion.php');
$Vendedor = $_POST['DNI_vendedor'];
$Nombreproducto = $_POST['Nombreproducto'];
$Precio = $_POST['Precio'];
$Imagen = $_FILES['Imagen']['name'];
$imagen_temporal = $_FILES['Imagen']['tmp_name'];

// Comprobamos que se haya seleccionado una imagen
if ($Imagen) {
    // Movemos la imagen temporal al directorio de imágenes
    move_uploaded_file($imagen_temporal, "/var/www/html/imagenes/$Imagen");
} else {
    // Si no se ha seleccionado una imagen, asignamos una imagen por defecto
    $Imagen = "default.jpg";
}

$sql = "INSERT INTO Productos (Id_producto, Nombreproducto, Precio, Imagen, DNI_vendedor) VALUES (null, '$Nombreproducto', $Precio, '$Imagen', '$Vendedor')";
if (mysqli_query($conn, $sql)) {
    echo "<h1> Alta de producto realizada correctamente </h1>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

echo "<br><a href='homeproveedores.php'> Volver al Inicio </a>";
?>

