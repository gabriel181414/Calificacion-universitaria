<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Home.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="icon" type="x-icon" href="jagran_logo1.jpg">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>College Wiskas</title>
</head>
</head>
<body>
	<nav style="background-color: black;" class="navbar sticky-top navbar-expand-sm navbar-black bg-black">
		<a class="navbar-brand" href="home.php">
    	<img src="jagran_logo1.jpg" width="30" height="30" class="d-inline-block align-top" alt=""> College Wiskas
  		</a>
  <!-- Links -->
  		<ul class="navbar-nav ml-auto">
    		<li class="nav-item active">
      			<a class="nav-link" href="home.php">Home</a>
    		</li>
    		<li class="nav-item">
      			<a class="nav-link" href="practice.php">Sobre Nosotros</a>
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
		<i class="fa fa-quote-left"></i><p>Las investigaciones muestran que hay sólo la mitad de variación en el rendimiento estudiantil entre escuelas que entre aulas de la misma escuela. Si desea que su hijo reciba la mejor educación posible, en realidad es más importante asignarlo a un gran maestro que a una gran escuela.</p>
	</div>
	<div class="background">
		<h2>College Predictor</h2><br>
		<form method="post" action="home.php">
			<div id="center">
				<input class="ip" type="text" name="board" placeholder="Porcentaje de la junta" required><br><br>
				<input class="ip" type="text" name="jee" placeholder="Puntuacion JEE" required><br><br>
				<input class="ip" type="text" name="bits" placeholder="Puntuacion BITS"><br><br>
				<input class="ip" type="text" name="srm" placeholder="Puntuacion SRMJEEE"><br><br>
				<input class="ip" type="text" name="vit" placeholder="Puntuacion VITEEE"><br><br>
				<input class="button" type="submit" name="submit" value="ENTREGAR">
			</div>
		</form>
	</div>
	<?php 
		function test_input($data)
			{
				$data=trim($data);
				$data=stripcslashes($data);
				$data=htmlspecialchars($data);
				return $data;
			}

			if(isset($_POST['submit']))
			{
				$username=$password="";
				if($_SERVER["REQUEST_METHOD"] == "POST")
				{
					$board = test_input($_POST['board']);
					$jee = test_input($_POST['jee']);
					$bits = test_input($_POST['bits']);
					$srm = test_input($_POST['srm']);
					$vit = test_input($_POST['vit']);

					echo "<div class='background'>";
					echo "<h2>Universidad prevista</h2>";
					if($board<60)
						echo "Las universidades no aceptarán tu solicitud";
					else
					{
						$avg = (($board*60) + ((($jee*100)/360)*40))/100;
						if($avg>87)
							echo "Eres elegible para postularte al Instituto Indio de Tecnología<br>";
						else if($avg>60)
							echo "Eres elegible para postularte al Instituto Nacional de Tecnología<br>";
						if($bits>280)
							echo "Usted es elegible para postularse para el Instituto Birla de Tecnología y Ciencia<br>";
						if($srm>140)
							echo "Usted es elegible para solicitar el Sri Ramaswamy Memorial<br>";
						if($vit>80)
							echo "Eres elegible para postularte para el Instituto de Tecnología Vellore<br>";
					}
					echo "</div>";
				}
			}
	?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>