 <?php
include_once 'conexion.php';
if($_SERVER['REQUEST_METHOD']=="POST"){
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $email=$_POST['email'];
    $contrasena=$_POST['contrasena'];
    $sql="UPDATE usuarios SET nombre='$nombre',contrasena='$contrasena',email='$email'
      WHERE id=$id";

    if(mysqli_query($conexion,$sql)){
        echo 'Usuario modificado';
    }else{
        echo 'No se modificó el usuario: '.mysqli_error($conexion);
    }
    mysqli_close($conexion);
    header('Location: login.php');
    exit(); // Asegura que el script se detenga después de redireccionar
}
?>
