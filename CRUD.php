<?php
require_once 'conexion.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = htmlspecialchars($_POST['usuario']); 
    $contrasena = $_POST['contrasena'];

    $conn = connectToDatabase();

    try {
        insertUser($conn, $usuario, $contrasena);
        echo "Usuario insertado con éxito!";
    } catch(PDOException $e) {
        echo "Error al insertar usuario: " . $e->getMessage();
    } finally {
        $conn = null; 
    }
}
?>
