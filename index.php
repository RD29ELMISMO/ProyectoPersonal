<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOTIVADO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> -->
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilosindex.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>

<body>
    <nav class="navbar navbar-dark  navbar-expand-lg  fixed-top">

        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="./img/PEMA-removebg-preview.png" style="width: 100px; height: 80px;" alt="foto"> MOTIVADO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-start text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Motivado</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item pt-3">
                            <a class="nav-link active" aria-current="page" href="./index.php"><i class='bx bxs-home icon' ></i> </i> Inicio</a>
                        </li>
                        <li class="nav-item pt-3">
                            <a class="nav-link " href="./centro/index.php"><i class='bx bxs-graduation icon'></i> Centros</a>
                        </li>
                        <li class="nav-item pt-3">
                            <a class="nav-link" href="./profes/index.php"><i class='bx bxs-group '></i> Profesor Particular</a>
                        </li>
                        <li class="nav-item pt-3">
                            <a class="nav-link" href="./noticias/index.php"><i class='bx bx-news icon'></i> Noticias</a>
                        </li>
                        <!-- <li class="nav-item pt-3">
                            <a class="nav-link" href="#">Niveles y Tarifas</a>
                        </li> -->

                        <li class="nav-item pt-3">
                            <a class="nav-link" href="./nosotros/index.php"><i class='bx bx-group icon'></i> Nosotros</a>
                        </li>
                        <li class="nav-item dropdown pt-3">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Servicios
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="./regidtro_centro/index.php">Registro de Centros</a></li>
                                <li><a class="dropdown-item" href="./clases_part/index.php">Clases Particulares</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <!-- <input class="form-control me-2" type="text" id="buscar" name="buscar" placeholder="Buscar usuario" aria-label="Search"> -->
                        <a href="./admin/login/login.php" class="btn btn-success">Login</a>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <div class="banner">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner" name="Principal">
                <!--Codigo php -->

                <div class="carousel-item active" data-bs-interval="5000">
                    <img src="./admin/imagenesdash/santa isa.jpg" class="d-block w-100" alt="La foto es destruida por un virus">
                    <div class="carousel-caption d-none d-md-block contenido_car">
                        <h1 class="">Bienvenido a MOTIVADO</h1>
                        <h3 class="">La plataforma ideal para el regitro de centros y profesores particulares, donde la Educación se encuentra con la profesionalidad</3>
                            <h3 class="">Conectate Con Estudiantes y Profesores Apasionados por la Educacion</3> <br><br>
                                <a href="./noticias/index.php" class="btn btn-success ms-5 ">Explorar Más</a>
                    </div>
                </div>

                <div class="carousel-item   " data-bs-interval="5000">
                    <img src="./admin/imagenesdash/santa isa.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block contenido_car">
                        <h1>Bienvenido a MOTIVADO</h1>
                        <h3>Conectate Con Estudiantes y Profesores Apasionados <br> por la Educacion</h3>
                        <a href="./profes/index.php" class="btn btn-success mt-5 ">Explorar Más</a>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="5000">
                    <img src="./admin/imagenesdash/santa isa.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block contenido_car">
                        <h1>Bienvenido a MOTIVADO</h1>
                        <h3>Conectate Con Estudiantes y Profesores Apasionados por la Educacion</h3><br>
                        <a href="./noticias/index.php" class="btn btn-success mt-5 ">Explorar Más</a>
                    </div>
                </div>
            </div>
            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> -->
        </div>
    </div>
    <div class="contenido">
        <!-- Registro Centro -->
        <div class="registro_centros">
            <div class="img">
                <a href="./regidtro_centro/index.php">
                    <img src="./img/img1.jpg" class="img1" alt="foto" width="400" height="200">
                </a>
            </div>
            <div class="descripcion">
                <h2>Registro de Centros Escolares</h2>
                <p>En <strong>MOTIVADO,</strong> facilitamos el registro de centros escolares, asegurando que cada institucion <br> educativa tenga una presencia en linea <br>
                    efectiva y organizada. Nuestro sistema permite una gestion sencilla y accesible <br>
                    para todos los administradores de instituciones.
                </p>
                <a href="./regidtro_centro/index.php" class="btn btn-success">Solicitar Registro</a>
            </div>
        </div>

        <!-- Botón de WhatsApp -->
        <button class="whatsapp-button" onclick="openWhatsAppPopup()">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/768px-WhatsApp.svg.png" alt="WhatsApp">
        </button>

        <!-- Cuadro emergente -->
        <div class="popup-overlay" id="popup-overlay"></div>
        <div class="whatsapp-popup" id="whatsapp-popup">
            <h3>¿Quieres contactarme?</h3>
            <p>Haz clic en el botón para iniciar una conversación en WhatsApp.</p>
            <a href="https://api.whatsapp.com/send?phone=+240222472015&text=Hola%2C%20quisiera%20m%C3%A1s%20informaci%C3%B3n." target="_blank">Chatear ahora</a>
        </div>




        <!-- Clases Particulares -->
        <div class="clases_particulares">
            
            <div class="descripcion">
                <h2>Clases Particulares</h2>
                <p>Facilitamos la conxion entre profesores particulares y estudiantes que <br>
                    buscan mejorar su rendimiento academico. Nuestra Plataforma esta <br>
                    diseñada para que los profesores puedan ofrecer sus servicios de manera <br>
                    efectiva y directa, asegurando un aprendizaje de calidad.
                </p>
                <a href="" class="btn btn-success">Solicitar Clase</a>
            </div>
            <div class="img"> <a href=""><img src="./img/img2.jpg" class="img1" alt="foto" width="400" height="200"></a></div>
        </div>
        <!-- Profesores particulares -->
        <div class="profesores_particulares">
            <div class="img"> <a href="./profes/index.php"><img src="./img/img3.jpg" class="img1" alt="foto" width="400" height="200"></a></div>
            <div class="descripcion">
                <h2>Profesores Particulares</h2>
                <p>Si eres profesor y apasionado en compartir sus conocimiento le damos la oportunidad de contactac con nosotros para que asi <br>
                    puedas generar una comunidad de estudiantes y profesores enfocados en la educación.
                </p>
                <a href="./profes/index.php" class="btn btn-success">Contactar Profesor</a>
            </div>
        </div>
    </div>
    <div class="footer bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>Contacto</h3>
                    <p>Dirección: Semu</p>
                    <a href="telf:+240 555693963">Teléfono: +240 555 693 963</a>
                    <p>Email: pema@example.com</p>
                </div>
                <div class="col-md-4">
                    <h3>Redes Sociales</h3>
                    <a href="#" class="icon-facebook"><i class='bx bxl-facebook enlcae_redes'></i></a>
                    <a href="#" class="icon-instagram"><i class='bx bxl-instagram enlcae_redes'></i></a>
                    <a href="#" class="icon-twitter"><i class='bx bxl-twitter enlcae_redes'></i></a>
                    <a href="#" class="icon-linkedin"><i class='bx bxl-linkedin enlcae_redes'></i></a>
                    <a href="#" class="icon-youtube"><i class='bx bxl-youtube enlcae_redes'></i></a>
                    <a href="#" class="icon-github"><i class='bx bxl-github enlcae_redes'></i></a>
                </div>
            </div>
        </div>
    </div>







    <script src="./js/all.js"></script>
    <script src="./js/bootstrap.js"></script>

    <!-- <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
<!-- Script para mostrar/ocultar el cuadro emergente -->
<script>
    function openWhatsAppPopup() {
        document.getElementById('whatsapp-popup').style.display = 'block';
        document.getElementById('popup-overlay').style.display = 'block';
    }

    // Cerrar el cuadro emergente al hacer clic en el fondo oscuro
    document.getElementById('popup-overlay').addEventListener('click', function() {
        document.getElementById('whatsapp-popup').style.display = 'none';
        document.getElementById('popup-overlay').style.display = 'none';
    });
</script>

</html>