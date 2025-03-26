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
    <link rel="stylesheet" href="./css/estilo.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
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

    <div class="contenido">
        <!-- Registro Centro -->


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
    </div>
    <!-- <div class="footer bg-dark text-white">
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
    </div> -->

    <!--  -->
    <!-- news-module.html -->
    <div class="news-module">
        <!-- Cabecera del módulo -->
        <header class="news-header">
            <h2>Noticias Escolares</h2>
            <p>Últimas actualizaciones y eventos de nuestra institución</p>
        </header>

        <!-- Noticia destacada -->
        <div class="featured-news">
            <div class="featured-content">
                <img src="../admin/img/estudiante/para-foto-principal-38_39258799_20220107164508.webp" alt="Evento de ciencias">
                <div class="text-content">
                    <h3>Gran Feria de Ciencias 2024</h3>
                    <p class="date">15 de Marzo, 2024</p>
                    <p>Este viernes se realizará la décima edición de nuestra feria científica...</p>
                    <a href="./leermas.php" class="read-more">Leer más</a>
                </div>
            </div>
        </div>

        <!-- Listado de noticias recientes -->
        <div class="recent-news">
            <div class="news-filters">
                <input type="search" placeholder="Buscar noticias..." id="searchNews" class="buscar">
                <select id="categoryFilter" class="filtro">
                    <option value="all">Todas las categorías</option>
                    <option value="academico">Académico</option>
                    <option value="deportes">Deportes</option>
                    <option value="cultura">Cultura</option>
                </select>
            </div>

            <div class="news-list">
                <!-- Ejemplo de noticia -->
                <div class="news-item" data-category="academico">
                    <h4>Convocatoria para intercambio académico</h4>
                    <p class="date">10 de Marzo, 2024</p>
                    <p>Se abrió la convocatoria para el programa de intercambio con el colegio...</p>
                    <a href="./leermas.php">Ver más</a>
                </div>

                <!-- Más noticias -->
                <div class="news-item" data-category="deportes">
                    <h4>Campeonato regional de fútbol</h4>
                    <p class="date">08 de Marzo, 2024</p>
                    <p>Nuestro equipo de fútbol clasificó a la final regional...</p>
                    <a href="#">Ver más</a>
                </div>

                <!-- Agregar más noticias aquí -->
            </div>

            <!-- Paginación -->
            <div class="pagination">
                <button class="page-btn active">1</button>
                <button class="page-btn">2</button>
                <button class="page-btn">3</button>
            </div>
        </div>
    </div>




   
    <script src="./js/all.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/script.js"></script>
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