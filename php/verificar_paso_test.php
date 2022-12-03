<?php 
    include_once("../conexion.php");
    $correo = $_POST["correo"];
    $nombre = $_POST["nombre"];
    $sede = $_POST["sede"];
    $programa = $_POST["programa"];
    $semestre = $_POST["semestre"];
    $sexo = $_POST["sexo"];
    $f_nacimiento = $_POST["f_nacimiento"];
    $id_estudiante = $_POST["id_estudiante"];

    //ver por cual paso va
    $sql = "SELECT * FROM `test_respuestas` WHERE `correo`='$correo'";
    $result = $con->query($sql);
    $mensaje = "";
    if(mysqli_num_rows($result) != 0){
       
        $fila = mysqli_fetch_array($result);
        if($fila[41] == 1 && $fila[82] == 1 && $fila[123] == 1 && $fila[164] == 1 && $fila[205] == 1 && $fila[246] == 1  && $fila[247] == 1){ 
            $mensaje =  "Usted ya ha comenzado este test, actualmente se encuentra en estado: TERMINADO";
        }else{
            $mensaje =  "Usted ya ha comenzado este test, actualmente se encuentra en estado: SIN CULMINAR";
        }
        echo json_encode(array('success' => 1, 'mensaje' => $mensaje, 'correo' => $fila[0], 'nombre' => $fila[248]));
    }else{
        $sql = "INSERT INTO `test_respuestas` (`correo`, `nombre_completo`, `sede`, `programa`, `semestre`, `sexo`, `fecha_nacimiento`, `id_estudiante`) VALUES ('$correo', '$nombre','$sede','$programa','$semestre','$sexo','$f_nacimiento', $id_estudiante)";
		mysqli_query($con, $sql);
        echo json_encode(array('success' => 0));
    }
?>