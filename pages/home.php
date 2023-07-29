<?php
session_start();

if (isset($_SESSION['username'])) {
  $username = $_SESSION['username'];

  // echo "¡Bienvenido, $username!";
} else {
  header("Location: ../index.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/home.css">
  <title>Home/Loteria</title>
  <!--Foonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=REM:wght@200&display=swap" rel="stylesheet">
</head>

<body>
  <div id="container">
    <nav id="nav">

      <div class="logo">
        <h1 class="title">Sistema LOTOFACIL</h1>
      </div>

      <ul id="nav-list">
        <li> <a href="#">Inicio</a> </li>
        <li> <a href="./nav-vistas/simuladores.php">Simuladores</a> </li>
        <li> <a href="#">Apuestas</a> </li>
        <li> <a href="#">Video Llamadas</a> </li>
        <li> <a href="#">Tendencias</a> </li>
        <?php

        if ($username == "probando") {
          echo '
            <li> <a href="./nav-vistas/accounts.php">gestão de contas</a> </li>
            ';
        }

        ?>
        <li> <a href="../php/logout.php">Cerrar Sesion</a> </li>
        <li> <img src="../assets/img/tag.png" alt="" class="logo_tag"> </li>
      </ul>
    </nav>
    <div id="home">
      <header id="header">
        <p class="burger">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-list"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
          </svg>
        </p>
        <p>
        </p>
      </header>
      <section id="home-contenido">
        Home
      </section>
    </div>
  </div>

</body>

</html>