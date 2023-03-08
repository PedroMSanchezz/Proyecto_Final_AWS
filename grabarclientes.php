<?php
include ('conexion.php');

// Insertar usuario
$sql_usuarios = "INSERT INTO Usuarios  VALUES ('".$_REQUEST['DNI']."','".$_REQUEST['NombreDeUsuario']."','".$_REQUEST['Nombre']."','".$_REQUEST['Apellidos']."','".$_REQUEST['CorreoElectronico']."','".$_REQUEST['Telefono']."','".$_REQUEST['Direccion']."','".$_REQUEST['tipo_usuario']."','".$_REQUEST['Password']."')";
 if (mysqli_query($conn, $sql_usuarios)) {
} else {
    echo "Error: " . $sql_usuarios . "<br>" . mysqli_error($conn);
}

// Insertar vendedor
 if ($_REQUEST['tipo_usuario'] == 'Vendedor') {
    $sql_vendedores = "INSERT INTO Vendedores VALUES ('".$_REQUEST['DNI']."','".$_REQUEST['TipoArtesania']."','".$_REQUEST['Licencia']."')";
if (mysqli_query($conn, $sql_vendedores)) {
    } else {
        echo "Error: " . $sql_vendedores . "<br>" . mysqli_error($conn);
    }
}

// Insertar cliente
if ($_REQUEST['tipo_usuario'] == 'Cliente') {
    $sql_cliente = "INSERT INTO Clientes  VALUES ('".$_REQUEST['DNI']."','".$_REQUEST['NumTarjetaCredito']."','".$_REQUEST['FormaPago']."')";
if (mysqli_query($conn, $sql_cliente)) {
    } else {
        echo "Error: " . $sql_cliente . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);

echo "<h1> Te has registrado existosamente </h1>";
echo "<br><a href='home.php'> Home </a>";
?>

