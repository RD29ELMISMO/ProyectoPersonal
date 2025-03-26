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
                            <a class="nav-link " href="../index.php"><i class='bx bxs-graduation icon'></i> Centros</a>
                        </li>
                        <li class="nav-item pt-3">
                            <a class="nav-link" href="../profes/index.php"><i class='bx bxs-group icon'></i> Profesor Particular</a>
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
                                <li><a class="dropdown-item" href="#">Clases Particular</a></li>


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


    <div class="contenido">
        <h1 class="text-center mb-4">Clases Particulares</h1>
        <div class="clases">
            <div class="tarjeta">
                <h3 class="text-center">REQUISITOS</h3>
                <ul>
                    <li>Tener interés por aprender y mejorar</li>
                    <li>Compromiso con la asistencia</li>
                    <li>Material escolar básico</li>
                    <li>Evaluación inicial gratuita</li>
                    <li>Disponibilidad horaria</li>
                </ul>
            </div>

            <div class="tarjeta">
                <h3 class="text-center">NIVELES EDUCATIVOS</h3>
                <div class="nivel-card">
                    <h4>PRIMARIA</h4>
                    <img src="../img/primaria.jpg" alt="Primaria">
                    <p>Refuerzo en materias básicas</p>
                </div>
                
                <div class="nivel-card">
                    <h4>SECUNDARIA</h4>
                    <img src="../img/secundaria.jpg" alt="Secundaria">
                    <p>Apoyo en todas las asignaturas</p>
                </div>
            </div>

            <div class="tarjeta">
                <h3 class="text-center">TARIFAS MENSUALES</h3>
                <ul>
                    <li>Primaria: 10.000 XAF</li>
                    <li>Primaria a domicilio: 15.000 XAF</li>
                    <li>Secundaria: 10.000 XAF</li>
                    <li>Secundaria a domicilio: 20.000 XAF</li>
                    <li>Bachillerato: 10.000 XAF</li>
                    <li>Bachillerato a domicilio: 20.000 XAF</li>
                </ul>
                <p class="text-center mt-3"><strong>Pago mensual anticipado</strong></p>
            </div>
        </div>

        <div class="registro-section text-center mt-5">
            <h2>Comienza tu Registro</h2>
            <p>Es fácil y rápido, ¡no esperes más!</p>
        </div>

        <div class="form_profes mt-4">
            <!-- <form action="" method="POST">
                <h3 class="text-center mb-4">Formulario de Contacto</h3>
                <label>
                    <em>Nombre Completo</em>
                    <input type="text" id="nombre" name="nombre" required placeholder="Ej: Juan Pérez">
                </label>
                
                <label>
                    <em>Correo Electrónico</em>
                    <input type="email" id="email" name="email" required placeholder="ejemplo@correo.com">
                </label>
                
                <label>
                    <em>Teléfono</em>
                    <input type="tel" id="telefono" name="telefono" required placeholder="+240 XXX XXX XXX">
                </label>
                
                <label>
                    <em>Mensaje</em>
                    <textarea id="mensaje" name="mensaje" required placeholder="Describe qué tipo de clases te interesan..."></textarea>
                </label>
                
                <button type="submit" class="btn btn-primary w-100">Enviar Solicitud</button>
            </form> -->

            <div class="contact-info">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15589.789397798777!2d8.7500!3d3.6167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzZcbjEwNzUwMCwgOC43NTAwMEVD!5e0!3m2!1ses!2smx!4v1696244460000" height="300" allowfullscreen="" loading="lazy"></iframe>
                
                <div class="direcciones">
                    <a href="#">
                        <i class='bx bx-location-plus'></i> Santa María II, Malabo
                    </a>
                    <a href="tel:+240222472015">
                        <i class='bx bxs-phone-call'></i> +240 222 472 015
                    </a>
                    <a href="mailto:info@motivado.com">
                        <i class='bx bx-envelope'></i> info@motivado.com
                    </a>
                </div>
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