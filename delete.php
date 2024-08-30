<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Eliminar Usuario</title>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #000;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .container {
        width: 300px;
        background-color: rgba(255, 0, 0, 0.9); /* Rojo con transparencia */
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0px 0px 20px rgba(255, 0, 0, 0.5); /* Sombra roja */
        animation: pulse 1s infinite alternate;
    }
    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #ff4d00; /* Naranja rojizo */
    }
    .form-group {
        margin-bottom: 20px;
    }
    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
        color: #fff; /* Blanco */
    }
    input[type="text"] {
        width: 100%;
        padding: 10px;
        border: 2px solid #ff4d00; /* Borde rojo */
        border-radius: 5px;
        transition: border-color 0.3s ease;
        font-size: 16px;
        box-sizing: border-box;
        color: #fff; /* Blanco */
        background-color: rgba(0, 0, 0, 0.5); /* Negro con transparencia */
    }
    input[type="text"]:focus {
        border-color: #ff6600; /* Naranja rojizo */
    }
    input[type="submit"] {
        background-color: #ff4d00;
        color: white;
        padding: 10px 0;
        border: none;
        border-radius: 5px;
        width: 100%;
        cursor: pointer;
        transition: background-color 0.3s ease;
        font-size: 16px;
        font-weight: bold;
    }
    input[type="submit"]:hover {
        background-color: #ff6600;
    }
    @keyframes pulse {
        0% {
            transform: scale(1);
        }
        100% {
            transform: scale(1.05);
        }
    }
</style>
</head>
<body>

<div class="container">
    <h2>Eliminar Usuario</h2>
    <form action="eliminar.php" method="post">
        <div class="form-group">
            <label for="usuario_id">ID de Usuario:</label>
            <input type="text" id="usuario_id" name="usuario_id" placeholder="Ingrese el ID del usuario" required>
        </div>
        <input type="submit" value="Eliminar Usuario">
    </form>
</div>

</body>
</html>
