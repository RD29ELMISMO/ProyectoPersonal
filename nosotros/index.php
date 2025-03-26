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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
                            <a class="nav-link" href="#"><i class='bx bx-group icon'></i> Nosotros</a>
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
    
    
    
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>Sobre Nosotros</h1>
            <p>Educación de excelencia para formar líderes del futuro</p>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Nuestra Historia</h2>
                    <p>Fundado en 2020, la Agencia <strong>PEMA</strong> se ha dedicado a brindar educación integral con un enfoque innovador. Contamos con de 4 años de experiencia formando estudiantes destacados.</p>
                    <p>Nuestra comunidad educativa incluye a más de 60 estudiantes y 6 profesionales altamente capacitados.</p>
                </div>
                <div class="values-list">
                    <div class="value-item">
                        <i class="fas fa-graduation-cap"></i>
                        <h3>Excelencia Académica</h3>
                        <p>Programas educativos actualizados y metodologías innovadoras</p>
                    </div>
                    <div class="value-item">
                        <i class="fas fa-users"></i>
                        <h3>Comunidad Unida</h3>
                        <p>Fomentamos valores y trabajo en equipo en un ambiente inclusivo</p>
                    </div>
                    <div class="value-item">
                        <i class="fas fa-lightbulb"></i>
                        <h3>Innovación</h3>
                        <p>Tecnología integrada en todas las áreas de aprendizaje</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <h2>Nuestro Equipo</h2>
            <div class="team-grid">
                <div class="team-member">
                    <img src="https://via.placeholder.com/150" alt="Profesor">
                    <h4>Oscardino Merino</h4>
                    <p>Director</p>
                    <p>Licenciado En Pesca industrial</p>
                </div>
                <div class="team-member">
                    <img src="https://via.placeholder.com/150" alt="Profesor">
                    <h4>Andres Ondo Oye</h4>
                    <p>Profesor de Latin Y griego</p>
                    <p>Licenciado en Periodismo</p>
                </div>
                <div class="team-member">
                    <img src="https://via.placeholder.com/150" alt="Profesor">
                    <h4>Esteban Kinson Yambe</h4>
                    <p>Profesora de Matemáticas</p>
                    <p>Licenciado en Pedagogia</p>
                </div>
                <div class="team-member">
                    <img src="https://via.placeholder.com/150" alt="Profesor">
                    <h4>Andres Banganga</h4>
                    <p>Profesor de Lengua Y Literatura</p>
                    <p>Especialista en Filologia</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="cta-section">
        <div class="container">
            <h2>¿Quieres saber más?</h2>
            <p>Conoce nuestras instalaciones y programas educativos</p>
            <a href="../clases_part/index.php" class="cta-button">Agendar Visita</a>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2025 Agencia PEMA - Todos los derechos reservados</p>
        </div>
    </footer>

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