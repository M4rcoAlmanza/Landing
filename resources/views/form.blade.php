<!-- 08/08/22
     Almanza Ibarra Marco Alejandro
-->

<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<!-- <link rel="stylesheet" type="text/css" href="styles.css"> -->
		<title>Formulario</title>
	</head>
	<body>
		
		<div id="General">
			<!-- <div class="nav">
				<h1>Marco_Almanza_Ibarra</h1>
				<ul>
					<a href="index.html"><li class="Menu">Página principal</li></a>
					<a href="#"><li class="Menu">Formulario</li></a>
				</ul>
			</div> -->
			<!-- Contenido de la página -->
			
			<div id="Contenedor">
				<div id="Contenido">
					<h1 id="titulo">CONTACTO</h1>
					<form method="POST" action="/formulario" id="formulario">
						<label id="nombre-label" for="nombre">
							Ingresa tu nombre: <input type="text" id="nombre" name="nombre" placeholder="{{old('nombre')}}" value = "{{ $nombre ?? '' }}" />
						</label><br>
						@csrf
						@error('nombre')
							<p>{{ $message }}</p>
						@enderror
        				<label id="email-label" for="email">
        						Ingresa tu email: <input type="email" id="correo" name="correo" placeholder="{{old('correo')}}" value = "{{ $correo ?? '' }}"  />
        				</label><br>
						@error('correo')
							<p>{{ $message }}</p>
						@enderror
						<label id="coment-label" for="comment">Algo que quieras añadir:
          					<input type="text" name="comentario" id="comentario" placeholder="{{old('comentario')}}" value = " {{ $comentario ?? '' }}" />
			  			</label><br>
						@error('comentario')
							<p>{{ $message }}</p>
						@enderror
        					<input type="submit" value="Enviar" id="enviar"/>
					</form>
					
					<div class="apartado"></div>
				</div>
				
			</div>
			
		</div>
		<div class="footer">
				<h6> Primer práctica  | Todos los derechos reservados</h6>
				<h6>-> Mis datos <-</h6>
				<h6>Correo: marco.almanza9346@alumnos.udg.mx</h6>
				<h6><a href="mailto:marco.almanza9346@alumnos.udg.mx" target="_blank">Enviar correo</a></h6>
		</div>
	</body>

</html>