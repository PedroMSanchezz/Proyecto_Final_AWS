<!DOCTYPE html>
<html>
<head>
        <title>Registro de Usuarios</title>
</head>
<body>
        <h1>Registro de Usuarios</h1>
        <form method="post" action="grabarclientes.php">
                <label for="DNI">DNI:</label>
                <input type="text" id="DNI" name="DNI" required><br>

                <label for="NombreDeUsuario">Nombre de Usuario:</label>
                <input type="text" id="NombreDeUsuario" name="NombreDeUsuario" required><br>

                <label for="Nombre">Nombre:</label>
                <input type="text" id="Nombre" name="Nombre" required><br>

                <label for="Apellidos">Apellidos:</label>
                <input type="text" id="Apellidos" name="Apellidos" required><br>

                <label for="CorreoElectronico">Correo electrónico:</label>
                <input type="email" id="CorreoElectronico" name="CorreoElectronico" required><br>

                <label for="Telefono">Teléfono:</label>
                <input type="tel" id="Telefono" name="Telefono" required><br>

                <label for="Direccion">Dirección:</label>
                <input type="text" id="Direccion" name="Direccion" required><br>

                <p>Tipo de usuario:</p>
                <input type="radio" id="Cliente" name="tipo_usuario" value="Cliente" required>
                <label for="Cliente">Cliente</label><br>

                <input type="radio" id="Vendedor" name="tipo_usuario" value="Vendedor" required>
                <label for="Vendedor">Vendedor</label><br>

                <label for="Password">Contraseña:</label>
                <input type="password" id="Password" name="Password"><br>
                <p>Información adicional:</p>

                <!-- Campos específicos para clientes -->
                <div id="cliente-fields" style="display: none;">
                        <label for="NumTarjetaCredito">Número de tarjeta de crédito:</label>
                        <input type="text" id="NumTarjetaCredito" name="NumTarjetaCredito"><br>
                        <label for="FormaPago">Forma de Pago:</label>
                        <select id="FormaPago" name="FormaPago">
                        <option value="Tarjeta">Tarjeta</option>
                        <option value="Efectivo">Efectivo</option>
                        </select><br>
                </div>

                <!-- Campos específicos para vendedores -->
                <div id="vendedor-fields" style="display: none;">
                        <label for="TipoArtesania">Tipo de artesanía:</label>
                        <input type="text" id="TipoArtesania" name="TipoArtesania"><br>
                        <label for="Licencia">¿Tiene licencia?</label>
                        <input type="radio" id="LicenciaSi" name="Licencia" value="si">
                        <label for="LicenciaSi">Sí</label>
                        <input type="radio" id="LicenciaNo" name="Licencia" value="no">
                        <label for="LicenciaNo">No</label>
                </div>

                <input type="submit" value="Registrar">
        </form>

        <script>
                // Mostrar u ocultar campos específicos según el tipo de usuario seleccionado
                const clienteFields = document.getElementById('cliente-fields');
                const vendedorFields = document.getElementById('vendedor-fields');

                document.getElementById('Cliente').addEventListener('click', (event) => {
                        clienteFields.style.display = 'block';
                        vendedorFields.style.display = 'none';
                });

                document.getElementById('Vendedor').addEventListener('click', (event) => {
                        vendedorFields.style.display = 'block';
                        clienteFields.style.display = 'none';
                });
        </script>
</body>
</html>
