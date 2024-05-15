<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planteles</title>
    <link rel="stylesheet" type="text/css" href="estilo.css"/>

</head>

<body>
    <header>
        <ul>
            <li><img src="./componentes/logo_code.png" alt="logo" class="logo"></li>
            <li><a href="index.php"> Inicio </a> </li>
            <li><a href="somos.php"> Somos </a> </li>
            <li><a href="avisos.php"> Avisos </a></li>
            <li><a href="planteles.php"> Planteles </a> </li>
            <li><a href="personal.php"> Personal </a></li>
            <li><a href="eventos.php"> Eventos </a></li>
            <li><a href="cerrar.php" class="cerrar"> Cerrar </a> </li>
        </ul>
    </header>
    <div class="planteles">
    <div class="plantel">
        <h3 >CODE</h3>
        <img src="./componentes/CODE.png" alt="CODE"><br>
        <a  target="_blank" href="https://maps.app.goo.gl/hPFWMgs86cx9JsBc7" class="ubicacion">Como llegar </a>
    </div>
    <div class="plantel">
        <h3>CODE Paradero</h3>
        <img src="./componentes/Code_paradero.png" alt="Code_aradero"><br>
        <a target="_blank" href="https://maps.app.goo.gl/YhRhJ5aVWMEC2esx8" class="ubicacion">Como llegar</a>
    </div>
    </div>