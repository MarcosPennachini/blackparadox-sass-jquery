<?php ini_set('display_errors', 1) ?>
<!doctype html>
<html class="no-js" lang="es-AR">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="./dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./dist/css/main.css">
    <!-- Slider Slippry -->
    <link rel="stylesheet" href="./dist/css/slippry.css">

    <link rel="shortcut icon" href="./dist/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./dist/favicon.ico" type="image/x-icon">

    <title>Black Paradox</title>

</head>

<body>
    <header>
        <nav id="nav" class="py-2">
            <div class="container-fluid">
                <div class="row">
                    <!-- Logo -->
                    <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                        <a href="#" class="logo">
                            <img src="dist/images/logo.svg" alt="Logo Black Paradox">
                        </a>
                    </div>
                    <!-- Logo -->
                    <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 d-flex align-items-center justify-content-end">
                        <ul>
                            <li class="px-2 link-active">
                                <a href="#">Inicio</a>
                            </li>
                            <li class="px-2">
                                <a href="#nosotros">Nosotros</a>
                            </li>
                            <li class="px-2">
                                <a href="#" id="portfolioLink">Portfolio</a>
                            </li>
                            <li class="px-2">
                                <a href="#">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

    </header>

    <div id="render">
        <section id="slider">
            <ul id="slippry">
                <li>
                    <img src="dist/images/slide_01.jpg" alt="Slide de slippry">
                </li>
                <li>
                    <img src="dist/images/slide_02.jpg" alt="Slide de slippry">
                </li>
                <li>
                    <img src="dist/images/slide_03.jpg" alt="Slide de slippry">
                </li>
            </ul>
        </section>
    </div>

    <footer>

    </footer>

    <script src="./dist/js/jquery-3.6.0-min.js"></script>
    <script src="./dist/js/bootstrap.bundle.min.js"></script>
    <script src="./dist/js/slippry.min.js"></script>
    <script src="./dist/js/main-min.js"></script>

</body>

</html>