<?php
// Require the constants
require('./app/config/constantes.php');

// if get request logout is set, destroy the session
if (isset($_GET['login'])) {
    session_start();
    session_destroy();
    header("Location: index.php");
    exit;
}
?>
<!doctype html>
<html lang="es">
<head>
    <title>Registrarse</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />

    <!-- implementar tailwind -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <link rel="stylesheet" href="cl-icon/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
 body, html {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    height: 100%;
}
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    padding-top: 1rem;
    padding-left: 1rem;
    padding-right: 1rem;
    padding-bottom: 1rem;

}
.card {
    background-color: white;
    border-radius: 0.5rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
    padding: 2rem;
}
.card-header {
    text-align: center;
    margin-bottom: 5px;
    background: linear-gradient(45deg,  rgb(0, 30, 255),  rgb(0, 300, 255));
    color: white;
    border-radius: 5px;
}
.logo {
    width: 64px;
    height: 64px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto 1rem;
}
.logo svg {
    width: 40px;
    height: 40px;
    fill: white;
}


.form-group {
    margin-bottom: 1rem;
}
.label {
    display: block;
    margin-bottom: 0px;
    font-weight: bold;
}
.input, select {
    width: 100%;
    padding-left: 0.5rem;
    border: 1px solid #d1d5db;
    border-radius: 0.25rem;
    font-size: 1rem;
}
.submit {
    width: 100%;
    padding: 0.75rem;
    margin-bottom: 15px;
    background: rgb(0, 50, 270);
    color: white;
    border: none;
    border-radius: 0.25rem;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 1.3s;
}
.submit:hover {
    background: rgb(0, 170, 255);
}

.link {
    color: #4a5568;
    text-decoration: none;
}
.link:hover {
    text-decoration: underline;
}
.card-footer{
    /* alinear al centro */
    text-align: center;
    justify-content: center;
    padding-top: 10px;
    background-color: white;
    
}
    </style>
</head>

<body>
<div class="container">
        <div class="card">
            <div class="card-header">
                <div class="logo">
                <img src="./assets/img/favicon.ico" alt="">
                </div>
                <p>Crear Usuario Nuevo</p>
            </div>
            <form class="form" method="POST">
            <?php
            include "modelo/conexion.php";
            include "controlador/crear_usuario.php";
            ?>
                <div class="form-group">
                    <label for="nombre" class="label">Nombre completo</label>
                    <input for="exampleInputEmail1" type="text" class="input form-control" name="name" placeholder="Nombre">
                    </div>
                 <div class="form-group">
                    <label for="confirm-password" class="label">Telefono</label>
                    <input for="phone" type="text" class="input form-control" name="phone" placeholder="Telefono">
                    </div>
                <div class="form-group">
                    <label for="email" class="label">Correo electrónico</label>
                    <input for="email" type="text" class="input form-control" name="email" placeholder="correo o usuario">
                    </div>  
                
                <div class="form-group">
                    <label for="password" class="label">Contraseña</label>
                    <input type="password" for="pass" class="input form-control" name="pass"placeholder="Contraseña">
                    </div>
             
                
                    <button type="submit" name="btnregistrar" value="ok" class="btnagregar submit btn btn-primary">Registrar</button>
                    </form>
            <div class="card-footer">
            <p class="footer">ya tienes una cuenta <a href="login.php" class="link">Inicia sesión</a></p>
            </div>
        </div>
    </div>
</body>

</html>