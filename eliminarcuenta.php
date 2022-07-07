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
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
        table {
        text-align: center;
        align: center;
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
                        <a href="index.php" class="logo" style="color: black;">
                            MySitio Sí Vale
                        </a>
                        <ul class="nav">                        
                            <li class="submenu">
                                <a href="javascript:;"style="color: black;">My portafolio</a>
                                <ul>
                                    <li><a href="https://awos-saberu1.000webhostapp.com/" target = "_blank">SABER</a></li>
                                    <li><a href="https://awos-shu1.000webhostapp.com/" target = "_blank">SABER HACER #1</a></li>
                                    <li><a href="https://awos-sh2u1.000webhostapp.com/" target = "_blank">SABER HACER #2</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="welcome.php"  class="active"style="color: black;">My Sitio SiVale</a></li>
                            <li class="scroll-to-section"><a href="logout.php"style="color: black;">Cerrar sesión</a></li>
                            <li class="scroll-to-section"><a href="eliminarcuenta.php"style="color: black;">Eliminar cuenta</a></li>
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
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
            <img src="assets/images/fondo.jpg" alt="">
                <div class="text-content">
                <h3 class="text-center" style="color: black; font-size: 35px;">Bienvenid@</h3>
                <br>
                <?php
                    echo "<h1>";
                    echo $_SESSION['email'];
                    echo "</h1>";
                    echo "<br>";
                ?>
                <br>
                <h3 class="text-center" style="color: black;">Elimina tu cuenta:</h3>   
                </div>
            </div>
          </div>
        </div>
    </div>
    <section class="section" id="contact-us">
        <div class="container">
            <div class="row">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>¡Elimina tu cuenta!</h6>
                            <h2>Ingresa tu correo y tu contraseña para eliminar tu cuenta</h2>
                        </div>              
                    </div>
                </div>
                    <div class="contact-form">
                        <form id="contact" action="" method="POST">
                          <div class="row">
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="email" type="email" id="email" placeholder="Email" required="">
                              </fieldset>
                            </div>
                            <div class="col-md-6 col-sm-12">
                              <fieldset>
                                <input name="psw" type="password" id="psw" placeholder="Contraseña" required="">
                              </fieldset>
                            </div>
                            <div class="col-lg-12">
                              <fieldset>
                                <button type="submit" id="validar" name = "validar" class="main-button-icon">Eliminar cuenta <i class="fa fa-arrow-right"></i></button>
                              </fieldset>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
if (isset($_POST['validar']))
{
    $email = $_SESSION['email'];   
    $psw = $_POST['psw'];
    if(!empty($email) && !empty($psw)) {
    $conexion = new conexion();
    $query=$conexion->prepare('SELECT * FROM users WHERE EMAIL =:email AND PSW =:psw AND estatus = 1');
    $query->bindParam(':email',$email);
	$query->bindParam(':psw',$psw);
	$query->execute();
    $count=$query->rowCount();
    if($count) {
        $email = $_SESSION['email'];
        $psw = $_POST['psw'];
        $conexion = new conexion();
        $query=$conexion->prepare('UPDATE users SET estatus=0 WHERE email=:email');
        $query->bindParam(':email',$email);
        $query->execute();
        echo "<script>window.location='index.php'</script>";
    } else {
        echo "<h2><center>";
        echo "La contraseña proporcionada es incorrecta.<br>";
		echo "<br>Verifique nuevamente.";
		echo "</center></h2>";
        echo "<br>";
    }
    }
  }
?>
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
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);    
            });
        });
    </script>
<script type="text/javascript">
                $(document).ready(function() {
                    $("#validar").click(function(){
                        if ($("#email").val() == "") {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 2500,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                            })
                            Toast.fire({
                                icon: 'error',
                                title: 'El Campo Email es Requerido' 
                            })
                            return false;
                        } else if($("#psw").val() == ""){
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 2500,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                }
                            })
                            Toast.fire({
                                icon: 'error',
                                title: 'El Campo contraseña es Requerido' 
                            })
                            return false;
                        }
                    });
                });
                </script>
  </body>
</html>
