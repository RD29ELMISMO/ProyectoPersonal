<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profes.css">
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/font-awesome.css">
    <link rel="stylesheet" href="./css/sweetalert2.css">
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
                    <li class="nav-link">
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
                    </li>
                    <li class="nav-link">
                        <a href="notificaciones.php" class="a">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Notificaciones</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#" class="a">
                            <i class='bx bxs-notification icon'></i>
                            <span class="text nav-text">Noticias</span>
                        </a>
                    </li>

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
        <!--modal  -->


        <button type="button" class="btn btn-primary ps-3 ms-5 mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class='bx bx-buildings iconos'></i>Nuevo Centro
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Formulario</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!--formulario  -->
                        <form action="" name="FormCentro" method="post" id="formCentro" enctype="multipart/form-data">
                            <div class="img">
                                <img src="" id="avatar" alt="">
                                <input type="file" name="foto" id="cambiarAvatar">
                                <label for="exampleFormControlInput1" class="form-label">Foto</label>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nombre Centro</label>
                                <input type="text" class="form-control" name="centro" id="centro" placeholder="Ateneo Dr. Edu Ndong">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Representante</label>
                                <input type="text" class="form-control" name="repre" id="repre" placeholder="Eugenio Edu Ndong">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Ubicacion</label>
                                <input type="text" class="form-control" name="ubicacion" id="ubicacion" placeholder="Santa Mª II">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Telefono</label>
                                <input type="text" class="form-control" name="telf" id="telf" placeholder="+240 222 435 213 / 555 000 786">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input type="email" class="form-control" name="ema" id="ema" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Breve Informacion</label>
                                <textarea class="form-control" name="info" id="info" rows="3"></textarea>
                            </div>
                            <input type="submit" class="btn btn-primary" id="guardar" value="Guardar">
                        </form>
                        <!-- fin formulario -->
                    </div>
                    <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div> -->
                </div>
            </div>
        </div>
        <!-- fin modal -->

        <br>
        <div class="table-responsive">
            <h2 class="text-center">Centros</h2>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Foto</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Ubicacion</th>
                        <th class="text-center">Representante</th>
                        <th class="text-center">Correo</th>
                        <th class="text-center">Telefono</th>
                        <th colspan="3" class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody id="idtbody">
                    <!--  -->
                </tbody>
            </table>
        </div>
    </section>


    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/sweetalert2.js"></script>
    <script src="../js/script.js"></script>
    <script src="../js/ajax.js"></script>
</body>

</html>