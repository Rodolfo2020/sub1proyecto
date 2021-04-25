<!DOCTYPE html>
<html>
<head>
	<title>Pagina Principal</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" href="css/navbar.css">
	<style type="text/css">
	</style>
</head>
<body>
	<aside>
		<section>
		<?php
    $navbar = str_replace('>Inicio</a>',' class="active">Inicio</a>',file_get_contents('views\navbar.php'));
    echo $navbar;
    ?>
	</section>
	</aside>
	  <section id="logo">
            	<center>
            	<br>
            	<img src= "img/Ecologia.jpg" title="Logo" width="300px" height="200";>
            	</br>
            </center>
            </section>
   <header>
   <center class="testbox">
		<h1 style="color:blue;">Que es la ecología?</h1>
	</center>
	<article>
		<center class="cuadro1">	
			<p>La ecología es una rama de la biología en la que se estudian y analizan las interacciones entre los seres vivos con el hábitat donde se encuentran, es decir,
			    las relaciones que existen entre los factores bióticos (relaciones entre seres vivos) y los factores abióticos (condiciones ambientales).
			    <br>
				Etimológicamente, la palabra ecología deriva del griego ökologie compuesta de la unión de los vocablos griegos oikos, que significa ‘casa’, ‘hogar’ o ‘vivienda’, y logos, que significa ‘estudio’ o ‘tratado’. 
				En este sentido, ecología significa ‘el estudio del hogar’.
                <br>
				Fue Ernst Haeckel, científico alemán, quien creó el término ecología en el año 1869 con el fin de designar un nombre a la ciencia que estudia las relaciones entre los seres vivos y el medio ambiente.
		</center>
		<center>
			    
		<br><br>
		<img src="img/ErnstHaeckel.jpg" title="Ernst Haeckel" width="200px" height="300";>
	     </center>
		</article>
</body>
</html>