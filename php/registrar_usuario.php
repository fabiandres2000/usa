<?php 
    include_once("../conexion.php");

    $nombre = $_POST["nombre_u"];
    $correo = $_POST["correo_u"];
    $realizar_obser = $_POST["realizar_obser"];
    $registrar_usu = $_POST["registrar_usu"];
    $opcion = $_POST["opcion"];
    $foto = "pic.png";
    
    if($opcion == "guardar"){
        $sql = "SELECT * FROM `usuario` WHERE `correo`='$correo'";
        $result = $con->query($sql);
        
        $mensaje = "";

        if(mysqli_num_rows($result) != 0){
            $mensaje =  "El correo ingresado ya se encuentra registrado.";
            echo json_encode(array('success' => 0, 'mensaje' => $mensaje));
        }else{
    
            $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
            $pass = array();
            $alphaLength = strlen($alphabet) - 1; 
            for ($i = 0; $i < 12; $i++) {
                $n = rand(0, $alphaLength);
                $pass[] = $alphabet[$n];
            }
            $pass = implode($pass);
    
            $pass_en = md5($pass);
    
            $sql = "INSERT INTO `usuario` (`nombre`, `correo`, `password`, `foto`, `permiso_observaciones_practica`, `permiso_registro_usuario`) VALUES ('$nombre','$correo', '$pass_en', '$foto', '$realizar_obser', '$registrar_usu')";
            $resultado = $con->query($sql);
            if($resultado){
                $mensaje = "Usuario registrado correctamente";
                echo json_encode(array('success' => 1, 'mensaje' => $mensaje, 'pass' => $pass));
            }else{
                $mensaje = "Ocurrio un error, intente nuevamente.";
                echo json_encode(array('success' => 0, 'mensaje' => $mensaje));
            }
            
        }
    }else{
            $sql = "UPDATE `usuario` set `nombre` = '$nombre', `correo` = '$correo', `permiso_observaciones_practica` = '$realizar_obser', `permiso_registro_usuario` = '$registrar_usu' where correo = '$correo'";
            $resultado = $con->query($sql);
            if($resultado){
                $mensaje = "Usuario editado correctamente";
                echo json_encode(array('success' => 1, 'mensaje' => $mensaje));
            }else{
                $mensaje = "Ocurrio un error, intente nuevamente.";
                echo json_encode(array('success' => 0, 'mensaje' => $mensaje));
            }
    }
    
?>