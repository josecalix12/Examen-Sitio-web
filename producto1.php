<?php
// Incluir el archivo de conexión
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$database = "sistemacalix";
$conexion = mysqli_connect($servidor, $usuario, $contrasena, $database);

// Verificar la conexión
if (!$conexion) {
    die("Error al conectarse: " . mysqli_connect_error());
}

// Inicializar variables
$mensaje = '';
$codigoActivacion = '';

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $contrasena = $_POST['contrasena'];

    // Consultar si el usuario existe
    $sql = "SELECT * FROM Usuarios WHERE nombre = ? AND contrasena = ?";
    $stmt = mysqli_prepare($conexion, $sql);
    mysqli_stmt_bind_param($stmt, 'ss', $nombre, $contrasena);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($resultado) > 0) {
        // Generar una clave de activación aleatoria
        $codigoActivacion = generateRandomKey();
        $mensaje = "¡Compra exitosa! Aquí está tu código de activación: <strong>-$codigoActivacion-</strong>";
    } else {
        $mensaje = "Usuario no válido. La compra no se puede realizar.";
    }
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

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto - JnCodes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7fa; /* Azul claro */
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .product-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 100%;
            width: 400px;
            text-align: center;
            border: 1px solid #b2ebf2; /* Azul más claro para el borde */
        }

        .product-container img {
            max-width: 100%;
            border-radius: 8px;
        }

        .product-container h1 {
            margin: 20px 0;
            color: #00796b; /* Azul más oscuro para el título */
            text-align: center; /* Centrar el título */
        }

        .product-container h2 {
            margin: 10px 0;
            color: #00796b; /* Azul más oscuro para el subtítulo */
        }

        .product-container p {
            color: #00796b; /* Azul más oscuro para el texto */
        }

        .product-container button {
            padding: 10px 20px;
            background-color: #0097a7; /* Azul más oscuro para el botón */
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .product-container button:hover {
            background-color: #00796b; /* Azul más oscuro al pasar el ratón */
        }

        .message {
            margin-top: 20px;
            font-size: 16px;
        }

        .message.success {
            color: #00796b; /* Azul más oscuro para el mensaje de éxito */
        }

        .message.error {
            color: #d9534f; /* Rojo para el mensaje de error */
        }

        .form-container {
            margin-top: 20px;
        }

        .form-container input {
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: calc(100% - 22px);
            box-sizing: border-box;
        }

        @media (max-width: 600px) {
            .product-container {
                padding: 15px;
            }

            .product-container button {
                font-size: 14px;
                padding: 8px 16px;
            }

            .form-container input {
                padding: 8px;
            }
        }
    </style>
</head>

<body>
    <div class="product-container">
        <h1>Compra de Clave de Activación</h1>
        <img src="https://n1g.cl/Home/4726-home_default/windows-10-home.jpg" alt="Imagen del Producto">
        <h2>Producto de Windows</h2>
        <p>Descripción detallada del producto. Este es un producto increíble que ofrece una excelente funcionalidad y valor para su compra.</p>

        <!-- Formulario de compra -->
        <form method="post" class="form-container">
            <input type="text" name="nombre" placeholder="Nombre de Usuario" required>
            <input type="password" name="contrasena" placeholder="Contraseña" required>
            <button type="submit">Comprar</button>
        </form>

        <!-- Mostrar mensaje -->
        <div class="message">
            <?php
            if (isset($mensaje)) {
                echo $mensaje;
            }
            ?>
        </div>
    </div>
</body>

</html>
