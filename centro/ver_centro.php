<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Centro</title>
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .center-details {
            padding: 30px;
            margin-top: 20px;
        }
        .center-header {
            position: relative;
            height: 300px;
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 30px;
        }
        .center-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0,0,0,0.5);
        }
        .center-header-content {
            position: relative;
            z-index: 1;
        }
        .center-info {
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            padding: 30px;
            margin-bottom: 30px;
        }
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin: 30px 0;
        }
        .stat-card {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }
        .stat-card i {
            font-size: 2rem;
            color: #007bff;
            margin-bottom: 10px;
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }
        .gallery img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            transition: transform 0.3s;
        }
        .gallery img:hover {
            transform: scale(1.05);
        }
        .back-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: #007bff;
            color: white;
            padding: 15px 25px;
            border-radius: 30px;
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            transition: transform 0.3s;
        }
        .back-btn:hover {
            transform: translateY(-3px);
            color: white;
        }
    </style>
</head>
<body>
    <div class="center-header" style="background-image: url('../img/')">
        <div class="center-header-content">
            <h1>MOtivado</h1>
            <p class="lead">arw</p>
        </div>
    </div>

    <div class="container center-details">
        <div class="center-info">
            <div class="row">
                <div class="col-md-8">
                    <h2>Información del Centro</h2>
                    <p class="lead">Informacion</p>
                    
                    <div class="contact-info mt-4">
                        <h4>Información de Contacto</h4>
                        <p><i class='bx bx-user'></i> Representante: Representante</p>
                        <p><i class='bx bx-phone'></i> Teléfono: 2224366</p>
                        <p><i class='bx bx-envelope'></i> Email: a@gmail.com</p>
                        <p><i class='bx bx-map'></i> Dirección: Malabo</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="../img/" alt="" 
                         class="img-fluid rounded">
                </div>
            </div>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <i class='bx bxs-graduation'></i>
                <h3>150+</h3>
                <p>Estudiantes</p>
            </div>
            <div class="stat-card">
                <i class='bx bxs-group'></i>
                <h3>25</h3>
                <p>Profesores</p>
            </div>
            <div class="stat-card">
                <i class='bx bx-book'></i>
                <h3>15</h3>
                <p>Programas</p>
            </div>
            <div class="stat-card">
                <i class='bx bx-trophy'></i>
                <h3>98%</h3>
                <p>Satisfacción</p>
            </div>
        </div>

        <h3 class="mt-5 mb-4">Galería de Imágenes</h3>
        <div class="gallery">
            <img src="../img/aula1.jpg" alt="Aula">
            <img src="../img/lab1.jpg" alt="Laboratorio">
            <img src="../img/biblioteca.jpg" alt="Biblioteca">
            <img src="../img/deportes.jpg" alt="Área Deportiva">
        </div>
    </div>

    <a href="./index.php" class="back-btn">
        <i class='bx bx-arrow-back'></i> Volver
    </a>

    <script src="../js/bootstrap.min.js"></script>
</body>
</html>