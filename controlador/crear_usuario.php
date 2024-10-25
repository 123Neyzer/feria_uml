<?php
// Crear una cuenta
if (isset($_POST['btnregistrar'])) {
    // Get form data
    $name = trim($_POST['name']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $pass = trim($_POST['pass']);

    // Verificar que todos los campos estén llenos
    if (empty($name) || empty($phone) || empty($email) || empty($pass)) {
        echo "<div class='alert alert-danger'>Por favor, llene todos los campos</div>";
    } else {
        // Procesar el registro solo si todos los campos están llenos
        $name = htmlspecialchars($name);
        $phone = htmlspecialchars($phone);
        $email = htmlspecialchars($email);
        $pass = htmlspecialchars($pass);
        $hash = password_hash($pass, PASSWORD_BCRYPT);

        $sql = $conexion->query("INSERT INTO users (name, phone, email, password) VALUES ('$name', '$phone', '$email', '$hash')");
        if ($sql == 1) {
            // Si el usuario se creó exitosamente, iniciamos sesión
            session_start();
            $_SESSION['name'] = $name;
            $_SESSION['phone'] = $phone;
            $_SESSION['email'] = $email;
            
            // Redirigimos al index.php
            header("Location: index.php");
            exit();
        } else {
            echo "<div class='alert alert-danger'>Error al registrar el usuario</div>";
        }
    }
}
?>