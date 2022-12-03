<?php 
    include_once("../conexion.php");
	
    $paso =  $_GET['paso'];
    $correo =  $_GET['correo'];
    $preg_1 =  $_POST['preg_1'];
    $preg_2 =  $_POST['preg_2'];
    $preg_3 =  $_POST['preg_3'];
    $preg_4 =  $_POST['preg_4'];
    $preg_5 =  $_POST['preg_5'];
    $preg_6 =  $_POST['preg_6'];
    $preg_7 =  $_POST['preg_7'];
    $preg_8 =  $_POST['preg_8'];
    $preg_9 =  $_POST['preg_9'];
    $preg_10 =  $_POST['preg_10'];
    $preg_11 =  $_POST['preg_11'];
    $preg_12 =  $_POST['preg_12'];
    $preg_13 =  $_POST['preg_13'];
    $preg_14 =  $_POST['preg_14'];
    $preg_15 =  $_POST['preg_15'];
    $preg_16 =  $_POST['preg_16'];
    $preg_17 =  $_POST['preg_17'];
    $preg_18 =  $_POST['preg_18'];
    $preg_19 =  $_POST['preg_19'];
    $preg_20 =  $_POST['preg_20'];
    $preg_21 =  $_POST['preg_21'];
    $preg_22 =  $_POST['preg_22'];
    $preg_23 =  $_POST['preg_23'];
    $preg_24 =  $_POST['preg_24'];
    $preg_25 =  $_POST['preg_25'];
    $preg_26 =  $_POST['preg_26'];
    $preg_27 =  $_POST['preg_27'];
    $preg_28 =  $_POST['preg_28'];
    $preg_29 =  $_POST['preg_29'];
    $preg_30 =  $_POST['preg_30'];
    $preg_31 =  $_POST['preg_31'];
    $preg_32 =  $_POST['preg_32'];
    $preg_33 =  $_POST['preg_33'];
    $preg_34 =  $_POST['preg_34'];
    $preg_35 =  $_POST['preg_35'];
    $preg_36 =  $_POST['preg_36'];
    $preg_37 =  $_POST['preg_37'];
    $preg_38 =  $_POST['preg_38'];
    $preg_39 =  $_POST['preg_39'];
    $preg_40 =  $_POST['preg_40'];
    
    if($paso == "paso_1"){
       $sql = "UPDATE `test_respuestas` SET `preg_1`='$preg_1',`preg_2`='$preg_2',`preg_3`='$preg_3',`preg_4`='$preg_4',`preg_5`='$preg_5',`preg_6`='$preg_6',`preg_7`='$preg_7',`preg_8`='$preg_8',`preg_9`='$preg_9',`preg_10`='$preg_10',`preg_11`='$preg_11',`preg_12`='$preg_12',`preg_13`='$preg_13',`preg_14`='$preg_14',`preg_15`='$preg_15',`preg_16`='$preg_16',`preg_17`='$preg_17',`preg_18`='$preg_18',`preg_19`='$preg_19',`preg_20`='$preg_20',`preg_21`='$preg_21',`preg_22`='$preg_22',`preg_23`='$preg_23',`preg_24`='$preg_24',`preg_25`='$preg_25',`preg_26`='$preg_26',`preg_27`='$preg_27',`preg_28`='$preg_28',`preg_29`='$preg_29',`preg_30`='$preg_30',`preg_31`='$preg_31',`preg_32`='$preg_32',`preg_33`='$preg_33',`preg_34`='$preg_34',`preg_35`='$preg_35',`preg_36`='$preg_36',`preg_37`='$preg_37',`preg_38`='$preg_38',`preg_39`='$preg_39',`preg_40`='$preg_40',`bloque_1`=1 WHERE `correo` = '$correo'";
       if(mysqli_query($con, $sql)){}else{ echo "Error al guardar en la base de datos"; }
    }
    if($paso == "paso_2"){
       $sql = "UPDATE `test_respuestas` SET `preg_41`='$preg_1',`preg_42`='$preg_2',`preg_43`='$preg_3',`preg_44`='$preg_4',`preg_45`='$preg_5',`preg_46`='$preg_6',`preg_47`='$preg_7',`preg_48`='$preg_8',`preg_49`='$preg_9',`preg_50`='$preg_10',`preg_51`='$preg_11',`preg_52`='$preg_12',`preg_53`='$preg_13',`preg_54`='$preg_14',`preg_55`='$preg_15',`preg_56`='$preg_16',`preg_57`='$preg_17',`preg_58`='$preg_18',`preg_59`='$preg_19',`preg_60`='$preg_20',`preg_61`='$preg_21',`preg_62`='$preg_22',`preg_63`='$preg_23',`preg_64`='$preg_24',`preg_65`='$preg_25',`preg_66`='$preg_26',`preg_67`='$preg_27',`preg_68`='$preg_28',`preg_69`='$preg_29',`preg_70`='$preg_30',`preg_71`='$preg_31',`preg_72`='$preg_32',`preg_73`='$preg_33',`preg_74`='$preg_34',`preg_75`='$preg_35',`preg_76`='$preg_36',`preg_77`='$preg_37',`preg_78`='$preg_38',`preg_79`='$preg_39',`preg_80`='$preg_40',`bloque_2`=1 WHERE `correo` = '$correo'";
       if(mysqli_query($con, $sql)){}else{ echo "Error al guardar en la base de datos"; }
    }
    if($paso == "paso_3"){
       $sql = "UPDATE `test_respuestas` SET `preg_81`='$preg_1',`preg_82`='$preg_2',`preg_83`='$preg_3',`preg_84`='$preg_4',`preg_85`='$preg_5',`preg_86`='$preg_6',`preg_87`='$preg_7',`preg_88`='$preg_8',`preg_89`='$preg_9',`preg_90`='$preg_10',`preg_91`='$preg_11',`preg_92`='$preg_12',`preg_93`='$preg_13',`preg_94`='$preg_14',`preg_95`='$preg_15',`preg_96`='$preg_16',`preg_97`='$preg_17',`preg_98`='$preg_18',`preg_99`='$preg_19',`preg_100`='$preg_20',`preg_101`='$preg_21',`preg_102`='$preg_22',`preg_103`='$preg_23',`preg_104`='$preg_24',`preg_105`='$preg_25',`preg_106`='$preg_26',`preg_107`='$preg_27',`preg_108`='$preg_28',`preg_109`='$preg_29',`preg_110`='$preg_30',`preg_111`='$preg_31',`preg_112`='$preg_32',`preg_113`='$preg_33',`preg_114`='$preg_34',`preg_115`='$preg_35',`preg_116`='$preg_36',`preg_117`='$preg_37',`preg_118`='$preg_38',`preg_119`='$preg_39',`preg_120`='$preg_40',`bloque_3`=1 WHERE `correo` = '$correo'";
       if(mysqli_query($con, $sql)){}else{ echo "Error al guardar en la base de datos"; }
    }
    if($paso == "paso_4"){
       $sql = "UPDATE `test_respuestas` SET `preg_121`='$preg_1',`preg_122`='$preg_2',`preg_123`='$preg_3',`preg_124`='$preg_4',`preg_125`='$preg_5',`preg_126`='$preg_6',`preg_127`='$preg_7',`preg_128`='$preg_8',`preg_129`='$preg_9',`preg_130`='$preg_10',`preg_131`='$preg_11',`preg_132`='$preg_12',`preg_133`='$preg_13',`preg_134`='$preg_14',`preg_135`='$preg_15',`preg_136`='$preg_16',`preg_137`='$preg_17',`preg_138`='$preg_18',`preg_139`='$preg_19',`preg_140`='$preg_20',`preg_141`='$preg_21',`preg_142`='$preg_22',`preg_143`='$preg_23',`preg_144`='$preg_24',`preg_145`='$preg_25',`preg_146`='$preg_26',`preg_147`='$preg_27',`preg_148`='$preg_28',`preg_149`='$preg_29',`preg_150`='$preg_30',`preg_151`='$preg_31',`preg_152`='$preg_32',`preg_153`='$preg_33',`preg_154`='$preg_34',`preg_155`='$preg_35',`preg_156`='$preg_36',`preg_157`='$preg_37',`preg_158`='$preg_38',`preg_159`='$preg_39',`preg_160`='$preg_40',`bloque_4`=1 WHERE `correo` = '$correo'";
       if(mysqli_query($con, $sql)){}else{ echo "Error al guardar en la base de datos"; }
    }
    if($paso == "paso_5"){
        $sql = "UPDATE `test_respuestas` SET `preg_161`='$preg_1',`preg_162`='$preg_2',`preg_163`='$preg_3',`preg_164`='$preg_4',`preg_165`='$preg_5',`preg_166`='$preg_6',`preg_167`='$preg_7',`preg_168`='$preg_8',`preg_169`='$preg_9',`preg_170`='$preg_10',`preg_171`='$preg_11',`preg_172`='$preg_12',`preg_173`='$preg_13',`preg_174`='$preg_14',`preg_175`='$preg_15',`preg_176`='$preg_16',`preg_177`='$preg_17',`preg_178`='$preg_18',`preg_179`='$preg_19',`preg_180`='$preg_20',`preg_181`='$preg_21',`preg_182`='$preg_22',`preg_183`='$preg_23',`preg_184`='$preg_24',`preg_185`='$preg_25',`preg_186`='$preg_26',`preg_187`='$preg_27',`preg_188`='$preg_28',`preg_189`='$preg_29',`preg_190`='$preg_30',`preg_191`='$preg_31',`preg_192`='$preg_32',`preg_193`='$preg_33',`preg_194`='$preg_34',`preg_195`='$preg_35',`preg_196`='$preg_36',`preg_197`='$preg_37',`preg_198`='$preg_38',`preg_199`='$preg_39',`preg_200`='$preg_40',`bloque_5`=1 WHERE `correo` = '$correo'";
        if(mysqli_query($con, $sql)){}else{ echo "Error al guardar en la base de datos"; }
    }
    if($paso == "paso_6"){
        $sql = "UPDATE `test_respuestas` SET `preg_201`='$preg_1',`preg_202`='$preg_2',`preg_203`='$preg_3',`preg_204`='$preg_4',`preg_205`='$preg_5',`preg_206`='$preg_6',`preg_207`='$preg_7',`preg_208`='$preg_8',`preg_209`='$preg_9',`preg_210`='$preg_10',`preg_211`='$preg_11',`preg_212`='$preg_12',`preg_213`='$preg_13',`preg_214`='$preg_14',`preg_215`='$preg_15',`preg_216`='$preg_16',`preg_217`='$preg_17',`preg_218`='$preg_18',`preg_219`='$preg_19',`preg_220`='$preg_20',`preg_221`='$preg_21',`preg_222`='$preg_22',`preg_223`='$preg_23',`preg_224`='$preg_24',`preg_225`='$preg_25',`preg_226`='$preg_26',`preg_227`='$preg_27',`preg_228`='$preg_28',`preg_229`='$preg_29',`preg_230`='$preg_30',`preg_231`='$preg_31',`preg_232`='$preg_32',`preg_233`='$preg_33',`preg_234`='$preg_34',`preg_235`='$preg_35',`preg_236`='$preg_36',`preg_237`='$preg_37',`preg_238`='$preg_38',`preg_239`='$preg_39',`preg_240`='$preg_40',`bloque_6`=1 WHERE `correo` = '$correo'";
        if(mysqli_query($con, $sql)){}else{ echo "Error al guardar en la base de datos"; }
    }
?>