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


    <!-- After the navigation -->
    <div class="contenido">
        <div class="hero-section">
            <h1>Registro de Centros Educativos</h1>
            <p class="lead">Únete a la red educativa más grande de Guinea Ecuatorial</p>
        </div>
    
        <div class="container">
            <h2 class="text-center mb-5">Ventajas de <strong>Motivado</strong></h2>
            
            <div class="content1">
                <div class="img">
                    <img src="./img/4.jpg" alt="Visibilidad">
                </div>
                <div class="text">
                    <strong>Visibilidad Aumentada</strong>
                    <p>Al registrar tu centro escolar con MOTIVADO, aumentas su visibilidad entre
                        padres y estudiantes. Nuestra plataforma está diseñada para conectar a los centros
                        educativos con quienes buscan la mejor opción para su formación.</p>
                    <a href="#registro" class="btn btn-primary mt-3">Registrar ahora</a>
                </div>
            </div>
    
            <div class="content1">
                <div class="text">
                    <strong>Red de Contactos</strong>
                    <p>Al unirte a MOTIVADO, te integras en una red de contactos con otros centros escolares y profesionales de la educación.
                        Esta comunidad te permite compartir experiencias, consejos y colaboraciones que enriquecen el proceso educativo.</p>
                    <a href="#servicios" class="btn btn-primary mt-3">Ver servicios</a>
                </div>
                <div class="img">
                    <img src="./img/3.jpg" alt="Red de contactos">
                </div>
            </div>
    
            <div class="servicios" id="servicios">
                <div class="servicio">
                    <img src="./img/1.jpg" alt="Registro de Centros">
                    <div class="servicio-content">
                        <h4>Registro de Centros Escolares</h4>
                        <p>Con MOTIVADO puedes registrar tus centros escolares con facilidad y seguridad.</p>
                        <span>15000 XAF</span>
                    </div>
                </div>
                <div class="servicio">
                    <img src="./img/2.jpg" alt="Paquete de publicidad">
                    <div class="servicio-content">
                        <h4>Paquete de Publicidad</h4>
                        <p>Promociona tu centro educativo y alcanza a más estudiantes potenciales.</p>
                        <span>20000 XAF</span>
                    </div>
                </div>
            </div>
    
            <div class="preguntas">
                <!-- Existing accordion code remains the same -->
            </div>
    
            <div id="registro" class="form_profes">
                <!-- <form action="" method="POST">
                    <h3 class="text-center mb-4">Formulario de Registro</h3>
                    <div class="mb-3">
                        <label class="form-label">Nombre del Centro</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nombre del Representante</label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mensaje</label>
                        <textarea class="form-control" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Enviar Solicitud</button>
                </form> -->
    
                <div class="contact-info">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15589.789397798777!2d8.7500!3d3.6167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzZcbjEwNzUwMCwgOC43NTAwMEVD!5e0!3m2!1ses!2smx!4v1696244460000" 
                        width="100%" height="300" style="border:0; border-radius: 15px;" allowfullscreen="" loading="lazy">
                    </iframe>
                    
                    <div class="direcciones mt-4">
                        <a href="#"><i class='bx bx-location-plus'></i> Santa María II, Malabo</a>
                        <a href="tel:+240222472015"><i class='bx bxs-phone-call'></i> +240 222 472 015</a>
                        <a href="mailto:info@motivado.com"><i class='bx bx-envelope'></i> info@motivado.com</a>
                    </div>
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