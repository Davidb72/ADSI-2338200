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
        .coq {
          width: 300px;
          margin: 0 auto;
        }
    </style>
</head>
<body class="bg-dark">
    <div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <a class="nav-link text-light fs-2" href="index.php">Menu-Themes</a>
    <span class="text-muted">Challenge Dates</span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
<?php echo "<h1 class='mt-5 text-info text-center'> Challenge Dates </h1>"?>

<main class="container">
<div class="col-md-6 offset-3 text-center">
                <form action="" action="GET">
                <label for="name" class="form-label text-light"> Enter your born date:</label>
                  <br>
                <input type="date" class="form-control" name="age" id="age" required>
                  <br>
                  <input type="submit" class="btn btn-success" value="Calculate Age">
                </form>
                
                    <BR>
                    <div class="alert alert-success">
                      <strong>Your age is:    </strong> 
                      <?php 

                          # code...
                          $fecha_nacimiento = new DateTime($_GET['age']);
                          $hoy = new DateTime();
                          $edad = $hoy->diff($fecha_nacimiento);

                          echo $edad->y;
                      ?>
                      <br>
                    </div>
                    </BR>
            </div>
        </div>

</main>

    <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.6.0.min.js"></script>
   <script src="js/bootstrap.min.js.map"></script>
</body>
</html>