<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias - JnCodes</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #000;
            color: #fff;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        header h1 {
            color: #000;
            margin: 0;
            font-size: 2.5em;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .news-item {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 0;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .news-item img {
            width: 100%;
            height: auto;
            display: block;
        }

        .news-item:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.7);
        }

        .news-item-content {
            padding: 20px;
        }

        .news-item h2 {
            color: #000;
            margin-bottom: 10px;
            font-size: 1.5em;
        }

        .news-item p {
            color: #333;
            line-height: 1.6;
        }

        footer {
            background-color: rgba(255, 255, 255, 0.9);
            text-align: center;
            padding: 15px 0;
            margin-top: 40px;
            box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.5);
        }

        footer p {
            color: #000;
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>Noticias de Microsoft - JnCodes</h1>
    </header>

    <div class="container">
        <div class="news-grid">
            <div class="news-item">
                <img src="https://www.tarlogic.com/wp-content/uploads/2023/09/riesgos-seguridad-IA-3.jpg" alt="Noticia 1">
                <div class="news-item-content">
                    <h2>Microsoft lanza nuevas herramientas de IA en Build 2024</h2>
                    <p>Microsoft anunció nuevas herramientas de inteligencia artificial en su conferencia anual Build 2024, enfocadas en mejorar la productividad y la seguridad para desarrolladores.</p>
                </div>
            </div>
            <div class="news-item">
                <img src="https://images.unsplash.com/photo-1515879218367-8466d910aaa4" alt="Noticia 2">
                <div class="news-item-content">
                    <h2>Windows 11 recibe su mayor actualización</h2>
                    <p>Microsoft lanzó una actualización significativa para Windows 11 que incluye mejoras en la interfaz de usuario y nuevas funciones de seguridad.</p>
                </div>
            </div>
            <div class="news-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS2NOKzeQjn7rE33XDbo7HfM62NHTeMJ8eblQ&s">
                <div class="news-item-content">
                    <h2>Microsoft adquiere nueva startup de ciberseguridad</h2>
                    <p>En su última movida estratégica, Microsoft ha adquirido una startup enfocada en ciberseguridad, fortaleciendo su portafolio de soluciones de seguridad empresarial.</p>
                </div>
            </div>
            <div class="news-item">
                <img src="https://images.unsplash.com/photo-1603791440384-56cd371ee9a7" alt="Noticia 4">
                <div class="news-item-content">
                    <h2>Xbox Series X lidera ventas globales</h2>
                    <p>La consola Xbox Series X de Microsoft ha superado las expectativas de ventas globales, destacándose en el competitivo mercado de consolas de videojuegos.</p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 JnCodes. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
