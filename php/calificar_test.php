<?php 
    include_once("../conexion.php");
    $correo =  $_GET['correo'];

    $sql = "SELECT * FROM `test_respuestas` WHERE `correo`='$correo'";
	$result = $con->query($sql);
	$fila = mysqli_fetch_array($result);

    //dim 1
    $Ansiedad = (4-$fila['preg_1'])+$fila['preg_31']+(4-$fila['preg_61'])+$fila['preg_91']+(4-$fila['preg_121'])+$fila['preg_151']+(4-$fila['preg_181'])+$fila['preg_212'];
    $Hostilidad = $fila['preg_6']+(4-$fila['preg_36'])+$fila['preg_66']+(4-$fila['preg_96'])+$fila['preg_126']+(4-$fila['preg_156'])+$fila['preg_186']+$fila['preg_216'];
    $Depresion = (4-$fila['preg_11'])+$fila['preg_41']+(4-$fila['preg_71'])+$fila['preg_101']+$fila['preg_131']+$fila['preg_161']+$fila['preg_191']+$fila['preg_221'];
    $Ansiedad_Social = $fila['preg_16']+(4-$fila['preg_46'])+$fila['preg_76']+(4-$fila['preg_106'])+$fila['preg_136']+(4-$fila['preg_166'])+$fila['preg_196']+$fila['preg_226'];
    $Impulsividad = (4-$fila['preg_21'])+$fila['preg_51']+(4-$fila['preg_81'])+$fila['preg_111']+(4-$fila['preg_141'])+$fila['preg_171']+$fila['preg_201']+(4-$fila['preg_231']);
    $Vulnerabilidad = $fila['preg_26']+(4-$fila['preg_56'])+$fila['preg_86']+(4-$fila['preg_116'])+$fila['preg_146']+(4-$fila['preg_176'])+(4-$fila['preg_206'])+$fila['preg_236'];
    $Neuroticismo = $Ansiedad+$Hostilidad+$Depresion+$Ansiedad_Social+$Impulsividad+$Vulnerabilidad;

    //dim 2
    $Cordialidad = $fila['preg_2']+(4-$fila['preg_32'])+$fila['preg_62']+(4-$fila['preg_92'])+$fila['preg_122']+$fila['preg_152']+$fila['preg_182']+$fila['preg_212'];
    $Gregarismo = (4-$fila['preg_7'])+$fila['preg_37']+(4-$fila['preg_67'])+$fila['preg_97']+(4-$fila['preg_127'])+$fila['preg_157']+(4-$fila['preg_187'])+$fila['preg_217'];
    $Asertividad = $fila['preg_12']+(4-$fila['preg_42'])+$fila['preg_72']+(4-$fila['preg_102'])+$fila['preg_132']+(4-$fila['preg_162'])+$fila['preg_192']+(4-$fila['preg_222']);
    $Actividad = (4-$fila['preg_17'])+$fila['preg_47']+(4-$fila['preg_77'])+$fila['preg_107']+(4-$fila['preg_137'])+$fila['preg_167']+$fila['preg_197']+$fila['preg_227'];
    $Busqueda_emociones = $fila['preg_22']+(4-$fila['preg_52'])+$fila['preg_82']+(4-$fila['preg_112'])+$fila['preg_142']+$fila['preg_172']+$fila['preg_202']+$fila['preg_232'];
    $Emociones_positivas = (4-$fila['preg_27'])+$fila['preg_57']+(4-$fila['preg_87'])+$fila['preg_117']+(4-$fila['preg_147'])+$fila['preg_177']+(4-$fila['preg_207'])+$fila['preg_237'];
    $Extraversion = $Cordialidad+$Gregarismo+$Asertividad+$Actividad+$Busqueda_emociones+$Emociones_positivas;

    //dim3
    $Fantasia = $fila['preg_3']+(4-$fila['preg_33'])+$fila['preg_63']+(4-$fila['preg_93'])+$fila['preg_123']+(4-$fila['preg_153'])+(4-$fila['preg_183'])+(4-$fila['preg_213']);
    $Estetica = (4-$fila['preg_8'])+$fila['preg_38']+(4-$fila['preg_68'])+$fila['preg_98']+(4-$fila['preg_128'])+$fila['preg_158']+$fila['preg_188']+$fila['preg_218'];
    $Sentimientos = $fila['preg_13']+(4-$fila['preg_43'])+$fila['preg_73']+(4-$fila['preg_103'])+$fila['preg_133']+(4-$fila['preg_163'])+$fila['preg_193']+$fila['preg_223'];
    $Acciones = (4-$fila['preg_18'])+$fila['preg_48']+(4-$fila['preg_78'])+$fila['preg_108']+(4-$fila['preg_138'])+$fila['preg_168']+(4-$fila['preg_198'])+(4-$fila['preg_228']);
    $Ideas = $fila['preg_23']+(4-$fila['preg_53'])+$fila['preg_83']+(4-$fila['preg_113'])+$fila['preg_143']+(4-$fila['preg_173'])+$fila['preg_203']+$fila['preg_233'];
    $Valores = (4-$fila['preg_28'])+$fila['preg_58']+(4-$fila['preg_88'])+$fila['preg_118']+(4-$fila['preg_148'])+$fila['preg_178']+(4-$fila['preg_208'])+(4-$fila['preg_239']);
    $Apertura = $Fantasia+$Estetica+$Sentimientos+$Acciones+$Ideas+$Valores;

   //dim 4
    $Confianza = (4-$fila['preg_4'])+$fila['preg_34']+(4-$fila['preg_64'])+$fila['preg_94']+(4-$fila['preg_124'])+$fila['preg_154']+$fila['preg_184']+$fila['preg_214'];
    $Franqueza = $fila['preg_9']+(4-$fila['preg_39'])+$fila['preg_69']+(4-$fila['preg_99'])+$fila['preg_129']+(4-$fila['preg_159'])+(4-$fila['preg_189'])+(4-$fila['preg_219']);
    $Altruismo = (4-$fila['preg_14'])+$fila['preg_44']+(4-$fila['preg_74'])+$fila['preg_104']+(4-$fila['preg_134'])+$fila['preg_164']+$fila['preg_194']+$fila['preg_224'];
    $A_Conciliadora = $fila['preg_19']+(4-$fila['preg_49'])+$fila['preg_79']+(4-$fila['preg_109'])+$fila['preg_139']+(4-$fila['preg_169'])+(4-$fila['preg_199'])+(4-$fila['preg_229']);
    $Modestia = $fila['preg_24']+(4-$fila['preg_54'])+$fila['preg_84']+(4-$fila['preg_114'])+$fila['preg_144']+(4-$fila['preg_174'])+$fila['preg_204']+(4-$fila['preg_234']);
    $Sensibilidad = $fila['preg_29']+(4-$fila['preg_59'])+$fila['preg_89']+(4-$fila['preg_119'])+$fila['preg_149']+$fila['preg_179']+$fila['preg_209']+$fila['preg_239'];
    $Amabilidad = $Confianza+$Franqueza+$Altruismo+$A_Conciliadora+$Modestia+$Sensibilidad;

    //dim 5
    $Competencia = $fila['preg_5']+(4-$fila['preg_35'])+$fila['preg_65']+(4-$fila['preg_95'])+$fila['preg_125']+(4-$fila['preg_155'])+$fila['preg_185']+$fila['preg_215'];
    $Orden = (4-$fila['preg_10'])+$fila['preg_40']+(4-$fila['preg_70'])+$fila['preg_100']+(4-$fila['preg_130'])+$fila['preg_160']+(4-$fila['preg_190'])+(4-$fila['preg_220']);
    $Deber = $fila['preg_15']+(4-$fila['preg_45'])+$fila['preg_75']+(4-$fila['preg_105'])+$fila['preg_135']+$fila['preg_165']+$fila['preg_195']+$fila['preg_225'];
    $Logro = (4-$fila['preg_20'])+$fila['preg_50']+(4-$fila['preg_80'])+$fila['preg_110']+(4-$fila['preg_140'])+$fila['preg_170']+$fila['preg_200']+$fila['preg_230'];
    $Autodisciplina = $fila['preg_25']+(4-$fila['preg_55'])+$fila['preg_85']+(4-$fila['preg_115'])+$fila['preg_145']+(4-$fila['preg_175'])+(4-$fila['preg_205'])+$fila['preg_235'];
    $Deliberacion = (4-$fila['preg_30'])+$fila['preg_60']+(4-$fila['preg_90'])+$fila['preg_120']+(4-$fila['preg_150'])+$fila['preg_180']+$fila['preg_210']+$fila['preg_240'];
    $Responsabilidad = $Competencia+$Orden+$Deber+$Logro+$Autodisciplina+$Deliberacion;


    $Negativismo = 0;
    $Aquiescencia = 0;

    for ($i=1; $i < 248; $i++) { 
        if($i != 41 && $i != 82  && $i != 123  && $i != 164  && $i != 205  && $i != 246){
            if($fila[$i] == 0 ||  $fila[$i] == 1){
                $Negativismo = $Negativismo + 1;
            }
            if($fila[$i] == 3 ||  $fila[$i] == 4){
                $Aquiescencia = $Aquiescencia + 1;
            }
        }
    }

    $sql2 = "INSERT INTO `test_calificaciones` (`correo`, `Ansiedad`, `Hostilidad`, `Depresion`, `Ansiedad_Social`, `Impulsividad`, `Vulnerabilidad`, `Neuroticismo`, `Cordialidad`, `Gregarismo`, `Asertividad`, `Actividad`, `Busqueda_emociones`, `Emociones_positivas`, `Extraversion`, `Fantasia`, `Estetica`, `Sentimientos`, `Acciones`, `Ideas`, `Valores`, `Apertura`, `Confianza`, `Franqueza`, `Altruismo`, `A_Conciliadora`, `Modestia`, `Sensibilidad`, `Amabilidad`, `Competencia`, `Orden`, `Deber`, `Logro`, `Autodisciplina`, `Deliberacion`, `Responsabilidad`, `Negativismo`, `Aquiescencia`, `nombre_completo`) VALUES ('$correo' , $Ansiedad , $Hostilidad , $Depresion , $Ansiedad_Social , $Impulsividad , $Vulnerabilidad , $Neuroticismo , $Cordialidad , $Gregarismo , $Asertividad , $Actividad , $Busqueda_emociones , $Emociones_positivas , $Extraversion , $Fantasia , $Estetica , $Sentimientos , $Acciones , $Ideas , $Valores , $Apertura , $Confianza , $Franqueza , $Altruismo , $A_Conciliadora , $Modestia , $Sensibilidad , $Amabilidad , $Competencia , $Orden , $Deber , $Logro , $Autodisciplina , $Deliberacion , $Responsabilidad , $Negativismo , $Aquiescencia, '$fila[248]')";
    $sql3 ="UPDATE `test_respuestas` SET `estado_calificado` = 1 WHERE `correo` = '$correo'";

    if(mysqli_query($con, $sql2) && mysqli_query($con, $sql3)){
        echo json_encode(array('success' => 1, 'mensaje' => "Agradecemos su colaboración y recuerde que los resultados de esta prueba servirán para su crecimiento y desarrollo profesional."));
    }else{ 
        echo json_encode(array('success' => 0, 'mensaje' => "Error al guardar en la base de datos"));
    }
?>