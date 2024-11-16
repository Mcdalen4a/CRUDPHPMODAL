<?php
include('ASSETS/db/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $stmt = $pdo->prepare("UPDATE tbl_empleados SET nombre = ?, email = ?, telefono = ? WHERE id = ?");
    $stmt->execute([$nombre, $email, $telefono, $id]);

    header("Location: index.php");
}
?>
