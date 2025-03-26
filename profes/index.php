<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOTIVADO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/estilo.css">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg  fixed-top">

        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="../img/PEMA-removebg-preview.png" style="width: 100px; height: 80px;" alt="foto">MOTIVADO</a>
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
                            <a class="nav-link active" aria-current="page" href="../index.php"><i class='bx bx-home icon'></i> Inicio</a>
                        </li>
                        <li class="nav-item pt-3">
                            <a class="nav-link " href="../centro/index.php"><i class='bx bxs-graduation icon'></i> Centros</a>
                        </li>
                        <li class="nav-item pt-3">
                            <a class="nav-link" href="#"><i class='bx bxs-group icon'></i> Profesor Particular</a>
                        </li>
                        <li class="nav-item pt-3">
                            <a class="nav-link" href="../noticias/index.php"><i class='bx bx-news icon'></i> Noticias</a>
                        </li>
                        <!-- <li class="nav-item pt-3">
                            <a class="nav-link" href="#">Niveles y Tarifas</a>
                        </li> -->

                        <li class="nav-item pt-3">
                            <a class="nav-link" href="../nosotros/index.php"><i class='bx bx-group icon'></i> Nosotros</a>
                        </li>
                        <li class="nav-item dropdown pt-3">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Servicios
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="../regidtro_centro/index.php">Registro de Centros</a></li>
                                <li><a class="dropdown-item" href="../clases_part/index.php">Clases Particular</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <!-- <input class="form-control me-2" type="text" id="buscar" name="buscar" placeholder="Buscar usuario" aria-label="Search"> -->
                        <a href="../admin/login/login.php" class="btn btn-success">Login</a>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <br><br><br>
    <div class="contenido_profes">
        <h3 class="text-center"> Transformando vidas: Historias inspiradoras de nuestros profesores</h3>
        <br>
        <p class="text-center"> Descubre cómo nuestros profesores han logrado alcanzar sus metas profesionales gracias a MOTIVADO</p>
        <div class="imagenes">
            <div class="img1">
                <!-- <p class="text-center"> La transformacion De Armando Cordoba: Un nuevo comienzo</p> <br> -->
                <!-- <span class="text-center">1 de Marzo de 2025</span> -->
            </div>
            <div class="img2">
                <!-- <p class="text-center"> Exito en la enseñanza: La historia de Manuel Osa</p> <br>
                <span class="text-center">1 de Marzo de 2025</span> -->
            </div>
            <div class="img3">
                <!-- <p class="text-center"> El viaje de Ana: De profesora particular a experta en su campo</p> <br>
                <span class="text-center">1 de Marzo de 2025</span> -->
            </div>
        </div>
        <br><br>
        <h3 class="text-center">Voces de nuestros profesores: Testimonios reales</h3>
        <p class="text-center"> Las experiencias de nuestros profesores son la mejor prueba de la efectividad de MOTIVADO</p>
        <div class="testimonio">
            <div class="test_content">
                <div class="img"> <img src="./img/1.webp" alt="foto"></div>
                <h5 class="text-center">Un cambio radical en mi carrera</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In consequatur dolor delectus non, amet optio ad soluta distinctio, deleniti harum placeat possimus, atque magnam inventore nemo. Dolor molestias dicta repellendus.</p>
            </div>
            <div class="test_content">
                <div class="img"><img src="./img/2.jpeg" alt="foto"></div>
                <h5 class="text-center">La mejor decision que he tomado</h5>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non quidem sit facilis, beatae cum laboriosam nisi laborum voluptatibus commodi aperiam rerum distinctio porro fuga consequuntur quasi. Sint est et cumque.</p>
            </div>
            <div class="test_content">
                <div class="img"><img src="./img/3.jpg" alt="foto"></div>
                <h5 class="text-center">Motivado cambio mi vida</h5>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati fugiat asperiores eligendi, accusantium dolores ratione aliquam eos exercitationem debitis quia consectetur reiciendis unde nostrum explicabo quam, eaque eum quos molestiae?</p>
            </div>
        </div>
        <br><br>
        <h3 class="text-center">Registro para profesores:</h3>
        <p class="text-center">Si deseas ser parte de nuestra comunidad de profesores y centros, registrate ahora</p><br>

        <div class="form_profes">

            <!-- <form action="">
                <h2 class="text-center">Formulario</h2>
                <label for="">
                    <em>Nombre Completo</em><br>
                    <input type="text" id="nombre" name="nombre" required>
                </label>
                <br>
                <label for="">
                    <em>Correo Electrónico</em><br>
                    <input type="email" id="email" name="email" required>
                </label>
                <br>
                <label for="">
                    <em>Mensaje</em><br>
                    <textarea id="mensaje" name="mensaje" required></textarea>
                </label>
                <label for="">
                    <input type="submit" class="btn btn-primary" value="Enviar">
                </label>

            </form> -->

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15589.789397798777!2d8.7500!3d3.6167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzZcbjEwNzUwMCwgOC43NTAwMEVD!5e0!3m2!1ses!2smx!4v1696244460000"
                width="600"
                height="450"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>
            <div class="direcciones">
                <a href="">
                    <i class='bx bx-location-plus'></i> <em>Direccion</em>
                </a><br>
                <a href="">
                    <i class='bx bxs-phone-call'></i> <input type="number" name="" id="" placeholder="Telefono">
                </a><br>
                <a href="">
                    <i class='bx bx-envelope'></i> arsenioperezyhoni@gmail.com
                </a>
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


    <script src="./js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
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