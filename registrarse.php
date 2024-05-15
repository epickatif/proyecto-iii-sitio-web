<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" />

</head>

<body>
    <header>
        <ul>
            <li><img src="./componentes/logo_code.png" alt="logo" class="logo"></li>
            <li><a href="index.php"> Inicio </a> </li>
            <li><a href="somos.php"> somos </a> </li>
            <li><a href="avisos.php"> Avisos </a></li>
            <li><a href="planteles.php"> Planteles </a> </li>
            <li><a href="personal.php"> Personal </a></li>
            <li><a href="eventos.php"> Eventos </a></li>
            <li><a href="cerrar.php" class="cerrar"> Cerrar </a> </li>
        </ul>
    </header>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="formato">
        <h1>Registrate</h1>
        <br>
        <label for="email" id="referencia">Nuevo usuario:</label><br>
        <input type="text" id="cuadro" name="email"><br><br>
        <label for="password" id="referencia">Nueva contraseña:</label><br>
        <input type="password" id="cuadro" name="password"><br><br>
        <label for="password" id="referencia"> Confirma contraseña:</label><br>
        <input type="password" id="cuadro" name="password"><br><br>
        <input type="submit" name="registrar" value="Registrar" id="boton"><br>
        <?php
        if (isset($_POST['registrar'])) {
            if (empty($_POST['email']) || empty($_POST['password'])) {
                echo '<h3> Ingresa datos  </h3>';
            } else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                echo '<h3> Ingresa email valido </h3>';
            } else {
                $archivo = 'usuario.json';
                $json = file_get_contents($archivo);
                $archivojson = (json_decode($json, true));
                $archivojson[$_POST['email']] = $_POST['password'];
                file_put_contents($archivo, json_encode($archivojson));
                echo '<h2> Guardado Exitoso </h2>';
            }
        }
        ?>
    </form>

</body>

</html>