<html>
	<head>
		<title>Enumeración de la clase</title>
	</head>
	<body>
		<h1>Listado de la clase</h1>
		<ol type="1">
			<?php 
				for ($numAlumnos=1;$numAlumnos<=100;$numAlumnos++){
					echo '<li>'.$numAlumnos.'</li>';
				}
			?>
		</ol>
	</body>
</html>