<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/accounts.css">
    <title>Home/Loteria</title>
    <!--Foonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=REM:wght@200&display=swap" rel="stylesheet">
</head>

<body>
    <div id="container">
        <?php
        require_once '../../php/database.php';

        $sql = "SELECT * FROM users";
        $stmt = $conn->query($sql);

        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo '<div class="user-card">';
                echo "<p>Nombre de usuario: " . $row['username'] . "</p>";
                echo "<p>Contraseña: " . $row['password'] . "</p>";
                echo "<p>Contraseña: " . $row['created_at'] . "</p>";
                echo '</div>';
            }
        } else {
            echo "No se encontraron usuarios.";
        }
        ?>
    </div>
</body>

</html>