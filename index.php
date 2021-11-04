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



    <div style="height: 100px;"></div>
    <div class="container">
        <div class="row mt-3">
            <h3 class="text-center" id="title">Título</h3>
        </div>
        <!-- Botones -->
        <div class="row justify-content-center" id="rowButtons">
            <div class="col-sm-10 col-md-8 col-lg-6 col-xl-6 d-flex justify-content-between">
                <button class="btn btn-primary" id="btn1">Opcion 1</button>
                <button class="btn btn-info" id="btn2">Opcion 2</button>
                <button class="btn btn-dark" id="btn3">Opcion 3</button>
            </div>
        </div>
        <!-- Steps -->
        <div class="row justify-content-center my-2" id="stepsDraw" style="display: none;">
            <div class="col-md-8 col-lg-6 col-xl-6 d-flex justify-content-between align-items-center">
                <div class="rounded-circle" style="height: 40px; width: 40px; background-color:aquamarine" id="s1">1</div>
                <div class="rounded-circle bg-secondary" style="height: 40px; width: 40px;" id="s2">2</div>
                <div class="rounded-circle bg-secondary" style="height: 40px; width: 40px;" id="s3">3</div>
            </div>
        </div>
        <!-- Contenido de steps -->
        <div id="divTablas" class="my-3" style="display: none;">
            <div class="card border-light">
                <table class="bg-primary step" id="table" style="height: 100px;">
                </table>
                <table class="bg-danger step" id="table" style="height: 100px;">
                </table>
                <table class="bg-info step" id="table" style="height: 100px;">
                </table>
                <table class="bg-dark step" id="table" style="height: 100px;">
                </table>
                <table class="bg-warning step" id="table" style="height: 100px;">
                </table>
                <table class="bg-secondary step" id="table" style="height: 100px;">
                </table>
            </div>
        </div>
        <div id="formButtons" style="display: none;">
            <div class="row my-3">
                <div class="col-lg-12">
                    <button class="btn btn-secondary float-start" id="anterior">Anterior</button>
                    <button class="btn btn-info float-end" id="siguiente">Siguiente</button>
                </div>
            </div>
        </div>
    </div>
    <!-- <div id="render">
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
    </div> -->



    <footer>

    </footer>

    <script src="./dist/js/jquery-3.6.0-min.js"></script>
    <script src="./dist/js/bootstrap.bundle.min.js"></script>
    <script src="./dist/js/slippry.min.js"></script>
    <script src="./dist/js/main-min.js"></script>

</body>

</html>