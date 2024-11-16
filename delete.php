<?php
include('ASSETS/db/config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    $stmt = $pdo->prepare("DELETE FROM tbl_empleados WHERE id = ?");
    $stmt->execute([$id]);

    header("Location: index.php");
}
?>
