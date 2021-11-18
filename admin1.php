<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Camaleon Models</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<div class="row" style="background-color: black;">
	<div class="col-6">
		<img src="img/LOGO-CAMALEON-correcion.png" class="img-fluid mt-2 mb-2 ml-3" style="">
	</div>
	<div class="col-6 text-right">
		<img src="img/PLANETA2.png" class="img-fluid mt-2 mb-2 mr-3" style="">
	</div>
</div>

<div class="container" style="margin-top: 2rem;">
	<div class="row">
		<div class="col-12"><form method="POST" action="#" id="formulario1"></div>
		<div class="col-4">&nbsp;</div>
		<div class="col-4 form-group form-check">
			<label for="usuario" style="font-size: 18px; font-weight: bold;">Usuario o Correo</label>
			<input type="text" class="form-control" name="usuario" id="usuario" required>
			<div class="ml-1 mt-1 error_texto1 d-none" id="error_texto1">Este campo no debe estar vacio.</div>
		</div>
		<div class="col-3">&nbsp;</div>

		<div class="col-4">&nbsp;</div>
		<div class="col-4 form-group form-check">
			<label for="password" style="font-size: 18px; font-weight: bold;">Contraseña</label>
			<input type="password" class="form-control" name="password" id="password" required>
			<div class="ml-1 mt-1 error_texto1 d-none" id="error_texto1">Este campo no debe estar vacio.</div>
		</div>
		<div class="col-4">&nbsp;</div>
	</div>
	<div class="col-12 text-center">
		<button type="submit" class="btn btn-success">Ingresar</button>
	</div>
	<div class="col-12"></form></div>
</div>

</body>
</html>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script type="text/javascript">
	$("#formulario1").on("submit", function(e){
		e.preventDefault();
		var f = $(this);
		var usuario = $('#usuario').val();
		var clave = $('#password').val();

		$.ajax({
	        url: 'script/login1.php',
	        type: 'POST',
	        dataType: "JSON",
	        data: {
				"usuario": usuario,
				"clave": clave,
			},

	        beforeSend: function (){},

	        success: function(respuesta){
	        	console.log(respuesta);
	        	if(respuesta["estatus"]=="no existe"){
	        		Swal.fire({
						title: 'Error',
						text: "No coinciden los datos de ingreso",
						icon: 'error',
						position: 'center',
						showConfirmButton: false,
						timer: 2000
					});	
	        	}else{
			      	window.location.href = "admin2.php";
	        	}
	        },

	        error: function(respuesta){
	           	console.log(respuesta['responseText']);
	        }
	    });
	});
</script>