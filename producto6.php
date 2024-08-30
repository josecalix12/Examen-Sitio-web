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
            box-sizing: border-box;
        }
        .product-container img {
            max-width: 100%;
            height: auto;
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
        /* Media Queries para pantallas más pequeñas */
        @media (max-width: 600px) {
            .product-container {
                padding: 15px;
                width: 90%;
            }
            .product-container h1 {
                font-size: 1.5em;
            }
            .product-container button {
                font-size: 14px;
                padding: 8px 16px;
            }
        }
        @media (max-width: 400px) {
            .product-container h1 {
                font-size: 1.2em;
            }
            .product-container button {
                font-size: 12px;
                padding: 6px 12px;
            }
        }
    </style>
</head>
<body>
    <div class="product-container">
        <h1>Compra de Clave de Activación</h1>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZrWMhvAylD1AxLpTYqAfuYP0qvOaFy_TnmA&s" alt="Imagen del Producto">
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
