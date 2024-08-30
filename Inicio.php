<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pantalla de Inicio - JnCodes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            overflow-x: hidden;
            background-color: #f4f4f4; /* Fondo blanco claro */
        }

        .sliderbar {
            position: fixed;
            top: 0;
            left: -250px;
            width: 250px;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9); /* Fondo negro con transparencia */
            transition: left 0.3s ease;
            z-index: 1000;
            padding-top: 60px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Sombra sutil */
        }

        .sliderbar a {
            padding: 15px 25px;
            text-decoration: none;
            font-size: 18px;
            color: #fff;
            display: block;
            transition: 0.3s;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .sliderbar a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        .sliderbar .closebtn {
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 36px;
            color: #fff;
            cursor: pointer;
        }

        #main {
            transition: margin-left 0.3s ease;
            padding: 16px;
            text-align: center;
        }

        .openbtn {
            font-size: 20px;
            cursor: pointer;
            background-color: rgba(0, 0, 0, 0.8); /* Fondo negro */
            color: white;
            padding: 10px 15px;
            border: none;
            position: fixed;
            top: 15px;
            left: 15px;
            border-radius: 5px;
            z-index: 1001;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        .header {
            background-color: rgba(0, 0, 0, 0.7); /* Fondo negro con transparencia */
            padding: 20px 0;
            text-align: center;
            color: #fff;
            border-bottom: 2px solid #fff; /* Línea blanca debajo del título */
            margin-top: 60px;
        }

        .header h1 {
            margin: 0;
            font-size: 3em;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .content {
            margin-top: 20px;
        }

        .content img {
            border-radius: 10px;
            width: 80%;
            max-width: 600px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* Sombra sutil */
            margin-bottom: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .content img:hover {
            transform: scale(1.05);
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.7); /* Sombra más pronunciada */
        }

        .info-section {
            background-color: rgba(0, 0, 0, 0.5); /* Fondo negro con mayor transparencia */
            padding: 40px;
            border-radius: 15px;
            margin-bottom: 30px;
            color: #fff;
            text-align: center;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.4); /* Sombra sutil */
        }

        .info-section h2 {
            margin-bottom: 20px;
            font-size: 2.5em;
            font-weight: bold;
        }

        .info-section p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .btn-buy {
            background-color: #fff; /* Fondo blanco */
            color: #000;
            padding: 12px 24px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
            text-transform: uppercase;
        }

        .btn-buy:hover {
            background-color: #000; /* Fondo negro */
            color: #fff; /* Texto blanco */
        }

        @media (max-width: 768px) {
            .sliderbar {
                width: 200px;
            }

            .openbtn {
                font-size: 18px;
            }

            .header h1 {
                font-size: 2.5em;
            }

            .info-section h2 {
                font-size: 2em;
            }

            .info-section p {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>

    <div id="mySliderbar" class="sliderbar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeSliderbar()">&times;</a>
        <a href="#">Inicio</a>
        <a href="Sobremi.php">Sobre Nosotros</a>
        <a href="shop.php">Compras de Claves</a>
        <a href="Contacto.php">Contacto</a>
        <a href="ayuda.php">Ayuda</a>
        <a href="cerrar.php">Cerrar Sección</a>
    </div>

    <div id="main">
        <button class="openbtn" onclick="openSliderbar()">&#9776; Menú</button>

        <div class="header">
            <h1>JnCodes</h1>
        </div>

        <div class="content">
            <p>Especialistas en la venta de claves de Windows</p>
            <img src="https://cdn.computerhoy.com/sites/navi.axelspringer.es/public/media/image/2022/10/casi-mitad-pcs-mercado-no-pueden-actualizar-windows-11-eso-gran-problema-2838905.jpg" alt="Claves de Windows">
            <img src="https://www.cesian.edu.mx/wp-content/uploads/2016/05/windows-10-logo.jpg" alt="Claves Originales">
        </div>

        <!-- Sección de Información -->
        <div class="info-section">
            <h2>Nuestras Claves</h2>
            <p>Ofrecemos claves originales y garantizadas para las versiones más recientes de Windows. ¡Aprovecha nuestras ofertas exclusivas!</p>
            <img src="https://imagenes.elpais.com/resizer/v2/3WXXPSAHLFNCFOZ7ZO5JR3ZD6E.jpg?auth=0a2b4f21d2a9bfbcc2bcf13b15abe13c5eee5b1d822571d19c73fada496c2a97&width=414" alt="Clave Windows Pro">
            <button class="btn-buy" onclick="location.href='shop.php'">Ir a Comprar</button>
        </div>

        <div class="info-section">
            <h2>Atención Personalizada</h2>
            <p>En JnCodes, contamos con un equipo dedicado a brindarte el mejor soporte y asesoría para tus compras.</p>
            <img src="https://cdn.iconscout.com/icon/free/png-256/windows-10-225995.png" alt="Asesoría">
        </div>

        <div class="info-section">
            <h2>Compra Fácil y Segura</h2>
            <p>Realiza tus compras de manera segura con nosotros. ¡Haz clic en el botón para empezar!</p>
            <button class="btn-buy" onclick="location.href='shop.php'">Ir a Comprar</button>
        </div>
    </div>

    <script>
        function openSliderbar() {
            document.getElementById("mySliderbar").style.left = "0";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeSliderbar() {
            document.getElementById("mySliderbar").style.left = "-250px";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>

</body>

</html>
