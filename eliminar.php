 <?php 
include_once 'conexion.php';

// Verificamos si se ha enviado el ID del usuario
if(isset($_POST['usuario_id'])) {
    $id = $_POST['usuario_id'];
    
    // Consulta SQL para verificar si el ID del usuario existe
    $sql_verificar = "SELECT * FROM usuarios WHERE id = $id";
    $resultado_verificar = mysqli_query($conexion, $sql_verificar);

    // Verificamos si se encontró algún registro con el ID del usuario
    if(mysqli_num_rows($resultado_verificar) > 0) {
        // Si el ID existe, procedemos a eliminar al usuario
        $sql = "DELETE FROM usuarios WHERE id = $id";

        if(mysqli_query($conexion, $sql)) {
            echo "El usuario se eliminó con éxito";
        } else {
            echo "El usuario no pudo ser eliminado: " . mysqli_error($conexion);
        }
    } else {
        echo "Error: El ID de usuario no existe";
    }
} else {
    echo "Error: No se ha recibido el ID del usuario";
}

mysqli_close($conexion);
?>
