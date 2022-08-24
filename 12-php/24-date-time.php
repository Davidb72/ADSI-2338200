<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Menu Themes" ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/download-icon-command+develop+language+php+programming+software+icon-1320165727581845211_512.png">
    <style>
        .container {
            text-align: center;
        }
        nav {
            border-bottom: 3px solid #00B9FF;
        }
    </style>
</head>
<body class="bg-dark">
    <div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <a class="nav-link text-light fs-2" href="index.php">Menu-Themes</a>
    <span class="text-muted">Functions</span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
<?php echo "<h1 class='mt-5 text-info text-center'> Functions </h1>"?>

<main class="container">
<div class="jumbotron">
					<p class="lead text-center text-light">
						<strong>hora-minutos-segundos: </strong>
						<?php echo date('h:i:s') ?>
					</p>
					<p class="lead text-center text-light">
						<strong>dia-mes-año: </strong>
						<?php echo date('d-m-Y') ?>
					</p>
					<p class="lead text-center text-light">
						<strong>Nombre Dia: </strong>
						<?php echo date('l') ?>
					</p>
					<p class="lead text-center text-light">
						<strong>Año Completo: </strong>
						<?php echo date('Y') ?>
					</p>
					<p class="lead text-center text-light">
						<strong>Zona Horaria: </strong>
						<?php echo date('e') ?>
					</p>
					<p class="lead text-center text-light">
						<strong>Tiempo UNIX: </strong>
						<?php echo time() ?>
					</p>
				</div>
</main>

    <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.6.0.min.js"></script>
   <script src="js/bootstrap.min.js.map"></script>
</body>
</html>