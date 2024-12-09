<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit();
}

echo "Bienvenido a la zona restringida.";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Zona Restringida</title>
</head>
<body>
    <h1>Zona Restringida</h1>
    <p>Solo los usuarios registrados pueden ver esta página.</p>
    <a href="logout.php">Cerrar Sesión</a>
</body>
</html>
