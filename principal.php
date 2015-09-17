<!DOCTYPE html>
<html>
<head>
	<title>Ejercicio</title>

	<script src="js/jquery-1.11.3.js"></script>
</head>
<body>
<center>


<fieldset >

<legend><h3>Ingrese los datos del alumno</h3></legend>

				<form method="POST">

				

				<label><strong>Ingrese los nombres</strong></label>
				<input name="nombre" id="nombre"  required/><br>
				<label><strong>Ingrese los apellidos</strong></label>
				<input name="apellido" id="apellido" required/><br>
				<label><strong>Ingrese el valor inicial</strong></label>
				<input name="valor" id="valor" required/><br>


				<strong>Seleccione Grado </strong>
				<select id="grado" name="grado" required>
						
						<option value="">Seleccione Grado</option>
						<option value="primero">Primero</option>
						<option value="segundo">Segundo</option>

				</select>

				<div id="resultado" ></div>
				<div id="segundoresultado"></div>

				<div id="tercerresultado"></div>



				</form>

</fieldset>


		<script>
		 
		$("#grado").change(function() {
			var gradoVal = $("#grado").val();
			$.ajax({
				method: "POST",
				url: "ajax.php",
				data: { grado: gradoVal}
			})

			.done(function( msg ) {
				$("#resultado").html(msg);
			});
		});


		$("#resultado").change(function() {
			var gradoVal = $("#curso").val();
			$.ajax({
				method: "POST",
				url: "ajax.php",
				data: { curso: gradoVal}
			})

			.done(function( msg ) {
				$("#segundoresultado").html(msg);
			});
		});

		$("#segundoresultado").change(function() {
			var gradoVal = $("#materia").val();
			var nombre = $("#nombre").val();
			var apellido = $("#apellido").val();
			var valor= $("#valor").val();
			var grado2= $("#grado").val();

			$.ajax({
				method: "POST",
				url: "ajax.php",
				data: { materia: gradoVal,
						nombre: nombre,
						apellido: apellido,
						valor: valor,
						grado2: grado2



				}
			})

			.done(function( msg ) {
				$("#tercerresultado").html(msg);
			});
		});


		</script>




</body>
</html>