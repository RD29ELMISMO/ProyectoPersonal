
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profes.css">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--Css bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
                    <a href="#">
                        <i class='bx bx-search icon'></i>
                        <input type="search" placeholder="Buscar...">
                    </a>
                </li>
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="../index.php" class="a">
                            <i class='bx bx-home-alt-2 icon'></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="profes.php" class="a">
                            <i class='bx bxs-group icon'></i>
                            <span class="text nav-text">Profesores</span>
                        </a>
                    </li>
                    <!-- <li class="nav-link">
                        <a href="estudiantes.php" class="a">
                            <i class='bx bx-group icon'></i>
                            <span class="text nav-text">Estudiantes</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="centros.php" class="a">
                            <i class='bx bx-buildings icon'></i>
                            <span class="text nav-text">Centros</span>
                        </a>
                    </li> -->
                    <!-- <li class="nav-link">
                        <a href="notificaciones.php" class="a">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notoficaciones</span>
                        </a>
                    </li> -->
                    <li class="nav-link">
                        <a href="#" class="a">
                            <i class='bx bx-wallet icon'></i>
                            <span class="text nav-text">Salarios</span>
                        </a>
                    </li>
                    <!-- <li class="nav-link">
                        <a href="#" class="a">
                            <i class='bx bxs-notification icon'></i>
                            <span class="text nav-text">Noticias</span>
                        </a>
                    </li> -->

                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="#" class="a">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Cerrar Sesion</span>
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
                <h4>Bienvenido a su espacio de Trabajo Sr ``</h4>
                <!-- <input type="search" name="" id="" placeholder="Buscar..."> -->
            </div>
            <div class="per">
                <img src="" alt="Perfil">
                <input type="file" name="" id="">
            </div>
        </div>
        <!-- modal -->
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary ps-3 ms-5 mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class='bx bxs-user'><br></i>Añadir Salario
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Formulario Profes</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- formulario -->
                        <form action="" method="post" id="formSalario" enctype="multipart/form-data">
                           
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Profesor</label>
                                <input type="text" class="form-control" name="profe_n" id="profe_n" placeholder="Arsenio">
                            </div>
                          
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Fecha</label>
                                <input type="text" class="form-control" name="fecha" id="fecha" placeholder="29/06/2025">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Monto</label>
                                <input type="text" class="form-control" name="monto" id="monto" placeholder="500.0 XAF">
                            </div>
                            <input type="submit" class="btn btn-primary" name="guardar" id="guardar" value="Guardar">
                        </form>
                    </div>
                    <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
                </div>
            </div>
        </div>
        <!-- fin modal -->
        <br>
        <div class="table-responsive">
            <h2 class="text-center">Salarios</h2>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                       
                        <th class="text-center">Profesor</th>
                        <th class="text-center">Monto</th>
                        <th class="text-center">Fecha</th>
                        <th colspan="2" class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tbl_salario">
                   <!-- contenido -->
                </tbody>
            </table>
        </div>
    </section>


    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
   

    <script src="../js/script.js"></script>
    <script src="../js/salario.js"></script>
</body>

</html>