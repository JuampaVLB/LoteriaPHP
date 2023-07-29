<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Register/Loteria</title>
</head>

<body>
    <div id="container">
        <form action="../php/register.php" id="form" method="POST">
            <div class="logo">
                <img id="logo" src="../assets/img/logo.png" alt="Logo" />
            </div>
            <input type="text" name="username" id="username" placeholder="Usuario ou E-mail">
            <input type="password" name="password" id="password" placeholder="Senha">

            <input type="submit" value="Registar conta">
        </form>
    </div>
</body>

</html>