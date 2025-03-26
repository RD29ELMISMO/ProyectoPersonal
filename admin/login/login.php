<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./estilosLogin.css">
   
</head>

<body>
    <div class="main">
        <input type="checkbox" name="" id="chk" aria-hidden="true">
        <div class="iniciar">
            <form action="" id="iniciar" method="POST">
                <label for="chk" aria-hidden="true">registrarse</label>
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="password" placeholder="Contraseña" required="">
                <input type="submit" name="login" value="Login">
            </form>
            <p class="text-center" style="position: absolute;left:20px;top:420px">¿No tienes cuenta? Haz click en Cancelar</p>
            <a href="../../index.php" style="position: absolute;left:20px;top:370px;text-decoration:none">Cancelar</a>
        </div>
        <div class="inscribirse">
            <form action="" id="inscribir" method="post">
                <label for="chk" aria-hidden="true">inscribirse</label>
                <input type="text" name="nom" placeholder="Usuario" required="">
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="password" placeholder="Contraseña" required="">
                <input type="submit" value="Incribirse">
            </form>
        </div>
    </div>
    <script src="./scriptLogin.js"></script>
</body>

</html>