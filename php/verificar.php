<?php 
    include_once("../conexion.php");

    $cedula = $_POST["cedula"];
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $celular = $_POST["celular"];
    $semestre = $_POST["semestre"];
    $periodo = $_POST["periodo"];

    //ver por cual paso va
    $sql = "SELECT * FROM `estudiante` WHERE `correo`='$correo'";
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

        $sql = "INSERT INTO `estudiante` (`cedula`, `nombre`, `correo`, `celular`, `semestre`, `periodo`, `password`) VALUES ($cedula, '$nombre','$correo',$celular,'$semestre','$periodo', '$pass_en')";
		$resultado = $con->query($sql);
        if($resultado){
            $mensaje = "Usuario registrado correctamente";
            echo json_encode(array('success' => 1, 'mensaje' => $mensaje, 'pass' => $pass));
        }else{
            $mensaje = "Ocurrio un error, intente nuevamente.";
            echo json_encode(array('success' => 0, 'mensaje' => $mensaje));
        }
        
    }
?>