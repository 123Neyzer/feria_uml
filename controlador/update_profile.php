<?php
// Require the constants
require('./app/config/constantes.php');
// Verificar si el usuario está logueado
require(ROOT_PATH . DS . 'app' . DS . 'login' . DS . 'verificar-login.php');

// Función para obtener los datos del usuario
function getUserData($conn, $id_usuario) {
    $stmt = $conn->prepare("SELECT name, email, location, bio, website FROM users WHERE id = ?");
    $stmt->execute([$id_usuario]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// Función para editar valores en la base de datos
function editarPerfil($conn, $id_usuario, $name, $email, $location, $bio, $website) {
    $stmt = $conn->prepare("UPDATE users SET name = ?, email = ?, location = ?, bio = ?, website = ? WHERE id = ?");
    return $stmt->execute([$name, $email, $location, $bio, $website, $id_usuario]);
}

$id_usuario = $_SESSION['id']; // Asumiendo que almacenas el ID del usuario en la sesión
$mensaje = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $bio = $_POST['bio'];
    $website = $_POST['website'];

    $result = editarPerfil($conn, $id_usuario, $name, $email, $location, $bio, $website);

    if ($result) {
        $mensaje = "¡Perfil actualizado con éxito!";
    } else {
        $mensaje = "Error al actualizar el perfil. Por favor, intenta de nuevo.";
    }
}

$userData = getUserData($conn, $id_usuario);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Perfil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 10px;
        }
        input, textarea {
            margin-bottom: 15px;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        textarea {
            height: 100px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .mensaje {
            text-align: center;
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 4px;
        }
        .exito {
            background-color: #d4edda;
            color: #155724;
        }
        .error {
            background-color: #f8d7da;
            color: #721c24;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Editar Perfil</h1>
        <?php if ($mensaje): ?>
            <div class="mensaje <?php echo strpos($mensaje, 'Error') !== false ? 'error' : 'exito'; ?>">
                <?php echo $mensaje; ?>
            </div>
        <?php endif; ?>
        <form method="POST">
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($userData['name']); ?>" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($userData['email']); ?>" required>

            <label for="location">Ubicación:</label>
            <input type="text" id="location" name="location" value="<?php echo htmlspecialchars($userData['location']); ?>">

            <label for="bio">Biografía:</label>
            <textarea id="bio" name="bio"><?php echo htmlspecialchars($userData['bio']); ?></textarea>

            <label for="website">Sitio web:</label>
            <input type="url" id="website" name="website" value="<?php echo htmlspecialchars($userData['website']); ?>">

            <input type="submit" value="Guardar Cambios">
        </form>
    </div>
</body>
</html>