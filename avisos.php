<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avisos</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" />

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
    <h2>Avisos</h2>
    <div class="avisos">
        <h3>Convocatoria Abierta para Pruebas de Selección</h3>
        <p>
            ¡Atención atletas! La Escuela para Atletas del
            CODE Jalisco abre sus puertas para nuevas pruebas de selección.
            Si tienes talento y pasión por el deporte, ¡esta es tu oportunidad!
            Consulta las fechas y requisitos en nuestro sitio web.
        </p>
    </div>
    <div class="avisos">
        <h3>Cambios en los Horarios de Entrenamiento</h3>
        <p>
            Aviso importante: Se informa a todos los atletas que los horarios de
            entrenamiento de esta semana han sido modificados. Por favor, revisa
            la nueva programación en la cartelera de la escuela o en nuestra
            aplicación móvil.
        </p>
    </div>
    <br>
    <div class="calendarios">
        <img src="./componentes/calendario.png" alt="calendario" class="calendario">
        <table>
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Evento</th>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>3 de Junio</td>
                    <td>Competencia de Atletismo</td>
                   
                </tr>
                <tr>
                    <td>10 de Junio</td>
                    <td>Pruebas de Natación</td>
                     </tr>
                <tr>
                    <td>15 de Junio</td>
                    <td>Taller de Nutrición Deportiva</td>
                    </tr>
                <tr>
                    <td>20 de Junio</td>
                    <td>Competencia de Fútbol</td>
                    </tr>
            </tbody>
        </table>
    </div>
</body>