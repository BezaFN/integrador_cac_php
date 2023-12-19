<?php ob_start(); 
    set_error_handler("var_dump");
    session_start();
    include 'conexion.php';
?>
<?php
    if ($_POST) {
        $errores = [];
        if (empty($_POST['nombre'])) {
            $errores['nombre'] = 'El campo nombre es obligatorio.';
        }
        if (empty($_POST['apellido'])) {
            $errores['apellido'] = 'El campo apellido es obligatorio.';
        }
        if (empty($_POST['email'])) {
            $errores['email'] = 'El campo email es obligatorio.';
        }
        if (empty($_POST['tema'])) {
            $errores['tema'] = 'El campo tema es obligatorio.';
        }
        if (empty($_FILES['archivo']['name'])) {
            $errores['archivo'] = 'Debe subir una imagen.';
        }
        if (count($errores) == 0) {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $email = $_POST['email'];
            $tema = $_POST['tema'];
            $imagen = $_FILES['archivo']['name'];
            $imagen_temporal = $_FILES['archivo']['tmp_name'];
            $fecha = new DateTime();
            $imagen = $fecha->getTimestamp() . "_" . $imagen;
            move_uploaded_file($imagen_temporal, "../assets/upload/" . $imagen);
            $conexion = new conexion();
            $sql="INSERT INTO `oradores` (`id_orador`, `nombre`, `apellido`, `mail`, `tema`,`imagen`) VALUES (NULL, '$nombre' , '$apellido','$email','$tema','$imagen')";
            $id_orador = $conexion->ejecutar($sql);
            if (isset( $_SESSION['usuario'])=='Admin') {
                header("Location: ../pages/listado_admin.php");
            }else{
                header("Location: ../index.php");
            }
            exit;
        } else {
            foreach ($errores as $campo => $mensaje) {
                echo "Error en $campo: $mensaje<br>";
            }
        }
    }
?>

