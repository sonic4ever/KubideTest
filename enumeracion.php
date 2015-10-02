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
				$palabras = new palabra();
				for ($numAlumnos=1;$numAlumnos<=100;$numAlumnos++){
					if ($numAlumnos%3==0){
						echo '<li>'.$palabras->tres.'</li>';
					}else{
						if ($numAlumnos%5==0){
							echo '<li>'.$palabras->cinco.'</li>';
						}else{
								echo '<li>'.$numAlumnos.'</li>';
						}
					}					
				}
			?>
		</ol>
	</body>
</html>