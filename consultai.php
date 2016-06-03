<html>
	<head>
		<title>consulta particular de alumnos</title>
	</head>
	<body>
		<?php
			include("conexion.php"); 
			$cl=$_POST['mat'];
			 $link=conectarse();
			 $result=mysqli_query($link, "select * from alumnos where Matricula='$cl'");
			?>
			<fieldset><legend>reporte de alumno</legend>
			<?php
			while($fila=mysqli_fetch_array($result)){
				echo "MATRICULA DEL ALUMNO: ".$fila['Matricula'];
				echo "<br>";
				echo "NOMBRE: ".$fila['Nombre'];
				echo "<br>";
				echo "APELLIDO PATERNO: ".$fila['Apellido_p'];
				echo "<br>";
				echo "APELLIDO MATERNO: ".$fila['Apellido_m'];
				echo "<br>";
				echo "DIRECCION: ".$fila['Direccion'];
				echo "<br>";
				echo "TELEFONO: ".$fila['Telefono'];
				echo "<br>";
				echo "SEXO: ".$fila['Sexo'];
				echo "<br>";
				echo "FECHA DE NACIMIENTO: ".$fila['Fecha_Nacimiento'];
			}
			?>
			</fieldset>
			<?php
				mysqli_close($link);
		?>
					<p>
			<a href="/movisa/index.html"> REGRESAR AL MENU PRICIPAL</a>
	</body>
</html>