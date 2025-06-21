<?php
// guardar_contacto.php

// Configuración de conexión a la base de datos
$host = "localhost";
$usuario = "root";
$password = "";  // Cambia si tienes contraseña en tu XAMPP o servidor
$basededatos = "loros_db";

// Crear conexión
$conn = new mysqli($host, $usuario, $password, $basededatos);

// Verificar conexión
if ($conn->connect_error) {
    header("Location: ../index.html?msg=error_conexion");
    exit();
}

// Obtener datos del formulario y sanitizarlos
$nombre = isset($_POST['nombre']) ? trim($_POST['nombre']) : '';
$comentario = isset($_POST['comentario']) ? trim($_POST['comentario']) : '';

// Validar que no estén vacíos
if (empty($nombre) || empty($comentario)) {
    header("Location: ../index.html?msg=campos_vacios");
    exit();
}

// Preparar la consulta para evitar inyección SQL
$stmt = $conn->prepare("INSERT INTO contactos (nombre, comentario) VALUES (?, ?)");

if (!$stmt) {
    // Error preparando la consulta
    header("Location: ../index.html?msg=error_sql");
    exit();
}

// Vincular parámetros y ejecutar
$stmt->bind_param("ss", $nombre, $comentario);
$ejecucion = $stmt->execute();

if ($ejecucion) {
    // Éxito
    $stmt->close();
    $conn->close();
    header("Location: ../index.html?msg=exito");
    exit();
} else {
    // Error en ejecución
    $stmt->close();
    $conn->close();
    header("Location: ../index.html?msg=error_sql");
    exit();
}
?>
