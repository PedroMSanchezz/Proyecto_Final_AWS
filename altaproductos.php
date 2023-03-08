<!DOCTYPE html>
<html>
<head>
    <title>Formulario de productos</title>
</head>
<body>
    <h1>Formulario de productos</h1>
    <form method="post" action="grabarproductos.php" enctype="multipart/form-data">
        <label for="Vendedor">Propietario:</label>
        <select id="Vendedor" name="DNI_vendedor">
            <?php
            include ('conexion.php');
            // Obtener los usuarios vendedores de la base de datos
            $sql = "SELECT DNI_vendedor, NombredeUsuario FROM Usuarios INNER JOIN Vendedores ON Usuarios.DNI = Vendedores.DNI_vendedor WHERE tipo_usuario = 'Vendedor'";
            $result = $conn->query($sql);

            // Crear las opciones del select con los usuarios vendedores
            while($row = $result->fetch_assoc()) {
                echo "<option value='" . $row["DNI_vendedor"] . "'>" . $row["NombredeUsuario"] . "</option>";
            }
            ?>
        </select><br><br>

        <label for="Nombreproducto">Nombre del producto:</label>
        <input type="text" id="Nombreproducto" name="Nombreproducto"><br><br>

        <label for="Precio">Precio:</label>
        <input type="number" id="Precio" name="Precio" step="0.01"><br><br>

        <label for="Imagen">Imagen:</label>
        <input type="file" id="Imagen" name="Imagen"><br><br>

        <input type="submit" name="submit" value="Grabar">
    </form>
</body>
</html>
