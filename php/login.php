<?php
include_once("../conexion.php");
session_start();
$usuario = $_POST['usuario'];
$password = $_POST['pass'];
$tipo_usuario = $_POST['tipo_usuario'];

$password = md5($password);

	$sql = "SELECT * FROM ".$tipo_usuario." WHERE `correo` = '$usuario'";
	$usuario = $con -> query($sql);

	//verificamos que si exista ese usuario 
	if(mysqli_num_rows($usuario) == 0){
		echo json_encode(array('success' => 0, 'mensaje' => "No existe un usuario con esa información."));
	}else{
		$fila = mysqli_fetch_row($usuario);
		if($tipo_usuario == "estudiante"){
			if($fila[7] == $password){
				$_SESSION['logueado'] = true;	
				$_SESSION['usuario'] = $fila[2];
				$_SESSION['correo'] = $fila[3];
				$_SESSION['password'] = $fila[7];
				$_SESSION['semestre'] = $fila[5];
				$_SESSION['id'] = $fila[0];
				echo json_encode(array('success' => 1, 'ruta' => "estudiante/admin_student.php"));
			}else{
				echo json_encode(array('success' => 0, 'mensaje' => "Contraseña de estudiante incorrecta!"));
			}
		}else{
			if($fila[3] == $password){
				$_SESSION['logueado'] = true;
				$_SESSION['id'] = $fila[0];	
				$_SESSION['usuario'] = $fila[1];
				$_SESSION['correo'] = $fila[2];
				$_SESSION['password'] = $fila[3];
				$_SESSION['permiso_observaciones_practica'] = $fila[4];
				$_SESSION['foto'] = $fila[5];
				$_SESSION['permiso_registro_usuario'] = $fila[6];
				echo json_encode(array('success' => 1, 'ruta' => "admin/admin.php"));
			}else{
				echo json_encode(array('success' => 0, 'mensaje' => "Contraseña de usuario incorrecta!"));
			}
		}
		
	}

?>