<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuda - JnCodes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4; /* Fondo blanco claro */
        }

        .header {
            background-color: rgba(0, 0, 0, 0.7); /* Fondo negro con transparencia */
            padding: 20px 0;
            text-align: center;
            color: #fff;
            border-bottom: 2px solid #fff; /* Línea blanca debajo del título */
        }

        .header h1 {
            margin: 0;
            font-size: 3em;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .faq-container {
            margin: 20px auto;
            max-width: 800px;
            padding: 20px;
            background-color: rgba(0, 0, 0, 0.5); /* Fondo negro con transparencia */
            color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.4); /* Sombra sutil */
        }

        .faq-container h2 {
            margin-bottom: 20px;
            font-size: 2.5em;
            font-weight: bold;
        }

        .faq-item {
            margin-bottom: 20px;
        }

        .faq-item h3 {
            font-size: 1.8em;
            margin-bottom: 10px;
        }

        .faq-item p {
            font-size: 16px;
            line-height: 1.6;
        }

        .btn-back {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 18px;
            background-color: #000; /* Fondo negro */
            color: #fff;
            border: none;
            border-radius: 5px;
            text-transform: uppercase;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-back:hover {
            background-color: #444; /* Fondo gris oscuro */
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 2.5em;
            }

            .faq-container h2 {
                font-size: 2em;
            }

            .faq-item h3 {
                font-size: 1.5em;
            }

            .faq-item p {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <div class="header">
        <h1>Ayuda - JnCodes</h1>
    </div>

    <div class="faq-container">
        <h2>Preguntas Frecuentes</h2>

        <div class="faq-item">
            <h3>¿Cómo puedo comprar una clave de Windows?</h3>
            <p>Para comprar una clave de Windows, visita nuestra página aqui <a href="shop.php" style="color: #ffd700;">compras de claves</a>. Selecciona el producto que deseas y sigue las instrucciones para completar tu compra. Si necesitas ayuda, no dudes en <a href="contacto.php" style="color: #ffd700;">contactarnos</a>.</p>
        </div>

        <div class="faq-item">
            <h3>¿Qué hago si tengo problemas con la clave?</h3>
            <p>Si tienes problemas con una clave que has adquirido, por favor, dirígete a nuestra sección de <a href="contacto.php" style="color: #ffd700;">contacto</a> para obtener asistencia. Asegúrate de proporcionar todos los detalles de tu compra para que podamos ayudarte de manera más eficiente.</p>
        </div>

        <div class="faq-item">
            <h3>¿Puedo obtener un reembolso?</h3>
            <p>Ofrecemos reembolsos en caso de problemas con las claves siempre que se soliciten dentro de los 14 días posteriores a la compra. Para más detalles, consulta nuestra política de <a href="terminos.php" style="color: #ffd700;">términos y condiciones</a> o <a href="contacto.php" style="color: #ffd700;">contáctanos</a>.</p>
        </div>

        <div class="faq-item">
            <h3>¿Cómo me registro en el sitio?</h3>
            <p>Puedes registrarte en nuestro sitio web visitando la página de <a href="Registro.php" style="color: #ffd700;">registro</a>. Completa el formulario con tus datos y sigue las instrucciones para crear tu cuenta. ya que es fundamental comprar con cuenta mas seguro</p>
        </div>

        <div class="faq-item">
            <h3>¿Cómo Modifico mi Cuenta?</h3>
            <p>Puedes ir directamente ala parte de Modificar Cuenta<a href="actualih.php" style="color: #ffd700;">Modificar</a>. Completa el formulario con tus datos y sigue las instrucciones para Modificar tu cuenta.</p>
        </div>

        <button class="btn-back" onclick="window.location.href='Inicio.php'">Volver a Inicio</button>
    </div>

</body>

</html>
