<?php
// Incluye el archivo de conexión
require_once 'database.php';

if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (strlen($username) < 5) {
        echo '
        <script>
            alert("El nombre de usuario o password debe tener al menos 5 caracteres.");
            window.location = "../index.php";
        </script>
    ';
        die;
    }

    if (strlen($password) < 7) {
        echo '
        <script>
            alert("la password debe tener al menos 8 caracteres.");
            window.location = "../index.php";
        </script>
    ';
        die;

    }

    // $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";

    $sql = "INSERT INTO users (username, password, created_at) VALUES (:username, :password, NOW())";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {

        echo '
        <script>
            alert("Los datos se han insertado correctamente en la base de datos.");
            window.location = "../index.php";
        </script>
    ';
        die;

    } else {
        echo '
        <script>
            alert("Error al ejecutar la consulta.");
            window.location = "../index.php";
        </script>
        ';
        die;
    }
} else {
    echo '
    <script>
        alert("Por favor, completa todos los campos del formulario.");
        window.location = "../index.php";
    </script>
';
    die;
}

?>