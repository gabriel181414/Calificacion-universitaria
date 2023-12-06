<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="practice.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="icon" type="x-icon" href="jagran_logo1.jpg">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>College Wiskas</title>
</head>
<body>
	<nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark">
		<a class="navbar-brand" href="Home.php">
    	<img src="jagran_logo1.jpg" width="30" height="30" class="d-inline-block align-top" alt=""> College Wiskas
  		</a>
  <!-- Links -->
  		<ul class="navbar-nav ml-auto">
    		<li class="nav-item">
      			<a class="nav-link" href="Home.php">Home</a>
    		</li>
    		<li class="nav-item active">
      			<a class="nav-link" href="pratice.php">Sobre Nosotros</a>
    		</li>
    		<li class="nav-item">
      			<a class="nav-link" href="login.php">No <?php
      			if(isset($_SESSION['username']))
      				{
      					echo $_SESSION['username'];
      				}
      			?>? Cerrar Sesion</a>
    		</li>
  		</ul>
	</nav>

	<div class="background">
		<i class="fa fa-quote-left"></i><p>Nada en este mundo puede reemplazar la perseverancia. El talento no lo hará: nada es más común que hombres fracasados ​​y con talento. El genio no lo hará; El genio no recompensado es casi un proverbio. La educación no lo hará: el mundo está lleno de marginados educados. La persistencia y la determinación son omnipotentes.</p>
	</div>
	<div class="background">
		<h2>Sobre Nosotros</h2>
		<p>CollegeWiskas.com es una solución integral que facilita la selección de cursos y universidades para los estudiantes que buscan realizar cursos de pregrado (UG) y posgrado (PG) en la India y en el extranjero; también accesible para los usuarios en movimiento a través del sitio móvil del sitio web. Lanzado en 2008, CollegeShiksha.com pertenece a Info Edge (India) Ltd, propietaria de marcas establecidas como Naukri.com, 99acres.com, Jeevansathi.com, entre varias otras. Con este sólido pedigrí de marca, CollegeShiksha ofrece a sus usuarios el privilegio único de herramientas personalizadas como Estadísticas de empleo de ex alumnos que incluyen datos salariales impulsados ​​por Naukri.com.</p>

		<p>Nuestro sitio web es un depósito de información confiable y auténtica de más de 14.000 instituciones, más de 40.000 cursos y tiene una base de datos registrada de más de 3,5 millones de estudiantes. Ofrecemos información específica para estudiantes interesados ​​en cursos UG/PG en la India (Collegeshiksha.com) y en el extranjero (studyabroad.Collegeshiksha.com) en las corrientes educativas más populares: Gestión; Ciencia e Ingeniería; Banca y Finanzas; Tecnologías de la información; Animación, VFX, Juegos y Cómics; Hotelería, Aviación y Turismo; Medios, películas y comunicación de masas; Diseño; Medicina, Belleza y Atención Médica; Minorista; Artes, Derecho, Idiomas y Enseñanza; y preparación de exámenes.</p>

		<p>Quienes buscan educación obtienen una experiencia personalizada en nuestro sitio, basada en sus antecedentes educativos y sus intereses profesionales, lo que les permite tomar decisiones bien informadas sobre cursos y universidades. La toma de decisiones se potencia con un fácil acceso a información detallada sobre opciones de carrera, cursos, exámenes, universidades, criterios de admisión, elegibilidad, tarifas, estadísticas de colocación, clasificaciones, reseñas, becas, últimas actualizaciones, etc., así como mediante la interacción con otros CollegeShiksha.com. usuarios, expertos, estudiantes actuales de universidades y grupos de exalumnos. Hemos introducido varios productos y herramientas orientados a los estudiantes, como Career Central, formulario de solicitud común, mejores universidades, comparación de universidades, estadísticas de empleo de ex alumnos, Campus Connect, reseñas de universidades, predictores de universidades, MyShortlist y College Shiksha Café.</p>

		<p>Nuestra comunidad activa de preguntas y respuestas llamada College Shiksha Café cuenta con más de 1000 expertos que responden consultas relacionadas con carreras y universidades. Los estudiantes pueden hacer preguntas, participar en debates y mantenerse actualizados con las últimas noticias y artículos relacionados con sus intereses educativos. CollegeShiksha.com es el portal universitario más inteligente de la India que combina conocimientos de dominios relacionados con la educación superior con tecnología, innovación y credibilidad para brindar a los estudiantes información personalizada para tomar decisiones informadas sobre carreras, cursos y universidades.</p>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>
