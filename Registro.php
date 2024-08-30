<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Usuario</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            width: 350px;
            background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco con mayor transparencia */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); /* Sombra más sutil */
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }
        .form-container h2 {
            color: #333; /* Color oscuro para el título */
            margin-bottom: 20px;
            font-size: 2em;
            font-weight: bold;
        }
        .form-control {
            margin-bottom: 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            transition: border-color 0.3s;
        }
        .form-control:focus {
            border-color: #333; /* Color del borde al enfocar */
        }
        .btn-primary {
            background-color: #333; /* Color de fondo del botón */
            border: none;
            border-radius: 8px;
            transition: background-color 0.3s;
            width: 100%;
            padding: 10px;
            font-size: 1.1em;
        }
        .btn-primary:hover {
            background-color: #555; /* Color de fondo del botón al pasar el ratón */
        }
        a {
            color: #007bff; /* Color azul para el enlace */
            text-decoration: none;
            font-size: 1em;
            transition: color 0.3s;
        }
        a:hover {
            color: #0056b3; /* Color azul más oscuro al pasar el ratón */
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Registrarse</h2>
        <form action="agregar_usuario.php" method="post">
            <input type="text" class="form-control" name="nombre" placeholder="Juan Pérez" required>
            <input type="text" class="form-control" name="email" placeholder="ejemplo@gmail.com" required>
            <input type="password" class="form-control" name="contrasena" placeholder="más de 8 caracteres" required>
            <input type="submit" class="btn btn-primary" value="Agregar Usuario">
        </form>
        <br>
        <a href="login.php">Iniciar Sesión</a>
    </div>
    <!-- Bootstrap JS (Opcional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
