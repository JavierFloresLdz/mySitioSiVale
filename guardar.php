<?php
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
    <link rel="icon" href="assets/images/logo1.png" />
    <title>My Sitio Sí Vale</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/main.css">
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
    <header style="background-color: orange;" class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <a href="index.php"><img src="assets/images/logo1.png" alt=""> </a>
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.php" class="active" style="color: white;">Inicio</a></li>
                            <li class="scroll-to-section"><a href="mysitio.php" style="color: white;">Crear una nueva cuenta</a></li>
                            <li class="scroll-to-section"><a href="tarjetahabientes.php" style="color: white;">Mostrar Tarjetahabientes</a></li>
                        </ul>
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
                        if (isset($_POST['registrar'])) {
                            $email = $_POST['email2'];
                            $conexion = new conexion();
                            $query = $conexion->prepare('SELECT * from users WHERE email=:email2');
                            $query->bindParam(':email2', $email);
                            $query->execute();
                            $count = $query->rowCount();
                            if ($count) {
                                echo "<h3 class = 'text-center'>Parece que ya existe ese nombre de usuario<br></h3>";
                                echo "<h3 class = 'text-center'><br>Intente de nuevo.</h3>";
                                echo "<h3 class = 'text-center'><br><br><a href='mysitio.php' class = 'links'>Regresar</a></h3>";
                            } else {
                                $nombre = $_POST['nombre'];
                                $email = $_POST['email2'];
                                $psw = $_POST['psw1'];
                                $genero = $_POST['genero'];
                                $fecha = $_POST['fecha'];
                                $entidad = $_POST['entidad'];
                                $celular = $_POST['celular'];
                                $conexion2 = new conexion();
                                $query = $conexion2->prepare('INSERT INTO users (nombre, email, psw, genero, fecha, entidad, celular, estatus) VALUES(:nombre,:email2,:psw1, :genero, :fecha, :entidad, :celular, 1)');
                                $query->bindParam(':nombre', $nombre);
                                $query->bindParam(':email2', $email);
                                $query->bindParam(':psw1', $psw);
                                $query->bindParam(':genero', $genero);
                                $query->bindParam(':fecha', $fecha);
                                $query->bindParam(':entidad', $entidad);
                                $query->bindParam(':celular', $celular);
                                $query->execute();
                                echo "<h3 class = 'text-center'>¡Su registro fue exitoso!</h3>";
                                echo "<br><br><h3 class = 'text-center'><a href='index.php' class = 'links'>Inicio</a></h3>";
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