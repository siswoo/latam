<?php
session_start();
include('conexion.php');
$fecha_inicio = date('Y-m-d');
$usuario = $_POST["usuario"];
$clave = md5($_POST["clave"]);

$sql1 = "SELECT * FROM usuario WHERE usuario = '".$usuario."' and clave = '".$clave."'";
$proceso1 = mysqli_query($conexion,$sql1);
$contador1 = mysqli_num_rows($proceso1);
if($contador1>=1){
	$datos = [
		"estatus" => "ok",
	];
	while($row1 = mysqli_fetch_array($proceso1)) {
		$usuario_id = $row1["id"];
	}
	$_SESSION["id"]=$usuario_id;
}else{
	$datos = [
		"estatus" => "no existe",
	];
}

echo json_encode($datos);

?>