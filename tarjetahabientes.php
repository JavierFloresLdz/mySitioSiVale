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
                            <li class="scroll-to-section"><a href="index.php" style="color: white;">Inicio</a></li>
                            <li class="scroll-to-section"><a href="mysitio.php" style="color: white;">Crear una nueva cuenta</a></li>
                            <li class="scroll-to-section"><a href="tarjetahabientes.php" class="active" style="color: white;">Mostrar Tarjetahabientes</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <h3 class="text-center " style="color: black; font-size: 35px; padding-top:7%">Usuarios registrados:</h3>
    <div class="container" align="center" style="padding-top: 1%;">
        <div class="row">
            <?php
            require_once 'conexion.php';
            $conexion = new conexion();
            $query = $conexion->prepare('SELECT * FROM users WHERE estatus=1');
            $query->execute();
            $count = $query->rowCount();
            if ($count) {
                $row = $query->fetch(PDO::FETCH_ASSOC);
                echo " <div class='col-4'>";
                echo "<div class='card h-100' style='width: 20rem;background-color: orange;'>";
                echo "<img class='card-img-top' src='assets/images/desconocido.png' alt='User'>";
                echo "<div class='card-body text-center'>";
                echo "<table><tr><td>Email:</td><td> " . $row['email'] . "</td></tr>";
                echo "<tr><td>Nombre:</td><td> " . $row['nombre'] . "</td></tr>";
                echo "<tr><td>Género:</td><td> " . $row['genero'] . "</td></tr>";
                echo "<tr><td>Fecha de nacimiento:</td><td> " . $row['fecha'] . "</td></tr>";
                echo "<tr><td>Entidad:</td><td> " . $row['entidad'] . "</td></tr>";
                echo "<tr><td>Celular:</td><td> " . $row['celular'] . "</td></tr></table>";
                echo " </div>";
                echo " </div>";
                echo " </div>";
                echo "<br>";
                $i = 1;
                if ($count != 1) {
                    do {
                        $row = $query->fetch(PDO::FETCH_ASSOC);
                        echo " <div class='col-4'>";
                        echo "<div class='card h-100' style='width: 20rem;background-color: orange;'>";
                        echo "<img class='card-img-top' src='assets/images/desconocido.png' alt='User'>";
                        echo "<div class='card-body text-center'>";
                        echo "<table><tr><td>Email:</td><td> " . $row['email'] . "</td></tr>";
                        echo "<tr><td>Nombre:</td><td> " . $row['nombre'] . "</td></tr>";
                        echo "<tr><td>Género:</td><td> " . $row['genero'] . "</td></tr>";
                        echo "<tr><td>Fecha de nacimiento:</td><td> " . $row['fecha'] . "</td></tr>";
                        echo "<tr><td>Entidad:</td><td> " . $row['entidad'] . "</td></tr>";
                        echo "<tr><td>Celular:</td><td> " . $row['celular'] . "</td></tr></table>";
                        echo " </div>";
                        echo " </div>";
                        echo " </div>";
                        $i++;
                    } while ($count != $i);
                }
            }
            ?>
        </div>
    </div>
    </div>

    <br>

    <br>
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