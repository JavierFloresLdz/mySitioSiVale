<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="assets/images/logo1.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <style type="text/css">
        .accordion-example .accordion input[type="radio"] {
            position: absolute;
            left: -9999rem;
        }

        .accordion-example .accordion label {
            display: block;
            background: #4f6f8b;
            color: #fff;
            text-align: center;
            padding: 1rem;
            font-size: .8em;
            letter-spacing: .13em;
            padding-left: .13em;
            padding-right: 0;
            text-transform: uppercase;
            cursor: pointer;
            height: 3.3rem;
            font-weight: 300;
            transition: background 400ms, color 400ms, border-radius 400ms;
        }

        .accordion-example .accordion label:hover {
            background: #385670
        }

        .accordion-example .accordion .baffle {
            position: relative;
            height: 3.3rem;
            overflow: hidden;
            transition: height 400ms;
            transform: translateZ(0);
        }

        .accordion-example .accordion .baffle-inner {
            padding: 1.25rem;
            background: #eee;
            position: absolute;
            top: 3.3rem;
            left: 0;
            right: 0;
            height: 13.5rem;
            -webkit-overflow-scrolling: touch;
            overflow: scroll;
            overflow-y: scroll;
            overflow-x: hidden
        }

        .accordion-example .accordion .baffle:first-of-type label {
            border-radius: .25rem .25rem 0 0
        }

        .accordion-example .accordion .baffle:last-of-type label,
        .accordion-example .accordion .baffle:last-of-type .baffle-inner {
            border-radius: 0 0 .25rem .25rem
        }

        .accordion-example .accordion .baffle-inner:first-child {
            margin-top: 0
        }

        .accordion-example .accordion .baffle-inner:last-child {
            margin-bottom: 0
        }

        .accordion-example .accordion input[type="radio"]:checked+.baffle {
            height: 16.8rem
        }

        .accordion-example .accordion input[type="radio"]:checked+.baffle label {
            background: #eee;
            color: inherit;
            box-shadow: inset 0 -1px rgba(0, 0, 0, .15);
            font-weight: 300
        }

        .accordion-example .accordion input[type="radio"]:checked+.baffle:not(:first-of-type) label {
            border-radius: 0
        }

        .accordion-example .accordion input[type="radio"]:not(:checked)+.baffle+input[type="radio"]:not(:checked)+.baffle label {
            box-shadow: inset 0 1px rgba(0, 0, 0, .15);
        }

        .accordion-example::-webkit-scrollbar {
            width: .9375rem
        }

        .accordion-example::-webkit-scrollbar-thumb {
            background: #849cb1;
            border: solid #eee;
            border-width: .375rem .375rem .375rem 0;
            border-radius: 0 .375rem .375rem 0
        }

        .accordion-example::-webkit-scrollbar-thumb:window-inactive {
            background: #aaa
        }
    </style>
    <title>My Sitio Sí Vale</title>
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
                            <li class="scroll-to-section"><a href="mysitio.php" class="active" style="color: white;">Crear una nueva cuenta</a></li>
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
                        <div class="container">
                            <section>
                                <div class="accordion-example">
                                    <div class="accordion">
                                        <input type="radio" id="radio-option-2" name="accordion-radios" checked="">
                                        <div class="baffle">
                                            <label for="radio-option-2" style="background: orange; color: white;">Registrate</label>
                                            <div class="baffle-inner">
                                                <div class="container">
                                                    <form action="guardar.php" method="POST">
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre">
                                                            </div>
                                                            <div class="col">
                                                                <input type="email" id="email2" name="email2" class="form-control" placeholder="Correo electrónico">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col">
                                                                <input type="password" id="psw1" name="psw1" class="form-control" placeholder="Contraseña">
                                                            </div>
                                                            <div class="col">
                                                                <input type="password" id="psw2" name="psw2" class="form-control" placeholder="Confirmar contraseña">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col">
                                                                <select id="genero" name="genero" class="form-control">
                                                                    <option value="" disabled selected>Género</option>
                                                                    <option value="MASCULINO">MASCULINO</option>
                                                                    <option value="FEMENINO">FEMENINO</option>
                                                                </select>
                                                            </div>
                                                            <div class="col">
                                                                <input type="date" id="fecha" name="fecha" class="form-control" placeholder="Fecha">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col">
                                                                <select id="entidad" name="entidad" class="form-control">
                                                                    <option value="" disabled selected>Entidad</option>
                                                                    <option value="AGUASCALIENTES">AGUASCALIENTES</option>
                                                                    <option value="BAJA CALIFORNIA NORTE">BAJA CALIFORNIA NORTE</option>
                                                                    <option value="CAMPECHE">CAMPECHE</option>
                                                                    <option value="COAHUILA">COAHUILA</option>
                                                                    <option value="COLIMA">COLIMA</option>
                                                                    <option value="CHIAPAS">CHIAPAS</option>
                                                                    <option value="CHIHUAHUA">CHIHUAHUA</option>
                                                                    <option value="CIUDAD DE MÉXICO">CIUDAD DE MÉXICO</option>
                                                                    <option value="DURANGO">DURANGO</option>
                                                                    <option value="GUANAJUATO">GUANAJUATO</option>
                                                                    <option value="GUERRERO">GUERRERO</option>
                                                                    <option value="HIDALGO">HIDALGO</option>
                                                                    <option value="JALISCO">JALISCO</option>
                                                                    <option value="ESTADO DE MÉXICO">ESTADO DE MÉXICO</option>
                                                                    <option value="MICHOACÁN">MICHOACÁN</option>
                                                                    <option value="MORELOS">MORELOS</option>
                                                                    <option value="NAYARIT">NAYARIT</option>
                                                                    <option value="NUEVO LEÓN">NUEVO LEÓN</option>
                                                                    <option value="OAXACA">OAXACA</option>
                                                                    <option value="PUEBLA">PUEBLA</option>
                                                                    <option value="QUERÉTARO">QUERÉTARO</option>
                                                                    <option value="QUINTANA ROO">QUINTANA ROO</option>
                                                                    <option value="SAN LUIS POTOSÍ">SAN LUIS POTOSÍ</option>
                                                                    <option value="SINALOA">SINALOA</option>
                                                                    <option value="SONORA">SONORA</option>
                                                                    <option value="TABASCO">TABASCO</option>
                                                                    <option value="TAMAULIPAS">TAMAULIPAS</option>
                                                                    <option value="TLAXCALA">TLAXCALA</option>
                                                                    <option value="VERACRUZ">VERACRUZ</option>
                                                                    <option value="YUCATÁN">YUCATÁN</option>
                                                                    <option value="ZACATECAS">ZACATECAS</option>
                                                                </select>
                                                            </div>
                                                            <div class="col">
                                                                <input type="text" id="celular" name="celular" class="form-control" placeholder="Celular">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <button type="submit" id="registrar" name="registrar" style="background-color: orange;">Registrate</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $("#iniciar").click(function() {
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
                            title: 'El Campo correo es Requerido'
                        })
                        return false;
                    } else if ($("#psw").val() == "") {
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
                $("#registrar").click(function() {
                    if ($("#nombre").val() == "") {
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
                            title: 'El Campo Nombre es Requerido'
                        })
                        return false;
                    } else if ($("#email2").val() == "") {
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
                            title: 'El Campo correo es requerido '
                        })
                        return false;
                    } else if ($("#psw1").val() == "") {
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
                            title: 'El campo contraseña es requerido'
                        })
                        return false;
                    } else if ($("#psw2").val() == "") {
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
                            title: 'El confirmar contraseña es Requerido'
                        })
                        return false;
                    } else if ($("#genero option:selected").val() == '') {
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
                            title: 'Debe de Seleccionar su género'
                        })
                        return false;
                    } else if ($("#fecha").val() == '') {
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
                            title: 'Debe seleccionar la fecha de nacimiento'
                        })
                        return false;
                    } else if ($("#entidad option:selected").val() == '') {
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
                            title: 'Debe de Seleccionar su Entidad Federativa'
                        })
                        return false;
                    }
                });
            });
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
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
</body>

</html>