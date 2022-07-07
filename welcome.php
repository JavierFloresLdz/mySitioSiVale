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
            background-color: yellow;
            font-size: 16px;
            color: black;
            border-color: black;
            border: 10px;
            margin: auto;
            border-bottom-color: red;
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
                        <a href="welcome.php" class="logo" style="color: yellow;">
                            MySitio Sí Vale
                        </a>
                        <ul class="nav">
                            <li class="submenu">
                                <a href="javascript:;" style="color: yellow;">My portafolio</a>
                                <ul>
                                    <li><a href="https://awos-saberu1.000webhostapp.com/" target="_blank">SABER</a></li>
                                    <li><a href="https://awos-shu1.000webhostapp.com/" target="_blank">SABER HACER #1</a></li>
                                    <li><a href="https://awos-sh2u1.000webhostapp.com/" target="_blank">SABER HACER #2</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="welcome.php" class="active" style="color: yellow;">My Sitio SiVale</a></li>
                            <li class="scroll-to-section"><a href="logout.php" style="color: yellow;">Cerrar sesión</a></li>
                            <li class="scroll-to-section"><a href="eliminarcuenta.php" style="color: yellow;">Eliminar cuenta</a></li>
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
                        <h3 class="text-center" style="color: yellow; font-size: 35px;">Bienvenido</h3>
                        <br>
                        <?php
                        echo "<h1>";
                        echo $_SESSION['celular'];
                        echo "</h1>";
                        echo "<br>";
                        ?>
                        <br>
                        <h3 class="text-center" style="color: black;">Datos del usuario</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="table">
        <?php
        echo "<section>";
        $celular = $_POST['celular'] = $_SESSION['celular'];
        require_once 'conexion.php';
        $conexion = new conexion();
        $query = $conexion->prepare('SELECT * FROM users WHERE celular=:celular');
        $query->bindParam(':celular', $celular);
        $query->execute();
        $count = $query->rowCount();
        if ($count) {
            $row = $query->fetch(PDO::FETCH_ASSOC);
            echo "<table border='3'>";
            echo "<tr><td>NOMBRE</td><td>EMAIL</td><td>CONTRASEÑA</td><td>GENERO</td><td>FECHA DE NACIMIENTO</td><td>ENTIDAD</td><td>CELULAR</td></tr>";
            echo "<tr><td>" . $row['nombre'] . "</td><td>" . $row['email'] . "</td><td>" . $row['psw'] . "</td><td>" . $row['genero'] . "</td><td>" . $row['fecha'] . "</td><td>" . $row['entidad'] . "</td><td>" . $row['celular'] . "</td></tr>";
            echo "<tr><td>" . "</td><td>" . '<a href="actualizanombre.php"><input type="button" value="Actualizar Email"></a>' . "</td><td>" . '<a href="actualizacontrasena.php"><input type="button" value="Actualizar contraseña"></a>' . "</td><td>" . "</td><td>" . "</td><td>" . '<a href="actualizaentidad.php"><input type="button" value="Actualizar entidad"></a>' . "<td>" . '<a href="actualizacelular.php"><input type="button" value="Actualizar celular"></a>' . "</td></tr>";
            $i = 1;
        }
        echo "</table>";
        echo "</section>";
        ?>
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