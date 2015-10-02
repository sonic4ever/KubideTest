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
					public $quince = 'Miau';
				}
				$totalAlumnos=100;
				$palabras = new palabra();
				//Solución (B)
				for ($numAlumnos=1;$numAlumnos<=$totalAlumnos;$numAlumnos++){
					echo '<li>';
					if ($numAlumnos%3==0){
						if ($numAlumnos%5==0){
							echo $palabras->quince;
						}else{
							echo $palabras->tres;
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