<?php session_start(); ?>
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
    <span class="text-muted">Sessiones</span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
<?php echo "<h1 class='mt-5 text-info text-center'> Sessiones </h1>"?>

<main class="container">
<div class="mt-4 p-5 bg-dark text-white rounded">
					<?php 
						if ($_POST) {
							unset($_SESSION['visits']);
							session_destroy();
						}	
					?>

					<?php if (isset($_SESSION['visits'])): ?>
						<?php $_SESSION['visits']++; ?>
					<?php else: ?>
						<?php $_SESSION['visits'] = 1; ?>
					<?php endif ?>
					<p class="lead">
						<strong>
							You have visited this page: 
						</strong>
						<?php echo $_SESSION['visits']; ?> times
					</p>
					<form action="" method="POST">
						<input type="submit" value="Close Session" class="btn btn-danger" name="delete">
					</form>
				</div>

</main>

    <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.6.0.min.js"></script>
   <script src="js/bootstrap.min.js.map"></script>
</body>
</html>