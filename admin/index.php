<?php  

session_start();
include './conexion/conexion.php';

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    session_destroy();
    exit();
}

$correo = $_SESSION['usuario'];
$nombre = $_SESSION['nombre'];

// Consultas para contar los registros
$queryProfesores = "SELECT COUNT(*) AS total FROM profesores";
$queryEstudiantes = "SELECT COUNT(*) AS total FROM estudiantes";
$queryCentros = "SELECT COUNT(*) AS total FROM centros";
$queryNotificaciones = "SELECT COUNT(*) AS total FROM notificaciones";

$resultProfesores = $conexion->query($queryProfesores)->fetch_assoc()['total'];
$resultEstudiantes = $conexion->query($queryEstudiantes)->fetch_assoc()['total'];
$resultCentros = $conexion->query($queryCentros)->fetch_assoc()['total'];
$resultNotificaciones = $conexion->query($queryNotificaciones)->fetch_assoc()['total'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/dash.css">
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
   <link rel="stylesheet" href="./recursos/sweetalert2.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Dasboard-Responsive</title>
</head>

<body>
    <nav class="sidebar close">
        <header>
            <div class="image-tex">
                <span class="image">
                    <img src="" alt="">
                </span>
                <div class="text header-text">
                    <span class="name">MOTIVADO</span>
                    <span class="profesion">+222472015</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <a href="#" title="">
                        <i class='bx bx-search icon'></i>
                        <input type="search" placeholder="Buscar...">
                    </a>
                </li>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#" title="Inicio" class="a">
                            <i class='bx bx-home-alt-2 icon'></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="./otros/profes.php" title="Profesores" class="a">
                            <i class='bx bxs-group icon'></i>
                            <span class="text nav-text">Profesores</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="./otros/estudiantes.php" title="Estudiantes" class="a">
                            <i class='bx bx-group icon'></i>
                            <span class="text nav-text">Estudiantes</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="./otros/centros.php" title="Centros" class="a">
                            <i class='bx bx-buildings icon'></i>
                            <span class="text nav-text">Centros</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="notificaciones.php" title="Notificaciones" class="a">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notificaciones</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#" title="Noticias" class="a">
                            <i class='bx bxs-notification icon'></i>
                            <span class="text nav-text">Noticias</span>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="../index.php" title="Cerrar Sesion" class="a">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text"><a href="../admin/php/cerrarSesion.php">Cerrar Sesion</a></span>
                    </a>
                </li>

                <li class="mode">
                    <div class="moon-sun">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark Mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>
    </nav>
    <section class="home">
        <div class="encabezado">
            <div class="buscador">
                <h4>Bienvenido a su espacio de Trabajo</h4>
            </div>
            <div class="per">
                <img src="../img/default-profile.png" alt="Perfil">
            </div>
        </div>
    
        <div class="estadisticas">
            <div class="card-stats profes">
                <i class='bx bxs-group iconos'></i>
                <div class="letras">
                    <h5>Profesores</h5>
                    <h2 class="counter" data-target="<?php echo $resultProfesores; ?>"><?php echo $resultProfesores; ?></h2>
                    <h6><?php echo date('F Y'); ?></h6>
                </div>
                <div class="background-hover"></div>
            </div>
            <div class="card-stats estudiante">
                <i class='bx bx-group iconos'></i>
                <div class="letras">
                    <h5>Estudiantes</h5>
                    <h2 class="counter" data-target="<?php echo $resultEstudiantes; ?>"><?php echo $resultEstudiantes; ?></h2>
                    <h6><?php echo date('F Y'); ?></h6>
                </div>
                <div class="background-hover"></div>
            </div>
            <div class="card-stats centro">
                <i class='bx bx-buildings iconos'></i>
                <div class="letras">
                    <h5>Centros</h5>
                    <h2 class="counter" data-target="<?php echo $resultCentros; ?>"><?php echo $resultCentros; ?></h2>
                    <h6><?php echo date('F Y'); ?></h6>
                </div>
                <div class="background-hover"></div>
            </div>
            <div class="card-stats notificaciones">
                <i class='bx bx-bell iconos'></i>
                <div class="letras">
                    <h5>Notificaciones</h5>
                    <h2 class="counter" data-target="<?php echo $resultNotificaciones; ?>"><?php echo $resultNotificaciones; ?></h2>
                    <h6><?php echo date('F Y'); ?></h6>
                </div>
                <div class="background-hover"></div>
            </div>
        </div>
    
     
    </section>


   
    <script src="./recursos/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>
    <script src="./recursos/chart.umd.js"></script> 
    <script src="./recursos/sweetalert2.all.js"></script>
    <script src="./js/counters.js"></script>
    <script src="./js/charts.js"></script>
</body>
</html>
