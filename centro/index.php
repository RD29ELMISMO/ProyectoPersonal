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
                            <a class="nav-link active" aria-current="page" href="../index.php"><i class='bx bx-home icon'></i>  Inicio</a>
                        </li>
                        <li class="nav-item pt-3">
                            <a class="nav-link " href="./index.php"><i class='bx bxs-graduation icon'></i> Centros</a>
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




    <div class="contenedor">
        <div class="text">
            <h1 class="text-center">Centros Educativos</h1>
            <p class="text-center text-muted">Descubre los mejores centros educativos asociados</p>
        </div>
        
        <div class="tarjeta">
            <!-- Centro Card 1 -->
            <div class="centro-card">
                <img src="../img/centro1.jpg" alt="Centro Educativo" class="centro-img">
                <div class="centro-info">
                    <h3>Ateneo Dr. Edu Ndong</h3>
                    <div class="centro-details">
                        <p><i class='bx bx-map'></i> Santa María II</p>
                        <p><i class='bx bx-phone'></i> +240 222 435 213</p>
                        <p><i class='bx bx-envelope'></i> info@ateneo.com</p>
                    </div>
                    <a href="./ver_centro.php" class="centro-btn">Ver más</a>
                </div>
            </div>
        
            <!-- Centro Card 2 -->
            <div class="centro-card">
                <img src="../img/centro2.jpg" alt="Centro Educativo" class="centro-img">
                <div class="centro-info">
                    <h3>Centro de Estudios Malabo</h3>
                    <div class="centro-details">
                        <p><i class='bx bx-map'></i> Caracolas</p>
                        <p><i class='bx bx-phone'></i> +240 222 333 444</p>
                        <p><i class='bx bx-envelope'></i> info@cemala.com</p>
                    </div>
                    <a href="./ver_centro.php" class="centro-btn">Ver más</a>
                </div>
            </div>
        
            <!-- Centro Card 3 -->
            <div class="centro-card">
                <img src="../img/centro3.jpg" alt="Centro Educativo" class="centro-img">
                <div class="centro-info">
                    <h3>Instituto Tecnológico</h3>
                    <div class="centro-details">
                        <p><i class='bx bx-map'></i> Semu</p>
                        <p><i class='bx bx-phone'></i> +240 222 555 666</p>
                        <p><i class='bx bx-envelope'></i> info@tecno.com</p>
                    </div>
                    <a href="./ver_centro.php" class="centro-btn">Ver más</a>
                </div>
            </div>
        </div>
        
        <div class="requisitos">
            <h2 class="text-center mb-4">Requisitos para Centros Asociados</h2>
            <ul>
                <li>Licencia de funcionamiento vigente</li>
                <li>Personal docente cualificado</li>
                <li>Instalaciones adecuadas y seguras</li>
                <li>Programa educativo aprobado</li>
                <li>Compromiso con la calidad educativa</li>
                <li>Infraestructura tecnológica actualizada</li>
            </ul>
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