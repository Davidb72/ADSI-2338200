<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Menu" ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="img/download-icon-command+develop+language+php+programming+software+icon-1320165727581845211_512.png">
    <style>

        main {
          display: flex;
        }

        .container {
            text-align: center;
            justify-content: center;
        }
        nav {
            border-bottom: 3px solid #00B9FF;
        }
        body::-webkit-scrollbar {
          width: 10px;     /* Tamaño del scroll en vertical */
          height: 3px;    /* Tamaño del scroll en horizontal */
          /* display: none;  Ocultar scroll */
        }
        /* Ponemos un color de fondo y redondeamos las esquinas del thumb */
        body::-webkit-scrollbar-thumb {
            background: #272727;
            border-radius: 4px;
        }

        /* Cambiamos el fondo y agregamos una sombra cuando esté en hover */
        body::-webkit-scrollbar-thumb:hover {
            background: #272727;
            box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2);
        }

        /* Cambiamos el fondo cuando esté en active */
        body::-webkit-scrollbar-thumb:active {
            background-color: #272727;
        }
        /* Ponemos un color de fondo y redondeamos las esquinas del track */
        body::-webkit-scrollbar-track {
            background: black;
            border-radius: 6px;
        }

        /* Cambiamos el fondo cuando esté en active o hover */
        body::-webkit-scrollbar-track:hover,
        body::-webkit-scrollbar-track:active {
          background: black;
        }
    </style>
</head>
<body class="p-3 mb-2 bg-dark text-white col-md-6 offset-3">
<nav class="navbar navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" >PHP/ Bootstrap</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel fw-bold">PHP/ Bootstrap</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://github.com/Davidb72/ADSI-2338200">GitHub</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Information
            </a>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item">David Baron Herreño</a></li>
              <!-- <li><a class="dropdown-item" href="#">Another action</a></li> -->
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item d-flex justify-content-between">Contact <span>89541</span></a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>
<main>
        <div class="container">
            <div class="col-md-6 offset-3 text-center ">
                <?php echo "<h1 class='mt-5 p-3 mb-2 text-info rounded-pill fw-bold'> Main Menu (PHP) </h1>"?>

                <div class="btn-group-vertical text-center rounded-2" role="group" aria-label="Vertical button group" style="width: 26rem;">
                    <a href="./01-hello-world.php" class="btn btn-outline-info text-start text-white">1. Hello World</a>
                    <a href="./02-info.php" class="btn btn-outline-info text-start text-white">2. Info</a>
                    <a href="./03-comments.php" class="btn btn-outline-info text-start text-white">3. Comments</a>
                    <a href="./04-variables.php" class="btn btn-outline-info text-start text-white">4. Variables</a>
                    <a href="./05-strings.php" class="btn btn-outline-info text-start text-white">5. String</a>
                    <a href="./06-oper-arithmetics.php" class="btn btn-outline-info text-start text-white">6. Oper Arithmetics</a>
                    <a href="./07-oper-assignment.php" class="btn btn-outline-info text-start text-white">7. Oper Assignmetics</a>
                    <a href="./08-oper-comparison.php" class="btn btn-outline-info text-start text-white">8. Oper Comparison</a>
                    <a href="./09-oper-logics.php" class="btn btn-outline-info text-start text-white">9. Oper Logics</a>
                    <a href="./10-conditional-if.php" class="btn btn-outline-info text-start text-white">10. Conditionals (IF)</a>
                    <a href="./11-conditional-switch.php" class="btn btn-outline-info text-start text-white">11. Conditionals (Switch)</a>
                    <a href="./12-arrays-index-numeric.php" class="btn btn-outline-info text-start text-white">12. Arrays index Numeric</a>
                    <a href="./13-arrays-associative.php" class="btn btn-outline-info text-start text-white">13. Arrays Associative</a>
                    <a href="./14-arrays-multi.php" class="btn btn-outline-info text-start text-white">14. Arrays Multi</a>
                    <a href="./15-loop-while.php" class="btn btn-outline-info text-start text-white">15. Loop (While)</a>
                    <a href="./16-loop-dowhile.php" class="btn btn-outline-info text-start text-white">16. Loop (DoWHile)</a>
                    <a href="./17-loop-for.php" class="btn btn-outline-info text-start text-white">17. Loop (For)</a>
                    <a href="./18-loop-foreach.php" class="btn btn-outline-info text-start text-white">18. Loop (ForEach)</a>
                    <a href="./19-functions.php" class="btn btn-outline-info text-start text-white">19. Functions</a>
                    <a href="./20-functions-params.php" class="btn btn-outline-info text-start text-white">20. Functions Params</a>
                    <a href="./21-functions-return.php" class="btn btn-outline-info text-start text-white">21. Functions Return</a>
                    <a href="./22-forms-get.php" class="btn btn-outline-info text-start text-white">22. Forms Get</a>
                    <a href="./23-forms-post.php" class="btn btn-outline-info text-start text-white">23. Forms Post</a>
                    <a href="./24-date-time.php" class="btn btn-outline-info text-start text-white">24. Date Time</a>
                    <a href="./25-challenge-dates.php" class="btn btn-outline-info text-start text-white">25. Challengue Dates</a>
                    <a href="./26-ssi.php" class="btn btn-outline-info text-start text-white">26. Ssi</a>
                    <a href="./27-file-text.php" class="btn btn-outline-info text-start text-white">27. File Text</a>
                    <a href="./28-upload-files.php" class="btn btn-outline-info text-start text-white">28. Unload Files</a>
                    <a href="./29-cookies.php" class="btn btn-outline-info text-start text-white">29. Cookies</a>
                    <a href="./30-sesiones.php" class="btn btn-outline-info text-start text-white">30. Sesiones</a>
                    <a href="./31-send-mail.php" class="btn btn-outline-info text-start text-white">31. Send Mail</a>
                    <a href="./32-exceptions.php" class="btn btn-outline-info text-start text-white">32. Exceptions</a>
                    <a href="./33-filters.php" class="btn btn-outline-info text-start text-white">33. Filters</a>
                </div>
            </div>
        </div>
    </main>




    <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.6.0.min.js"></script>
   <script src="js/bootstrap.min.js.map"></script>
</body>
</html>