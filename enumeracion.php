<html>
	<head>
		<title>Enumeración de la clase</title>
	</head>
	<body>
		<h1>Listado de la clase</h1>
		<ol type="1">
			<?php 
				class palabra{
					public $tres = 'Foo';
					public $cinco = 'Bar!';
				}
				$totalAlumnos=100;
				$palabras = new palabra();
				//Solución (A)
				for ($numAlumnos=1;$numAlumnos<=$totalAlumnos;$numAlumnos++){
					echo '<li>';
					if ($numAlumnos%3==0){
						echo $palabras->tres;
						if ($numAlumnos%5==0){
							echo $palabras->cinco;
						}
					}else{
						if ($numAlumnos%5==0){
							echo $palabras->cinco;
						}else{
							echo $numAlumnos;
						}
					}
					echo '</li>';
				}
			?>
		</ol>
	</body>
</html>