<!DOCTYPE html>
<html lang="es">
<head>
	<title>Formulario Latan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>

<style type="text/css">
	.inputp1{
		background-color: black;
		color: white;
		border-color:black;
	}
	::placeholder {
	  color: white !important;
	}
</style>

<body>
	<div class="row" style="background-color: black;">
		<div class="col-6">
			<img src="img/LOGO-CAMALEON-correcion.png" class="img-fluid mt-2 mb-2 ml-3" style="">
		</div>
		<div class="col-6 text-right">
			<img src="img/PLANETA2.png" class="img-fluid mt-2 mr-3" style="">
		</div>
	</div>

	<div style="background: url(img/fondo2.png) no-repeat center; background-attachment: fixed; min-height: 300px;">
		<div class="col-12 text-center" style="font-size: 35px; font-weight: bold; color: white;">
			FORMULARIO DE INSCRIPCIÓN
		</div>
		<div class="col-12 text-center" style="font-size: 20px; color: white;">
			Verifica que la información quede bien registrada!!, nos facilitara contactarte.
		</div>
		<div class="col-12 text-center" style="font-size: 35px; font-weight: bold; color: black;">
			Información Personal
		</div>
		
		<div class="container" style="background-color: white; border-radius: 1rem;">
			<form action="#" method="POST" id="formulario1">
				<div class="row">
					<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center mt-3">
						<input type="text" id="nombres" name="nombres" class="form-control inputp1" placeholder="Nombres" required>
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center mt-3">
						<input type="text" id="apellidos" name="apellidos" class="form-control inputp1" placeholder="Apellidos" required>
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center mt-3">
						<input type="text" id="pais" name="pais" class="form-control inputp1" placeholder="País" required>
					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center mt-3">
						<input type="text" id="ciudad" name="ciudad" class="form-control inputp1" placeholder="Ciudad" required>
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center mt-3">
						<input type="text" id="documento_tipo" name="documento_tipo" class="form-control inputp1" placeholder="Tipo Documento" required>
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center mt-3">
						<input type="text" id="documento_numero" name="documento_numero" class="form-control inputp1" placeholder="Número Documento" required>
					</div>
					
					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center mt-3">
						<input type="text" id="edad" name="edad" min="18" class="form-control inputp1" placeholder="Edad (+18)" required>
					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 text-center mt-3">
						<select class="form-control inputp1" name="experiencia" id="experiencia" required>
							<option value="">¿Tienes Experiencia?</option>
							<option value="Si">Si</option>
							<option value="No">No</option>
						</select>
					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center" style="font-size: 35px; font-weight: bold; color: black; margin-top: 2rem;">
						Información de Contacto
					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center mt-3">
						<input type="text" id="numero_contacto" name="numero_contacto" class="form-control inputp1" placeholder="Número de Contacto" required>
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center mt-3">
						<input type="text" id="numero_contacto2" name="numero_contacto2" class="form-control inputp1" placeholder="Verifica Tú Numero de Contacto" required>
					</div>
					<div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 text-center mt-3">
						<input type="email" id="correo" name="correo" class="form-control inputp1" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" placeholder="E-mail" required>
					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center" style="font-size: 20px; font-weight: bold; color: black; margin-top: 2rem;">
						Acepta términos y condiciones
						<input type="checkbox" id="terminos_condiciones1" name="terminos_condiciones1" required>
					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center" style="font-size: 35px; font-weight: bold; color: black; margin-top: 2rem;">
						<a href="terminosycondiciones.php" target="_blank">
							<img src="img/LEE-AQUI.png" class="img-fluid" style="max-width: 400px; cursor: pointer;">
						</a>
					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center" style="font-size: 35px; font-weight: bold; color: black; margin-top: 2rem;">
						<button type="submit" style="background-color: transparent; border-color: transparent;">
							<img src="img/ENVIAR.png" class="img-fluid" style="max-width: 200px;">
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>

	<div class="row" style="background: url(img/fondoPiePagina.png) no-repeat center; min-height: 400px; -webkit-background-size: cover;">
		<div class="col-12">&nbsp;</div>
		<div class="col-12 text-center">
			<img src="img/LOGO2.png" class="img-fluid mt-3" style="max-width: 200px;">
		</div>
		<div class="col-12 text-center">
			<a href="https://www.facebook.com/profile.php?id=100070776395766" style="text-decoration: none;" target="_blank">
				<img src="img/FACE.png" class="img-fluid" style="max-width: 100px;">
			</a>
			<!--
			<a href="https://www.facebook.com/camaleon.latam" style="text-decoration: none;" target="_blank">
				<img src="img/FACE.png" class="img-fluid" style="max-width: 100px;">
			</a>
			-->
			<a href="https://www.instagram.com/webcamaleonabc/" style="text-decoration: none;" target="_blank">
				<img src="img/INSTA.png" class="img-fluid" style="max-width: 100px;">
			</a>
			<a href="https://twitter.com/CamaleonModels" style="text-decoration: none;" target="_blank">
				<img src="img/TWITTER.png" class="img-fluid" style="max-width: 100px;">
			</a>
			<a href="https://www.youtube.com/channel/UCYOiiDOd8X9nsEufMFfa9SA/videos" style="text-decoration: none;" target="_blank">
				<img src="img/YOUTU.png" class="img-fluid" style="max-width: 100px;">
			</a>
		</div>
	</div>

	<!-- Modal terminos y condiciones -->
				<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<form action="#" method="POST" id="form_modal_edit" style="">
							<input type="hidden" name="edit_id" id="edit_id">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">Términos y Condiciones</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
								    <div class="row">
									    <div class="col-12 text-justify">El portal de Camaleón LATAM garantiza el debido proceso para utilizar información personal y privada de personas inscritas en el portal para no infligir de ninguna manera las disposiciones contenidas en la Ley Estatutaria del Habeas Data (Ley 1581 del 2012), reglamentada mediante el decreto 1377 del 2013 y en la Ley de Privacidad o Habeas Data Colombiana (Ley 1266 de 2008). 
										    <br> De esta manera, Camaleón LATAM manifiesta garantizar los derechos a la privacidad, intimidad y al buen nombre de las personas, en el sistema de los datos personales recolectados, comprometida en efectuar un correcto uso y tratamiento de los datos personales contenidos en la bases de datos, evitando el acceso no autorizado a terceros que puedan conocer o vulnerar, modificar, divulgar y/o destruir la información que allí reposa.
										    <br> El acceso a las diferentes bases de datos se encuentra restringido incluso para los empleados y colaboradores. Todos nos encontramos comprometidos con la confidencialidad y manipulación adecuada de las bases de datos atendiendo a los lineamientos sobre tratamiento de la información establecida en la Ley. 
										    <br> Uso de Cookies y del fichero de actividad. Monitorización de la página Web La página Web utiliza cookies. Las cookies utilizadas por la página Web son ficheros enviados a un navegador por medio de un servidor web para registrar las actividades del usuario en la página Web y permitirle una navegación más fluida y personalizada. 
										    <br> El usuario tiene la posibilidad de configurar su navegador para impedir la entrada de éstas, bloquearlas o, en su caso, eliminarlas. Para utilizar esta página Web, no resulta necesario que el usuario permita la descarga o instalación de cookies.
										    <br> De igual manera, los servidores de la página Web detectan de manera automática la dirección IP y el nombre de la red utilizados por el usuario. 
										    <br> Toda esta información es registrada temporalmente en un fichero de actividad del servidor que permite el posterior procesamiento de los datos con el fin de obtener mediciones estadísticas que permitan conocer el número de impresiones de páginas, y el número de visitas realizadas a la página Web, entre otras mediciones.
				        					<br> Camaleón LATAM no se responsabiliza por cualquier consecuencia derivada del ingreso indebido de terceros a la base de datos y/o por alguna falla técnica en el funcionamiento y/o conservación de datos en el sistema en cualquiera de los menús de su página web.
				        					<br> Camaleón LATAM solicita al Usuario de esta página, que lea detalladamente estas condiciones de uso (en adelante las Condiciones de Uso) y la política de privacidad de este Sitio Web, antes de iniciar su exploración o utilización. Si el Usuario no está de acuerdo con estas Condiciones de Uso o con cualquier disposición de la Política de Privacidad, le sugerimos que se abstenga de acceder o navegar por el Sitio Web de nuestra entidad.
				        					<br> 1. Definiciones 
				        					<br> Para facilitar la comprensión de estas Condiciones de Uso del Sitio Web, se hace necesario aclarar el significado de las siguientes palabras:
				        					<br> a. Contenidos. Implican todas las formas de información o datos que se divulgan en la página web, entre los que se encuentran: textos, imágenes, fotos, logos, diseños, animaciones.
				        					<br> b. Derechos de Propiedad Intelectual. Incluye lo relativo a marcas, nombres comerciales, logos, enseñas, lemas, nombres de dominio, secretos empresariales, saber-hacer, diseños industriales, patentes, modelos de utilidad y derecho de autor.
				        					<br> c. Internet. Herramienta de comunicación con miles de redes de computadoras unidas por el protocolo TCP/IP. Sobre esta red se pueden utilizar múltiples servicios como por ejemplo correos electrónicos, www, etc.
				        					<br> d. Página web. Resultado en hipertexto o hipermedia que proporciona un navegador del www después de obtener la información solicitada. Su contenido puede ir desde un texto corto a un voluminoso conjunto de textos, gráficos estáticos o en movimiento, sonido, etc.
				        					<br> d. Publicar. Hacer que un documento sea visible desde el Sitio Web.
				        					<br> e. Usuario. Es toda persona que ingresa al Sitio Web. Puede registrarse en caso de que requiera realizar un trámite o recibir un servicio de la entidad.
				       						<br> g. Vínculo (link en inglés). Apuntadores hipertexto que sirven para saltar de una información a otra, o de un servidor web a otro, cuando se navega por Internet.
				        					<br> 2. Aceptación de Términos 
				        					<br> Se presume que cuando un usuario accede al sitio Web lo hace bajo su total responsabilidad y que, por tanto, acepta plenamente y sin reservas el contenido de los términos y condiciones de uso del sitio Web. Camaleón LATAM se reserva, en todos los sentidos, el derecho de actualizar y modificar en cualquier momento y de cualquier forma, de manera unilateral y sin previo aviso, las presentes condiciones de uso, políticas de privacidad y los contenidos de la página.
				        					<br> 3. Contenidos del Sitio Web.
				        					<br> El sitio Web tiene por finalidad brindar al usuario todo tipo de información relacionada con los Servicios y Productos que ofrece Camaleón LATAM . En ningún caso esta información deberá considerarse como exhaustiva, completa o que de cualquier forma satisfaga todas las necesidades del Usuario.
				        					<br> La prestación del servicio del Sitio Web es de carácter libre y gratuito para los usuarios.  
				        					<br> Queda expresamente prohibido el uso del Sitio Web que de cualquier forma sobrecarguen, dañen o inutilice las redes, servidores y demás equipos informáticos o productos y aplicaciones informáticas de Camaleón LATAM  o de terceros. Camaleón LATAM no se hace responsable del servicio ininterrumpido o libre de error de la página. Camaleón LATAM  hace sus mejores esfuerzos para que el contenido suministrado sea de óptima calidad, y en tal sentido el Usuario acepta utilizar el servicio.
				        					<br> El Usuario no puede emplear los contenidos y, en particular, la información de cualquier otra clase obtenida a través de Camaleón LATAM  o de los servicios, para emitir publicidad.
				        					<br> El Usuario del Sitio Web no alterará, bloqueará o realizará cualquier otro acto que impida mostrar o acceder a cualquier contenido, información o servicios del Sitio Web.
				        					<br> 4. Privacidad 
				        					<br> Se entiende por información personal aquella suministrada por el Usuario para el registro, la cual incluye datos como nombre, identificación, edad, género, correo electrónico y teléfono. El almacenamiento, y uso de la información personal se rige por las Políticas de Privacidad del Sitio Web.
									   	</div>
								    </div>
								</div>
								<div class="modal-footer">
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
						      	</div>
					      	</form>
				    	</div>
				  	</div>
				</div>
	<!-- FIN Modal terminos y condiciones -->

</body>
</html>

<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script type="text/javascript">

	$('#myModal').on('shown.bs.modal', function () {
	  	$('#myInput').trigger('focus')
	});

	$("#formulario1").on("submit", function(e){
		e.preventDefault();
		var f = $(this);
		var nombres = $('#nombres').val();
		var apellidos = $('#apellidos').val();
		var pais = $('#pais').val();
		var ciudad = $('#ciudad').val();
		var documento_tipo = $('#documento_tipo').val();
		var documento_numero = $('#documento_numero').val();
		var edad = $('#edad').val();

		//var experiencia = $('input[name="experiencia"]:checked').val();
		var experiencia = $("#experiencia").val();

		var numero_contacto = $('#numero_contacto').val();
		var numero_contacto2 = $('#numero_contacto2').val();
		var correo = $('#correo').val();
		
		if(numero_contacto!=numero_contacto2){
			Swal.fire({
				title: 'Validad Numeros de Contactos',
				text: "Numero de contactos Diferentes",
				icon: 'error',
				position: 'center',
				showConfirmButton: false,
				timer: 3000
			});
			return false;	
		}

		$.ajax({
	        url: 'script/form1.php',
	        type: 'POST',
	        dataType: "JSON",
	        data: {
				"nombres": nombres,
				"apellidos": apellidos,
				"pais": pais,
				"ciudad": ciudad,
				"documento_tipo": documento_tipo,
				"documento_numero": documento_numero,
				"edad": edad,
				"experiencia": experiencia,
				"numero_contacto": numero_contacto,
				"numero_contacto2": numero_contacto2,
				"correo": correo,
				"condicion": "guardar1",
			},

	        beforeSend: function (){},

	        success: function(respuesta){
	        	console.log(respuesta);
	        	if(respuesta["estatus"]=="repetidos"){
	        		Swal.fire({
						title: 'Error',
						text: "Ya se ha registrado anteriormente!",
						icon: 'error',
						position: 'center',
						showConfirmButton: false,
						timer: 2000
					});	
	        	}else{
	        		Swal.fire({
						title: 'Perfecto!',
						text: "Se ha enviado tu información a nuestra Base de Datos",
						icon: 'success',
						position: 'center',
						showConfirmButton: false,
						timer: 2000
					});
					setTimeout(function() {
			      		window.location.href = "index.php";
			    	},3000);
	        	}
	        },

	        error: function(respuesta){
	           	console.log(respuesta['responseText']);
	        }
	    });
	});
</script>