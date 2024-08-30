<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            perspective: 1000px;
        }

        .container {
            width: 320px;
            background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco con transparencia */
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            text-align: center;
            animation: fadeIn 1s ease-in-out;
            transform-style: preserve-3d;
            animation: float 3s infinite alternate;
        }

        h2 {
            color: #000;
            margin-bottom: 20px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
            font-size: 1.8em;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #000;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #000;
            border-radius: 8px;
            background-color: rgba(0, 0, 0, 0.1); /* Fondo negro con transparencia */
            color: #000;
            box-sizing: border-box;
            transition: border-color 0.3s, background-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #000; /* Borde negro al enfocar */
            background-color: rgba(0, 0, 0, 0.2); /* Fondo más claro al enfocar */
        }

        input[type="submit"] {
            width: calc(100% - 20px);
            padding: 12px;
            background-color: #000; /* Fondo negro */
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
            animation: pulse 1s infinite alternate;
            box-sizing: border-box;
        }

        input[type="submit"]:hover {
            background-color: #333; /* Negro más claro al pasar el ratón */
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
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Actualizar Usuario</h2>
        <form action="actualizar.php" method="post">
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" placeholder="Ingrese el ID" required>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Ingrese el email" required>
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" placeholder="Ingrese la contraseña" required>
            <input type="submit" value="Actualizar">
        </form>
    </div>
</body>
</html>
