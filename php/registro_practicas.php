<?php
    include_once("../conexion.php");
    $uploadDirectory = "../uploads/";

    $nombre = $_POST["nombre"];
    $semestre = $_POST["semestre"];
    $periodo = $_POST["periodo"];
    $tema = $_POST["tema"];
    $sitio = $_POST["sitio"];
    $tutor_sitio = $_POST["tutor_sitio"];
    $valoracion_sitio = $_POST["valoracion_sitio"];
    $tutor_usa = $_POST["tutor_usa"];
    $valoracion_usa = $_POST["valoracion_usa"];

    $fileNameProyecto = $_FILES['proyecto']['name'];
    $fileSizeProyecto = $_FILES['proyecto']['size'];
    $fileTmpNameProyecto  = $_FILES['proyecto']['tmp_name'];
    $fileTypeProyecto = $_FILES['proyecto']['type'];

    $ins_1 = $_POST["ins_1"];
    if($ins_1 == "si"){
        $cual_ins_1 = $_POST["cual_ins_1"];
        $fileName1 = $_FILES['excel_1']['name'];
        $fileSize = $_FILES['excel_1']['size'];
        $fileTmpName  = $_FILES['excel_1']['tmp_name'];
        $fileType = $_FILES['excel_1']['type'];
    }else{
        $cual_ins_1 = "Ninguno";
        $fileName1 = "";
    }

    $ins_2 = $_POST["ins_2"];
    if($ins_2 == "si"){
        $cual_ins_2 = $_POST["cual_ins_2"];
        $fileName2 = $_FILES['excel_2']['name'];
        $fileSize2 = $_FILES['excel_2']['size'];
        $fileTmpName2  = $_FILES['excel_2']['tmp_name'];
        $fileType2 = $_FILES['excel_2']['type'];
    }else{
        $cual_ins_2 = "Ninguno";
        $fileName2 = "";
    }
    
    
    $id_estudiante = $_POST["id_estudiante"];

    $uploadPath = $uploadDirectory.basename($fileName1); 
    $uploadPath2 = $uploadDirectory.basename($fileName2); 
    $uploadPath3 = $uploadDirectory.basename($fileNameProyecto);


    $sql = "INSERT INTO `practica` (`nombre_completo`,  `semestre`, `fecha`, `tema`, `sitio`, `tutor_sp`, `valoracion_tutor_sp`, `tutor_usa`, `valoracion_tutor_usa`, `aplico_instrumento`, `instrumento`, `excel_1`, `aplico_instrumento_2`, `instrumento_2`, `excel_2`, `proyecto`,`id_estudiante`) VALUES ('$nombre','$semestre','$periodo','$tema','$sitio','$tutor_sitio','$valoracion_sitio','$tutor_usa','$valoracion_usa','$ins_1','$cual_ins_1','$fileName1','$ins_2','$cual_ins_2','$fileName2','$fileNameProyecto',$id_estudiante)";
    $resultado = $con->query($sql);
    if($resultado){

        if ($fileName1 =! "" && $ins_1 == "si") {
            move_uploaded_file($fileTmpName, $uploadPath);
        }
    
        if ($fileName2 != "" && $ins_2 == "si") {
            move_uploaded_file($fileTmpName2, $uploadPath2);
        }
        
        move_uploaded_file($fileTmpNameProyecto, $uploadPath3);

        $mensaje = "Practica registrada correctamente.";
        echo json_encode(array('success' => 0, 'mensaje' => $mensaje));
    }else{
        $mensaje = "Ocurrio un error, intente nuevamente.";
        echo json_encode(array('success' => 1, 'mensaje' => $mensaje));
    }

?>