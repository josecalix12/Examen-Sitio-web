<?php
// Incluir el archivo de conexión
include('db_connect.php');

// Obtener datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];

    // Preparar y ejecutar la consulta
    $stmt = $conexion->prepare("SELECT * FROM Usuarios WHERE nombre = ? AND contrasena = ?");
    $stmt->bind_param("ss", $nombre, $contrasena);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Usuario autenticado, generar código de activación
        $codigoActivacion = generateRandomKey();
        echo "¡Compra exitosa! Aquí está tu código de activación: <strong>$codigoActivacion</strong>";
    } else {
        // Usuario no válido
        echo "Usuario o contraseña no válidos. La compra no se puede realizar.";
    }

    $stmt->close();
    $conexion->close();
}

// Función para generar un código de activación aleatorio
function generateRandomKey($length = 25) {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
?>
