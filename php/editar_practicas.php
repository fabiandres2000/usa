<?php
    include_once("../conexion.php");
    session_start();
    $uploadDirectory = "../uploads/";
    $fileName1 = null;
    $fileName2 = null;
    $fileNameProyecto = null;

    $nombre = $_POST["nombre"];
    $semestre = $_POST["semestre"];
    $periodo = $_POST["periodo"];
    $tema = $_POST["tema"];
    $sitio = $_POST["sitio"];
    $tutor_sitio = $_POST["tutor_sitio"];
    $valoracion_sitio = $_POST["valoracion_sitio"];
    $tutor_usa = $_POST["tutor_usa"];
    $valoracion_usa = $_POST["valoracion_usa"];

    if(isset($_FILES['proyecto'])){
        $fileNameProyecto = $_FILES['proyecto']['name'];
        $fileSizeProyecto = $_FILES['proyecto']['size'];
        $fileTmpNameProyecto  = $_FILES['proyecto']['tmp_name'];
        $fileTypeProyecto = $_FILES['proyecto']['type'];
    }else{
        $fileNameProyecto = null;
    }
   

    $ins_1 = $_POST["ins_1"];
    if($ins_1 == "si"){
        $cual_ins_1 = $_POST["cual_ins_1"];

        if(isset($_FILES['excel_1'])){
            $fileName1 = $_FILES['excel_1']['name'];
            $fileSize = $_FILES['excel_1']['size'];
            $fileTmpName  = $_FILES['excel_1']['tmp_name'];
            $fileType = $_FILES['excel_1']['type'];
        }else{
            $fileName1 = null;
        }

    }else{
        $cual_ins_1 = "Ninguno";
        $fileName1 = "";
    }

    $ins_2 = $_POST["ins_2"];
    if($ins_2 == "si"){
        $cual_ins_2 = $_POST["cual_ins_2"];

        if(isset($_FILES['excel_2'])){
            $fileName2 = $_FILES['excel_2']['name'];
            $fileSize2 = $_FILES['excel_2']['size'];
            $fileTmpName2  = $_FILES['excel_2']['tmp_name'];
            $fileType2 = $_FILES['excel_2']['type'];
        }else{
            $fileName2 = null;
        }

    }else{
        $cual_ins_2 = "Ninguno";
        $fileName2 = "";
    }
    
    
    $id_estudiante = $_POST["id_estudiante"];
    $id_practica = $_POST["id_practica"];

    $uploadPath = $uploadDirectory.basename($fileName1); 
    $uploadPath2 = $uploadDirectory.basename($fileName2); 
    $uploadPath3 = $uploadDirectory.basename($fileNameProyecto);


    $sql = "UPDATE `practica` SET `nombre_completo` = '$nombre',  `semestre` = '$semestre', `fecha` = '$periodo', `tema` = '$tema', `sitio` = '$sitio', `tutor_sp` = '$tutor_sitio', `valoracion_tutor_sp` = '$valoracion_sitio', `tutor_usa` = '$tutor_usa', `valoracion_tutor_usa` = '$valoracion_usa', `aplico_instrumento` = '$ins_1', `instrumento` = '$cual_ins_1', `aplico_instrumento_2` = '$ins_2', `instrumento_2` = '$cual_ins_2'";
    
    if(isset($fileName1)){
        $sql = $sql.", `excel_1` = '$fileName1'";
    }

    if(isset($fileName2)){
        $sql = $sql.", `excel_2` = '$fileName2'";
    }

    if(isset($fileNameProyecto)){
        $sql = $sql.", `proyecto` = '$fileNameProyecto'";
    }

    $sql = $sql." where id = $id_practica";
    
    $resultado = $con->query($sql);

    if($resultado){

        if ($ins_1 == "si") {
            if(isset($fileName1)){
                move_uploaded_file($fileTmpName, $uploadPath);
            }
        }
    
        if ($ins_2 == "si") {
            if(isset($fileName2)){
                move_uploaded_file($fileTmpName2, $uploadPath2);
            }
        }
        
        if ($ins_2 == "si") {
            if(isset($fileNameProyecto)){
                move_uploaded_file($fileTmpNameProyecto, $uploadPath3);
            }
        }
        

        $mensaje = "Practica actualizada correctamente.";
        echo json_encode(array('success' => 0, 'mensaje' => $mensaje));
    }else{
        $mensaje = "Ocurrio un error, intente nuevamente: ".$con->error;
        echo json_encode(array('success' => 1, 'mensaje' => $mensaje));
    }

?>