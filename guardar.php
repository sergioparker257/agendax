<html>
        <head>
		   <title> datos del producto    </title>
		    </head>
			<body>
			<?php
			include("conexion.php");
			$ma=$_POST['mat'];
		    $n=$_POST['nom'];
			$ap=$_POST['ap'];
			$am=$_POST['am'];
			$di=$_POST['di'];
			$tel=$_POST['te'];
			$sexx=$_POST['sex'];
			$fec=$_POST['fe'];
			echo "<fieldset>";
			echo "<legend> datos del producto </legend>";
			echo "MATRICULA: ". $ma. "<p>";
			echo "NOMBRE: ". $n. "<p>";
			echo "APELLIDO_P: ". $ap. "<p>";
			echo "APELLIDO_M: ". $am. "<p>";
			echo "DIRECCION: ". $di. "<p>";
			echo "TELEFONO: ". $tel. "<p>";
			echo "SEXO: ". $sexx. "<p>";
			echo "FECHA_NACIMIENTO: ". $fec. "<p>";
			echo  "</fieldset>";
			$link=conectarse();
			$sql="INSERT INTO alumnos(Matricula, Nombre, Apellido_p, Apellido_m, Direccion, Telefono, Sexo, Fecha_Nacimiento) VALUES('$ma', '$n', '$ap' , '$am', '$di', '$tel', '$sexx', '$fec')";
			$result=mysqli_query($link ,$sql);
			echo "LA INFORMACION HA SIDO GUARDADA  EN LA BASE DE DATOS " ;
           mysqli_close($link);
			
			?>
			<p>
			<a href="/movisa/index.html"> REGRESAR AL MENU PRICIPAL</a>
			
			</body>
</html>