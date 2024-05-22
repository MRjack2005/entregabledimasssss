<?php

$user = "root";
$pass = "#JaCk/rG/195";
$server = "localhost";
$bd = "empresajack";

try {
  
  $con = new PDO("mysql:host=$server;dbname=$bd", $user, $pass);
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $usuario = $_POST['usuario'];
  $contrasena = $_POST['contrasena'];

  
  $stmt = $con->prepare("INSERT INTO users (usuario, contrasena, contrasena_plana) VALUES (:usuario, :contrasena, :contrasena_plana)");

  
  $stmt->bindParam(":usuario", $usuario);
  $stmt->bindParam(":contrasena", $contrasena);
  $stmt->bindParam(":contrasena_plana", $contrasena);

  if ($stmt->execute()) {
    header("Location: tienda/tienda.html");
  } else {
    echo "Error: " . $stmt->errorInfo()[0];
  }

  
  $con = null;

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>
