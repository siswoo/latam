<?php
include('conexion.php');
$fecha_creacion = date('Y-m-d');
$condicion = $_POST["condicion"];

if($condicion=='guardar1'){
	$nombre = $_POST["nombres"]." ".$_POST["apellidos"];
	$pais = $_POST["pais"];
	$ciudad = $_POST["ciudad"];
	$documento_tipo = $_POST["documento_tipo"];
	$documento_numero = $_POST["documento_numero"];
	$edad = $_POST["edad"];
	$experiencia = $_POST["experiencia"];
	$numero_contacto = $_POST["numero_contacto"];
	$correo = $_POST["correo"];
	$mensaje = "Me comunico a través de LATAN y ";
	$fuente = "LATAN";
	if($experiencia=="Si"){
		$mensaje .= "tengo experiencia como modelo WebCam";
	}else{
		$mensaje .= "Soy nuevo en el mundo WebCam, quiero información";
	}

	$sql1 = "SELECT * FROM formulario_contacto1 WHERE correo = '".$correo."'";
	$proceso1 = mysqli_query($conexion,$sql1);
	$contador1 = mysqli_num_rows($proceso1);
	if($contador1>=1){
		$datos = [
			"estatus" => "repetidos",
		];
	}else{
		$sql2 = "INSERT INTO formulario_contacto1 (nombre,documento_tipo,documento_numero,ciudad,pais,experiencia,correo,telefono,edad,mensaje,fuente,fecha_creacion) VALUES ('$nombre','$documento_tipo','$documento_numero','$ciudad','$pais','$experiencia','$correo','$numero_contacto','$edad','$mensaje','$fuente','$fecha_creacion')";
		$proceso2 = mysqli_query($conexion,$sql2);
		$datos = [
			"estatus" => "ok",
			"sql2" => $sql2,
		];
	}
	echo json_encode($datos);
}

?>