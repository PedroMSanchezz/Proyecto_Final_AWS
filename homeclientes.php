<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>





  </head>
  <body>
<header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">Date de alta </h4>
              <ul class="list-unstyled">
                <li><a href="formulariocliente.php" class="text-white">Registrarse</a></li>
                <li><a href="login.html" class="text-white">Iniciar sesión</a></li>
                <li><a href="home.php" class="text-white">Home</a></li>
	    </ul>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="https://twitter.com/VelocirraptorF" class="text-white">Follow on Twitter @VelocirraptorF</a></li>
             </ul>
                  <?php
                if (!isset($_SESSION)) {
                session_start();
                echo "Has iniciado sesión con el usuario ".$_SESSION['NombredeUsuario'].".";
                echo "<a href='logout.php'>Cerrar Sesión</a>";
                }
                else
                {
                        echo "<a href='login.html'>Iniciar Sesión</a>";
                }
                //include ('conexion.php');
                //sesion_start();
                //echo "$_SESSION['email']";
                //echo "Iniciado sesión con $email";
        ?>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            <strong>AnyCompany Crafting</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>
<?php

include ('conexion.php');
$result = mysqli_query($conn, "SELECT DNI_vendedor,Imagen FROM Productos");
if ($result->num_rows > 0) {
  // output data of each row
   while($row = mysqli_fetch_assoc($result)) {
    ?>
  <div class="gallery">
  <a target="_blank" href="<?php echo $row["DNI_vendedor"];?> ">
    <img src="./imagenes/<?php echo $row["Imagen"];?>" alt="" width="600" height="400">
  </a>
  <div class="desc">Proveedor:<?php echo $row["DNI_vendedor"];?> </div>
</div>
<?php
};
};

?>




    <!-- Si utilizamos componentes de Bootstrap que requieran Javascript agregar estos tres archivos -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
 <footer>
  <div class="container">
  </div>
</footer>
</html>

