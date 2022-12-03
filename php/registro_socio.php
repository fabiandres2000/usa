<?php
    include_once("../conexion.php");
    $uploadDirectory = "../uploads/";

    $nombre = $_POST["nombre"];
    $semestre = $_POST["semestre"];
    $tipo_id = $_POST["tipo_id"];
    $id = $_POST["id"];
    $edad = $_POST["edad"];
    $sexo = $_POST["sexo"];
    $estrato = $_POST["estrato"];
    $celular = $_POST["celular"];
    $ciudad = $_POST["ciudad"];
    $cantidad_hijos = $_POST["cantidad_hijos"];
    $dependencia = $_POST["dependencia"];
    $sustancias = $_POST["sustancias"];
    $frecuencia = $_POST["frecuencia"];
    $tratamiento = $_POST["tratamiento"];
    $cantidad_labora = $_POST["cantidad_labora"];
    $ciudad_uni = $_POST["ciudad_uni"];
    $personas_estudia = $_POST["personas_estudia"];
    $personas_estudia_array = $_POST["personas_estudia_array"];
    $actividad_fisica = $_POST["actividad_fisica"];
    $intensidad_fisica = $_POST["intensidad_fisica"];
    $actividades_array = $_POST["actividades_array"];
    $horas = $_POST["horas"];
    $enfermedad = $_POST["enfermedad"];
    $cual_enfermedad = $_POST["cual_enfermedad"];
    $comidas_array = $_POST["comidas_array"];
    $icfes = $_POST["icfes"];
    $promedio = $_POST["promedio"];
    $periodo = $_POST["periodo"];
    $edad_madre = $_POST["edad_madre"];
    $estudios_madre = $_POST["estudios_madre"];
    $dedicacion_madre = $_POST["dedicacion_madre"];
    $edad_padre = $_POST["edad_padre"];
    $estudios_padre = $_POST["estudios_padre"];
    $dedicacion_padre = $_POST["dedicacion_padre"];
    $id_estudiante = $_POST["id_estudiante"];

    $sql = "INSERT INTO `sociodemografico`(
        `id_estudiante`, 
        `nombre`, 
        `semestre`, 
        `tipo_id`, 
        `identifi`, 
        `edad`, 
        `sexo`, 
        `estrato`, 
        `celular`, 
        `ciudad`, 
        `cantidad_hijos`, 
        `dependencia`, 
        `sustancias`, 
        `frecuencia`, 
        `tratamiento`, 
        `cantidad_labora`, 
        `ciudad_uni`, 
        `personas_estudia`, 
        `actividad_fisica`, 
        `intensidad_fisica`, 
        `actividades`, 
        `horas`, 
        `enfermedad`, 
        `cual_enfermedad`,
        `comidas`, 
        `icfes`, 
        `promedio`, 
        `periodo`, 
        `edad_madre`, 
        `estudios_madre`, 
        `dedicacion_madre`, 
        `edad_padre`, 
        `estudios_padre`, 
        `dedicacion_padre`) 
        VALUES (
            '$id_estudiante',
            '$nombre',
            '$semestre',
            '$tipo_id',
            '$id',
            '$edad',
            '$sexo',
            '$estrato',
            '$celular',
            '$ciudad',
            '$cantidad_hijos',
            '$dependencia',
            '$sustancias',
            '$frecuencia',
            '$tratamiento',
            '$cantidad_labora',
            '$ciudad_uni',
            '$personas_estudia_array',
            '$actividad_fisica',
            '$intensidad_fisica',
            '$actividades_array',
            '$horas',
            '$enfermedad',
            '$cual_enfermedad',
            '$comidas_array',
            '$icfes',
            '$promedio',
            '$periodo',
            '$edad_madre',
            '$estudios_madre',
            '$dedicacion_madre',
            '$edad_padre',
            '$estudios_padre',
            '$dedicacion_padre'
        )";
    $resultado = $con->query($sql);

    if(!$resultado){
        $mensaje = "Ocurrio un error, intente nuevamente.";
        echo json_encode(array('success' => 0, 'mensaje' => $con->error));
    }else{
        $mensaje = "Test registrado correctamente.";
        echo json_encode(array('success' => 1, 'mensaje' => $mensaje));
    }

?>