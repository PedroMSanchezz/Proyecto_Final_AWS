<?php
$servername = "proyectoiaw.cgnrb6iw9yzo.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "Root1234$";
$bd="proyecto";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$bd);

// Check connection
if ($conn->connect_error) {
    die("Conexión falla " . $conn->connect_error);

}
?>

