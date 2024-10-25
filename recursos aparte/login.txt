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
        * {
  margin: 0;
  padding: 0;
  font-family: arial;
  color: #fff;
}
body {
  width: 100vw;
  height: 100vh;
  background: #ffffff;
  display: grid;
  justify-content: center;
  align-content: center;
}
::-webkit-input-placeholder {
  color: #eee;
}
.wrapper {
  position: relative;
  width: 800px;
  height: auto;
  display: grid;
  grid-template-columns: 1fr 1fr;
  border: 3px solid #76bdff;
  box-shadow: 0 0 50px 0 #099dff;
}

.form {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.title {
  padding-top: 40px;
  padding-bottom: 30px;
  font-size: 17px;
  color:#000000;
}
.inp {
  padding-bottom: 10px;
  border-bottom: 2px solid #eee;
}
.input {
  border: none;
  outline: none;
  background: none;
  width: 260px;
  margin-top: 10px;
  padding-right: 10px;
  font-size: 14px;
  color: rgb(0, 4, 255);
}
.submit {
  border: none;
  outline: none;
  width: 288px;
  margin-top: 30px;
  padding-top: 10px;
  padding: 10px 0;
  font-size: 15px;
  border-radius: 40px;
  letter-spacing: 1px;
  cursor: pointer;
  color: #ffffff;
  background: linear-gradient(45deg,  rgb(0, 4, 255), #76bdff);
}
.footer {
  margin-top: 30px;
  margin-bottom: 30px;
  padding-left: 20px;
  letter-spacing: 0.5px;
  font-size: 14px;
  color: #000000;
}
.link {
  color: #76bdff;
  text-decoration: none;
  padding-left: 5px;
}
.banner {
  position: absolute;
  top: 0;
  right: 0;
  width: 460px;
  height: 326px;
  background: linear-gradient(to right, rgb(0, 4, 255), #76bdff);
  clip-path: polygon(0 0, 100% 0, 100% 100%, 60% 100%);
  padding-right: 60px;
  text-align: right;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-end;
}

.wel_text {
  font-size: 40px;
  margin-top: -50px;
  line-height: 50px;
}
.para {
  margin-top: 10px;
  font-size: 18px;
  line-height: 24px;
  letter-spacing: 1px;
}

.fondonavegacion{
  color: rgb(255, 255, 255);
  border: none;
  padding: 5px 10px;
  border-radius: 5px;
  box-shadow: 4px 4px 2px 1px rgba(0, 0, 0, 0.2);
}
    </style>
</head>

<body>
    <div class="wrapper">
        <form action="app/login/register.php" class="form" method="post">
        <h3 class="title">Crear usuario Nuevo</h3>
        <?php
            if (isset($_GET['error'])) {
                echo "<p class='text-danger'>Email o contraseña incorrectos</p>";
            }
            ?>
            <div class="inp">
                <input type="text" name="email" id="" class="input" placeholder="usuario">
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="inp">
                <input type="password" name="password" id="" class="input" placeholder="contraseña">
                <i class="fa-solid fa-lock"></i>
            </div>
            <button type="submit" class="submit btn mt-4" name="login">Ingresar</button>
            <p class="footer">¿No tienes cuenta? <a href="registrarse.php" class="link">registrarse</a></p>
        </form>
        <div></div>
        <div class="banner">
            <h1 class="wel_text">Bienvenid@</h1><br>
            <p class="para"></p>
        </div>
    </div>

</body>

</html>