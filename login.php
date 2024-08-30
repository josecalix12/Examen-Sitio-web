<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .login-container {
            background-color: rgba(255, 255, 255, 0.8); /* Transparencia */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Sombra suave */
            max-width: 400px;
            width: 100%;
            animation: fadeIn 1s ease-in-out;
        }
        .login-container h2 {
            color: #333;
            margin-bottom: 20px;
        }
        .form-control {
            background-color: rgba(255, 255, 255, 0.6); /* Transparencia en inputs */
            color: #333;
            border: 1px solid #ccc;
        }
        .form-control::placeholder {
            color: #666;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s;
            animation: pulse 1s infinite alternate;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-secondary {
            background-color: #6c757d;
            border: none;
            margin-top: 20px;
            animation: pulse 1s infinite alternate;
        }
        .btn-secondary:hover {
            background-color: #5a6268;
        }
        @keyframes pulse {
            from {
                transform: scale(1);
            }
            to {
                transform: scale(1.05);
            }
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
    <div class="login-container text-center">
        <h2>Iniciar Sesión</h2>
        <!-- Formulario de inicio de sesión -->
        <form action="procesar_login.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="correo" name="correo" placeholder="ejemplo@gmail.com" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="más de 8 dígitos" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
        </form>
        <!-- Mostrar el mensaje de error si existe -->
        <?php
        if(!empty($error_message)) {
            echo "<p style='color: red;'>$error_message</p>";
        }
        ?>
        <button class="btn btn-secondary btn-block" onclick="window.location.href='actualih.php'">Actualizar Cuenta</button>
    </div>
    
    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
