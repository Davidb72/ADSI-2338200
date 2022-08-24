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
            width: 550px;
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
    <span class="text-muted">Upload Files</span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
<?php echo "<h1 class='mt-5 text-info text-center'> Upload Files </h1>"?>

<main class="container">
<form action="" method="POST" enctype="multipart/form-data">
					<div class="mb-3">
						<input type="file" class="form-control" name="photo" accept="image/*">
					</div>
					<div class="mb-3">
						<button class="btn btn-success" type="submit"> Upload Photo </button>
					</div>
				</form>
				<?php if ($_FILES): ?>
					<?php if ($_FILES['photo']['error'] > 0): ?>
						<div class="alert alert-danger">
							<strong>Error:</strong> You must select an image.
						</div>
					<?php else: ?>
						<?php move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/'.$_FILES['photo']['name']) ?>
						<div class="alert alert-success">
							<strong>
								File has been uploaded successfully!
							</strong>
							<li>
								<?php echo $_FILES['photo']['name'] ?>
							</li>
							<li>
								<?php echo $_FILES['photo']['type'] ?>
							</li>
							<li>
								<?php echo round($_FILES['photo']['size'] / 1024) ?> KB
							</li>
						</div>	
					<?php endif ?>
				<?php endif ?>

</main>
<script>
        $(document).ready(function () {
            $('.btn-upload').click(function() {
                $('#photo').click();
            });
            $('#photo').change(function(event) {
                let reader = new FileReader()
                reader.onload = function(event) {
                    $('#preview').attr('src', event.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            })
        });
    </script>

    <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.6.0.min.js"></script>
   <script src="js/bootstrap.min.js.map"></script>
</body>
</html>