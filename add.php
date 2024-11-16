<?php
include('ASSETS/db/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $stmt = $pdo->prepare("INSERT INTO tbl_empleados (nombre, email, telefono) VALUES (?, ?, ?)");
    $stmt->execute([$nombre, $email, $telefono]);

    header("Location: index.php");
}
?>
