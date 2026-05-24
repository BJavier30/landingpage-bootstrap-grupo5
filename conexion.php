<?php
$conn = new mysqli("localhost", "root", "", "mashkabox");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre   = $_POST['nombre']   ?? '';
    $correo   = $_POST['correo']   ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $mensaje  = $_POST['mensaje']  ?? '';

    $sql = "INSERT INTO clientes (cli_name, cli_email, cli_phone, cli_message)
            VALUES ('$nombre', '$correo', '$telefono', '$mensaje')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.html?enviado=1#contacto");
    } else {
        header("Location: index.html?error=1#contacto");
    }
    $conn->close();
    exit;
}

header("Location: index.html");
exit;
?>
