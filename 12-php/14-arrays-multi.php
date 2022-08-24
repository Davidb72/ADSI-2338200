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
    <span class="text-muted">Arrays Multidimensional</span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
<?php echo "<h1 class='mt-5 text-info text-center'> Arrays Multidimensional </h1>"?>

<main class="container">
<?php 
					$bicycles = array(
						'Santa Cruz'  => array('Nomad', 'MegaTower', 'HighTower'),
						'Intense'     => array('Carbine', 'Tracer', 'Spider'),
						'Specialized' => array('Enduro', 'Stumjumper', 'Camber')
					);
					//var_dump($bicycles);
				?>
				<table class="table table-striped table-hover table-bordered">
					<?php foreach ($bicycles as $brand => $value): ?>
						<tr>
							<th class="bg-dark text-info"><?php echo $brand ?></th>
							<?php foreach ($value as $reference): ?>
								<td class="text-light"><?php echo $reference; ?></td>
							<?php endforeach ?>
						</tr>
					<?php endforeach ?>
				</table>
</main>




    <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.6.0.min.js"></script>
   <script src="js/bootstrap.min.js.map"></script>
</body>
</html>