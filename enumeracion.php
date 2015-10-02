<html>
	<head>
		<title>Enumeracion de la clase</title>
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
				for ($numAlumnos=1;$numAlumnos<=$totalAlumnos;$numAlumnos++){
					echo '<li>';
					if (($numAlumnos%3!=0)&($numAlumnos%5!=0)){
						echo $numAlumnos;
					}
					if ($numAlumnos%3==0){
						echo $palabras->tres;
					}
					if ($numAlumnos%5==0){
						echo $palabras->cinco;
					}
					echo '</li>';
				}
			?>
		</ol>
	</body>
</html>