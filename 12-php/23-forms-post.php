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
    <span class="text-muted">Forms Post</span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
<?php echo "<h1 class='mt-5 text-info text-center'> Forms Post </h1>"?>

<main class="container">

        <div class="container ">
            <div class="col-md-6 offset-3 text-center">
                <form action="" method="POST">
          <div class="mb-3">
            <label for="name" class="form-label">Full Name:</label>
            <input type="text" class="form-control 
            <?php if(empty($_POST['name'])): ?>is-invalid<?php endif ?> "    
            name="name" id="name">
            <div class="invalid-feedback">
              Please enter a Name
            </div>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control
            <?php if(empty($_POST['email'])): ?>is-invalid<?php endif ?> " 
              name="email" id="email">
            <div class="invalid-feedback">
            <div class="alert alert-danger" role="alert">
            Ingrese Gmail Please!<a href="#" class="alert-link"></a> 
</div>
            </div>
          </div>
          <div class="mb-3">
            <input type="submit" class="btn btn-success" value="Send Form">
            <input type="reset" class="btn btn-light" value="Clear Form">
          </div>
        </form>
        <?php if(!empty($_POST['name']) && !empty($_POST['email'])): ?>
          <?php if ($_POST): ?>
            <div class="alert alert-success">
              <strong>Full Name:</strong> <?php echo $_POST['name']; ?>
              <br>
              <strong>Email:</strong> <?php echo $_POST['email']; ?>
            </div>
            <?php endif ?>
          <?php endif ?>
            </div>
        </div>
</main>

    <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.6.0.min.js"></script>
   <script src="js/bootstrap.min.js.map"></script>
</body>
</html>