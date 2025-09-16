<?php
// Conexión a la base de datos
$host = 'localhost';
$db = 'siscafeteria';
$user = 'root';
$password = '';
$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>