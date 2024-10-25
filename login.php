<?php
// Require the constants
require('./app/config/constantes.php');

// if get request logout is set, destroy the session
if (isset($_GET['logout'])) {
    session_start();
    session_destroy();
    header("Location: login.php");
    exit;
}
?>
<!doctype html>
<html lang="es">

<head>
    <title>Inicio de sesión</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="cl-icon/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100%;
            background-color: #f3f4f6;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 1rem;
        }

        .card {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            padding: 2rem;
        }

        .card-header {
            text-align: center;
            color: white;
            margin-bottom: 10px;
            background: linear-gradient(45deg,  rgb(0, 30, 255),  rgb(0, 300, 255));

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

        h1 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        h2 {
            color: white;
            margin-bottom: 1.5rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            padding-top: 10px;
        }

        .input {
            width: 100%;
            padding: 5px;
            border: 1px solid #d1d5db;
            border-radius: 0.25rem;
            font-size: 1rem;
        }

        .submit {
            width: 100%;
            margin-top: 0px;
            padding: 0.75rem;
            background: rgb(0, 50, 270);
            color: white;
            border: none;
            border-radius: 0.25rem;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 1.3s;
        }

        .submit:hover {
            color: white;
            background: rgb(0, 170, 255);
        }

        .card-footer {
            text-align: center;
            margin-top: 1rem;
            background-color: white;
            color: black;
        }

        .link {
            color: #4a5568;
            text-decoration: none;
        }

        .link:hover {
            text-decoration: underline;
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
                <h1>Bienvenido</h1>
                <h2>Inicia sesión para continuar</h2>
            </div>
            <form action="app/login/register.php" class="form-group" method="post">

                <div class="form-group">
                <?php
            if (isset($_GET['error'])) {
                echo "<p class='text-danger'>Email o contraseña incorrectos</p>";
            }
            ?>
                    <label for="email">Nombre de usuario</label>
                    <input type="text" name="email" id="" class="input" placeholder="usuario">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" id="" class="input" placeholder="contraseña">
                </div>
                <button type="submit" class="submit btn mt-4" name="login">Ingresar</button>
            </form>
            <div class="card-footer">
                <p class="footer">¿No tienes cuenta? <a href="registrarse.php" class="link">registrarse</a></p>
            </div>
        </div>
    </div>
</body>

</html>