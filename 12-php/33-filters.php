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
    <span class="text-muted">Filters</span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
<?php echo "<h1 class='mt-5 text-info text-center'> Filters </h1>"?>

<main class="container">
<form action="" method="POST">
					<div class="mb-3">
						<input type="number" class="form-control" name="age" placeholder="Enter you Age">
					</div>
					<div class="mb-3">
						<input type="email" class="form-control" name="email" placeholder="Enter your Email">
					</div>
					<div class="mb-3">
						<input type="url" class="form-control" name="url" placeholder="Enter your URL">
					</div>
					<div class="mb-3">
						<input type="submit" value="Apply Filters" class="btn btn-success">
					</div>
				</form>
				<?php 
					if ($_SERVER['REQUEST_METHOD'] == 'POST') {
						// AGE - - - - - - - - - - - - - - - - -
						$age = $_REQUEST['age'];
						$ops = array('options' => 
							   array('min_range' => 18, 
							   	     'max_range' => 23
							   	)
							);
						if (!filter_var($age, FILTER_VALIDATE_INT, $ops)) {
							echo '<div class="alert alert-danger">
									You Cannot Participate in WSI!
								  </div>';
						} else {
							echo '<div class="alert alert-success">
									You Can Participate in WSI!
								  </div>';
						}
						// EMAIL - - - - - - - - - - - - - - - - -
						if (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
							echo '<div class="alert alert-danger">
									The Email is not valid!
								  </div>';
						} else {
							echo '<div class="alert alert-success">
									The Email is valid!
								  </div>';
						}
						// URL - - - - - - - - - - - - - - - - -
						$url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
						echo '<div class="alert alert-success">
							The URL disinfected is: '.$url.'
							  </div>';
					}
				?>

</main>

    <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.6.0.min.js"></script>
   <script src="js/bootstrap.min.js.map"></script>
</body>
</html>