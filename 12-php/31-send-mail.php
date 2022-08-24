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
    <span class="text-muted">Send Email</span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
<?php echo "<h1 class='mt-5 text-info text-center'> Send Email </h1>"?>

<main class="container">
<form action="" method="POST">
					<div class="mb-3">
						<input type="email" class="form-control" name="email" placeholder="Email">
					</div>
					<div class="mb-3">
						<input type="text" class="form-control" name="subject" placeholder="Subject">
					</div>
					<div class="mb-3">
						<textarea name="message" rows="4" class="form-control" placeholder="Message"></textarea>
					</div>
					<div class="mb-3">
						<input type="submit" value="Send" class="btn btn-outline-success">
						<input type="reset" value="Clear Form" class="btn btn-outline-secondary">
					</div>
				</form>
				<?php 
					if ($_POST) {
						$email   = $_POST['email'];
						$subject = $_POST['subject'];
						$message = $_POST['message'];
				?>
				<?php if (mail('barondavid103@gmail.com', "Subject: $subject", "Message: $message", "From: $email")): ?>
					<div class="alert alert-success">
						The email has been sent successfully!
					</div>
				<?php else: ?>
					<div class="alert alert-danger">
						The email could not be sent!
					</div>
				<?php endif ?>
				<?php } ?>

</main>

    <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.6.0.min.js"></script>
   <script src="js/bootstrap.min.js.map"></script>
</body>
</html>