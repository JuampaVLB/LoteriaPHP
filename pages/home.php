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
        <div class="info">
        <p><span>Lotofacil</span> - 10 fixas</p>
        <p>Escolha 10 numeros abaixo: </p>
        </div>
        <div class="numbers">
          <button data_number="1">
            1
          </button>
          <button data_number="2">
            2
          </button>
          <button data_number="3">
            3
          </button>
          <button data_number="4">
            4
          </button>
          <button data_number="5">
            5
          </button>
          <button data_number="6">
            6
          </button>
          <button data_number="7">
            7
          </button>
          <button data_number="8">
            8
          </button>
          <button data_number="9">
            9
          </button>
          <button data_number="10">
            10
          </button>
          <button data_number="11">
            11
          </button>
          <button data_number="12">
            12
          </button>
          <button data_number="13">
            13
          </button>
          <button data_number="14">
            14
          </button>
          <button data_number="15">
            15
          </button>
          <button data_number="16">
            16
          </button>
          <button data_number="17">
            17
          </button>
          <button data_number="18">
            18
          </button>
          <button data_number="19">
            19
          </button>
          <button data_number="20">
            20
          </button>
          <button data_number="21">
            21
          </button>
          <button data_number="22">
            22
          </button>
          <button data_number="23">
            23
          </button>
          <button data_number="24">
            24
          </button>
          <button data_number="25">
            25
          </button>
        </div>
      <div class="line"></div>
        <div class="buttons">
          <button id="submit">Gerar Apostas</button>
          <button id="clear">Limpar Campos</button>  
        </div>
      </section>
    </div>
  </div>

  <script>
  let numbers = [];
  const buttons = document.querySelectorAll('.numbers button');
  const submit = document.querySelector('#submit');
  const clear = document.querySelector('#clear');

  buttons.forEach(button => {
    button.addEventListener('click', function(e) {
     if(e.target.style.background == "red") {
      e.target.style.background = "purple";
      let index = numbers.indexOf(e.target.attributes.data_number.value);

      if (index !== -1) {
      numbers.splice(index, 1);
      }
     } else {
      numbers.push(e.target.attributes.data_number.value);
      e.target.style.background = "red";
     }
    });
  });

  submit.addEventListener("click", () => {
  if (numbers.length < 10) {
    alert("Debes elegir al menos 10 números");
  } else {
    fetch("../php/game_1.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({ numbers }),
    })
      .then((response) => response.json()) // Parsear la respuesta JSON
      .then((data) => {
        alert(data);
        const encodedData = encodeURIComponent(JSON.stringify(data));
        window.location.href = `result.php?array=${encodedData}`;
      })
      .catch((error) => {
        console.error("Error al enviar los datos:", error);
      });
  }
});

  clear.addEventListener("click", () => {
    numbers = [];

    buttons.forEach(button => {
    button.style.background = "purple";
  });

  })

</script>

</body>

</html>