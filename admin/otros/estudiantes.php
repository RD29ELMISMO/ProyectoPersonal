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

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary ps-3 ms-5 mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class='bx bxs-user'><br></i>Nuevo Estudiante
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
                        <!-- formulario -->
                        <form action="" method="post" id="formEstudiante" enctype="multipart/form-data">
                            <div class="img">
                                <img src="" id="avatar" alt="">
                                <input type="file" name="foto" id="cambiarAvatar">
                                <label for="exampleFormControlInput1" class="form-label">Foto</label>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nombre Estudiante</label>
                                <input type="text" class="form-control" name="estudiante_n" id="estudiante_n" placeholder="Arsenio">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Apellido</label>
                                <input type="text" class="form-control" name="estudiante_a" id="estudiante_a" placeholder="Perez Yhoni">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">edad</label>
                                <input type="number" class="form-control" name="estudiante_edad" id="estudiante_edad" placeholder="23">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Tutor</label>
                                <input type="text" class="form-control" name="tutor" id="tutor" placeholder="Manuel Lohoso">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Telf_Tutor</label>
                                <input type="text" class="form-control" name="tutor_telf" id="tutor_telf" placeholder="+240 222 090 756">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Ubicacion</label>
                                <input type="text" class="form-control" name="ubicacion" id="ubicacion" placeholder="San Valentin">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                            </div>
                            <input type="submit" class="btn btn-primary" name="guardar" id="guardar" value="Guardar">
                        </form>


                        <!-- fin formulario -->
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
            <h2 class="text-center">Estudiantes</h2>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th class="text-center">Foto</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Apellidos</th>
                        <th class="text-center">Edad</th>
                        <th class="text-center">Tutor</th>
                        <th class="text-center">Telf_Tutor</th>
                        <th class="text-center">Ubicacion</th>
                        <th class="text-center">Email</th>
                        <th colspan="3" class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody id="tabla">
                    <tr>
                        <td class="text-center img">
                            <img src="" alt="perfil">
                            <input type="file" name="" id="">
                        </td>
                        <td class="text-center">Arsenio</td>
                        <td class="text-center">Perez Yhoni</td>
                        <td class="text-center">15</td>
                        <td class="text-center">Marcos Perez Benga</td>
                        <td class="text-center">222 435 655</td>
                        <td class="text-center">Semu</td>
                        <td class="text-center">marcos@gmail.com</td>
                        <td class="text-center">
                            <a href="">
                                <i class='bx bx-revision icon'></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="">
                                <i class='bx bx-low-vision'></i>
                            </a>
                        </td>
                        <td class="text-center">
                            <a href="">
                                <i class='bx bxs-trash-alt icon'></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>


    <!-- js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    

    <script src="../js/script.js"></script>
    <script src="../js/estudiante.js"></script>
</body>

</html>