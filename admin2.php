<?php
session_start();
if(@$_SESSION["id"]=="" or @$_SESSION["id"]==null){ ?>
	<script type="text/javascript">
		window.location.href = "admin1.php";
	</script>
	<?php
	exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Camaleon Models</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
</head>
<body>

<?php
include("script/conexion.php");
?>

<div class="row" style="background-color: black;">
	<div class="col-6">
		<img src="img/LOGO-CAMALEON-correcion.png" class="img-fluid mt-2 mb-2 ml-3" style="">
	</div>
	<div class="col-6 text-right">
		<img src="img/PLANETA2.png" class="img-fluid mt-2 mb-2 mr-3" style="">
	</div>
</div>

<div class="row" style="margin-left: 1rem; margin-right: 1rem; margin-top: 1rem;">
	<div class="col-12">
		<table id="example" class="table row-border hover table-bordered" style="font-size: 12px; color:rgba(50,55,66,1); border-radius: 5px;">
			<thead>
				<tr>
					<th class="text-center">ID</th>
					<th class="text-center">Apellidos</th>
					<th class="text-center">País</th>
					<th class="text-center">Ciudad</th>
					<th class="text-center">Nombres</th>
					<th class="text-center">Documento Tipo</th>
					<th class="text-center">Documento Número</th>
					<th class="text-center">Edad</th>
					<th class="text-center">Experiencia</th>
					<th class="text-center">Teléfono</th>
					<th class="text-center">Correo</th>
					<th class="text-center">Fecha Registro</th>
					<th class="text-center">Opciones</th>
				</tr>
			</thead>
			<tbody id="resultados">
			<?php
				$sql1 = "SELECT * FROM informacion";
				$consulta1 = mysqli_query($conexion,$sql1);
				while($row1 = mysqli_fetch_array($consulta1)) {
					$id = $row1['id'];
					$nombres = $row1['nombres'];
					$apellidos = $row1['apellidos'];
					$pais = $row1['pais'];
					$ciudad = $row1['ciudad'];
					$documento_tipo = $row1['documento_tipo'];
					$documento_numero = $row1['documento_numero'];
					$edad = $row1['edad'];
					$experiencia = $row1['experiencia'];
					$telefono = $row1['numero_contacto'];
					$correo = $row1['correo'];
					$fecha_registro = $row1['fecha_inicio'];
				    echo '
				       	<tr id="tr_'.$id.'">
							<td class="text-center" id="id_'.$id.'">'.$id.'</td>
							<td class="text-center" id="nombres_'.$id.'">'.$nombres.'</td>
							<td class="text-center" id="apellidos_'.$id.'">'.$apellidos.'</td>
							<td class="text-center" id="pais_'.$id.'">'.$pais.'</td>
							<td class="text-center" id="ciudad_'.$id.'">'.$ciudad.'</td>
							<td class="text-center" id="documento_tipo_'.$id.'">'.$documento_tipo.'</td>
							<td class="text-center" id="documento_numero_'.$id.'">'.$documento_numero.'</td>
							<td class="text-center" id="edad_'.$id.'">'.$edad.'</td>
							<td class="text-center" id="experiencia_'.$id.'">'.$experiencia.'</td>
							<td class="text-center" id="telefono_'.$id.'">'.$telefono.'</td>
							<td class="text-center" id="correo_'.$id.'">'.$correo.'</td>
							<td class="text-center" id="fecha_registro_'.$id.'">'.$fecha_registro.'</td>
							<td class="text-center" nowrap="nowrap">
				        		<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" onclick="aceptar('.$id.');">Aceptar</button>
				        		<button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal2" onclick="rechazar('.$id.');">Rechazar</button>
				        	</td>
				       	</tr>
				    ';
				}
			?>
			</tbody>
		</table>
	</div>
</div>

</body>
</html>
<script src="js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">

	$(document).ready(function() {
    	var table = $('#example').DataTable( {
        	"lengthMenu": [[10, 25, 50, 100], [10, 25, 50, 100]],

        	"language": {
	            "lengthMenu": "Mostrar _MENU_ Registros por página",
	            "zeroRecords": "No se ha encontrado resultados",
	            "info": "Ubicado en la página <strong>_PAGE_</strong> de <strong>_PAGES_</strong>",
	            "infoEmpty": "Sin registros actualmente",
	            "infoFiltered": "(Filtrado de <strong>_MAX_</strong> total registros)",
	            "paginate": {
			        "first":      "Primero",
			        "last":       "Última",
			        "next":       "Siguiente",
			        "previous":   "Anterior"
			    },
			    "search": "Buscar",
        	},

        	"paging": true,
        	"order": [[ 11, "desc" ]],

    	} );


    	/***************POPOVERS*******************/
		$(function () {
			$('[data-toggle="popover"]').popover()
		})

		// popovers initialization - on hover
		$('[data-toggle="popover-hover"]').popover({
		  html: true,
		  trigger: 'hover',
		  placement: 'bottom',
		  /*content: function () { return '<img src="' + $(this).data('img') + '" />'; }*/
		});

		// popovers initialization - on click
		$('[data-toggle="popover-click"]').popover({
		  html: true,
		  trigger: 'click',
		  placement: 'bottom',
		  content: function () { return '<img src="' + $(this).data('img') + '" />'; }
		});
    	/******************************************/

	} );


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