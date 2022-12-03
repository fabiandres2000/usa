<?php 
    include_once("../conexion.php");
    $uploadDirectory = "../correcciones/";

    $id_practica = $_POST["id_practica"];
    $observacion_practica = $_POST["observacion_practica"];
    $id_usuario = $_POST["id_usuario"];
  
    $fileName = $_FILES['archivo_coregido']['name'];
    $fileSize = $_FILES['archivo_coregido']['size'];
    $fileTmpName  = $_FILES['archivo_coregido']['tmp_name'];
    $fileType = $_FILES['archivo_coregido']['type'];
    $uploadPath = $uploadDirectory.basename($fileName); 

    $fecha = date("d-m-Y ");
    $hora = date('H:i:s');

    $sql = "INSERT INTO `observacion` (`id_practica`, `observaciones`, `archivo`, `fecha_observacion`, `hora_observacion`, `usuario_realiza`) VALUES ($id_practica, '$observacion_practica','$fileName','$fecha','$hora', '$id_usuario')";
   
    $resultado = $con->query($sql);
    if($resultado){
        $mensaje = "Observación registrada correctamente.";
        move_uploaded_file($fileTmpName, $uploadPath);
        echo json_encode(array('success' => 0, 'mensaje' => $mensaje));
    }else{
        $mensaje = "Ocurrio un error, intente nuevamente.";
        echo json_encode(array('success' => 1, 'mensaje' => $mensaje));
    }
    
?>