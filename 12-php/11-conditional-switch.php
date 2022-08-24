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
    <span class="text-muted">Conditional Switch</span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>
<main>
        <div class="container ">
            <div class="col-md-6 offset-3 text-center">
            <?php echo "<h1 class='mt-5 text-info text-center'> HELLO WORLD! </h1>"?>
                <?php
                    $day = date('n');
                    switch ($day) {
                      case 1:
                        echo '<ul class="list-group">
                              <li class="list-group-item list-group-item-secondary">First Trimester</li>
                              <li class="list-group-item ">January</li>
                              <li class="list-group-item">February</li>
                              <li class="list-group-item">March</li>
                            </ul>';
                        break;
                      case 2:
                        echo '<ul class="list-group">
                              <li class="list-group-item list-group-item-secondary">First Trimester</li>
                              <li class="list-group-item">January</li>
                              <li class="list-group-item ">February</li>
                              <li class="list-group-item">March</li>
                            </ul>';
                        break;
                      case 3:
                        echo '<ul class="list-group">
                              <li class="list-group-item list-group-item-secondary">First Trimester</li>
                              <li class="list-group-item">January</li>
                              <li class="list-group-item">February</li>
                              <li class="list-group-item ">March</li>
                            </ul>';
                        break;
                      case 4:
                        echo '<ul class="list-group">
                                <li class="list-group-item list-group-item-secondary">Second Trimester</li>
                                <li class="list-group-item ">April</li>
                                <li class="list-group-item">May</li>
                                <li class="list-group-item">June</li>
                              </ul>';
                        break;
                      case 5:
                        echo '<ul class="list-group">
                                  <li class="list-group-item list-group-item-secondary">Second Trimester</li>
                                  <li class="list-group-item">April</li>
                                  <li class="list-group-item ">May</li>
                                  <li class="list-group-item">June</li>
                                </ul>';
                        break;        
                      case 6:
                        echo '<ul class="list-group">
                                  <li class="list-group-item list-group-item-secondary">Second Trimester</li>
                                  <li class="list-group-item">April</li>
                                  <li class="list-group-item">May</li>
                                  <li class="list-group-item ">June</li>
                                </ul>';
                        break;
                      case 7:
                        echo '<ul class="list-group">
                              <li class="list-group-item list-group-item-secondary">Third Trimester</li>
                              <li class="list-group-item ">July</li>
                              <li class="list-group-item">Agust</li>
                              <li class="list-group-item">September</li>
                            </ul>';
                        break;  
                      case 8:
                        echo '<ul class="list-group">
                              <li class="list-group-item list-group-item-secondary">Third Trimester</li>
                              <li class="list-group-item">July</li>
                              <li class="list-group-item ">Agust</li>
                              <li class="list-group-item">September</li>
                            </ul>';
                        break;
                      case 9:
                        echo '<ul class="list-group">
                            <li class="list-group-item list-group-item-secondary">Third Trimester</li>
                            <li class="list-group-item">July</li>
                            <li class="list-group-item">Agust</li>
                            <li class="list-group-item ">September</li>
                          </ul>';
                        break;
                      default:
                        echo '<ul class="list-group">
                            <li class="list-group-item list-group-item-secondary">Fourth Trimester</li>
                            <li class="list-group-item ">Final de >Año</li>
                          </ul>';
                        break;
                    }
                ?>
            </div>
        </div>
    </main>




    <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.6.0.min.js"></script>
   <script src="js/bootstrap.min.js.map"></script>
</body>
</html>