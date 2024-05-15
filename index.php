<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
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
        <h1>Iniciar sesión</h1>
        <br>
        <label for="email" id="referencia">Usuario:</label><br>
        <input type="text" id="cuadro" name="email" required><br><br>
        <label for="password" id="referencia">Contraseña:</label><br>
        <input type="password" id="cuadro" name="password" required><br><br>
        <a href="registrarse.php"> Registrarse </a><br><br>
        <input type="submit" value="  Iniciar  " id="boton">

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $archivo = 'usuario.json';
            $json = file_get_contents($archivo);
            $archivojson = json_decode($json, true);
            if (array_key_exists($_POST['email'], $archivojson) && $archivojson[$_POST['email']] == $_POST['password']) {
                $_SESSION['loggedin'] = true;
                echo "<h2> Bienvenido <h2>";
             
               
            }

        }


        ?>



    </form>

</body>


</html>