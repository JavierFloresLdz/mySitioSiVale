<?php
session_start();
require_once 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/images/logo.png" />
    <title>My Sitio Sí Vale</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-breezed.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <style>
        table {
            text-align: center;
            font-size: 16px;
            color: black;
            border-color: black;
            border: 10px;
            margin: auto;
        }
    </style>
</head>

<body>
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="index.php" class="logo" style="color: yellow;">
                            MySitio Sí Vale
                        </a>
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active" style="color: yellow;">Inicio</a></li>
                            <li class="submenu">
                                <a href="javascript:;" style="color: yellow;">My portafolio</a>
                                <ul>
                                    <li><a href="https://awos-saberu1.000webhostapp.com/" target="_blank">SABER</a></li>
                                    <li><a href="https://awos-shu1.000webhostapp.com/" target="_blank">SABER HACER #1</a></li>
                                    <li><a href="https://awos-sh2u1.000webhostapp.com/" target="_blank">SABER HACER #2</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="mysitio.php" style="color: yellow;">My Sitio SiVale</a></li>
                            <li class="scroll-to-section"><a href="tarjetahabientes.php" style="color: yellow;">Tarjeta Habientes</a></li>
                            <li class="scroll-to-section"><a href="recuperarcuenta.php" style="color: yellow;">Recuperar cuenta</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
            <div class="item">
                <div class="img-fill">
                    <img src="assets/images/fondo.png" alt="">
                    <div class="text-content">
                        <?php
                        if (isset($_POST['iniciar'])) {
                            $celular = $_POST['celular'];
                            $psw = $_POST['psw'];
                            $conexion = new conexion();
                            $query = $conexion->prepare('SELECT * from users WHERE celular=:celular AND psw=:psw AND estatus = 1');
                            $query->bindParam(':celular', $celular);
                            $query->bindParam(':psw', $psw);
                            $query->execute();
                            $count = $query->rowCount();
                            if ($count) {
                                $_SESSION['celular'] = $celular;
                                echo "<script>window.location='welcome.php'</script>";
                            } else {
                                echo "<h3 class = 'text-center' style='color: black; font-size: 35px;'>Verifica las claves de acceso.</h3>";
                                echo "<br><br><h3 class = 'text-center'><a href='mysitio.php' class = 'links'>Regresar</a></h3>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-2.1.0.min.js"></script>
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function() {
                selectedClass = $(this).attr("data-rel");
                $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("." + selectedClass).fadeOut();
                setTimeout(function() {
                    $("." + selectedClass).fadeIn();
                    $("#portfolio").fadeTo(50, 1);
                }, 500);
            });
        });
    </script>
</body>

</html>