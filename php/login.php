<?php

session_start();

require_once 'database.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = :username AND password = :password";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);

$stmt->execute();

if ($stmt->rowCount() > 0) {
    $_SESSION['username'] = $username;

    header("location: ../pages/home.php");
    exit;
} else {
    // Usuario no encontrado, mostrar mensaje de error y redireccionar
    echo '
         <script>
             alert("Usuario no existe o contraseña incorrecta, por favor verifique los datos introducidos");
             window.location = "../index.php";
         </script>
    ';

    exit;
}
?>