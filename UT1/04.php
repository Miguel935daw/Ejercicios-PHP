<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios 04</title>
    <!-- Escribe un programa que muestre tu horario de clase mediante una tabla. 
    Aunque se puede hacer íntegramente en HTML (igual que los ejercicios anteriores), 
    ve intercalando código HTML y PHP para familiarizarte con éste último. -->
</head>
<body>
    <style>
        /* Cambios sobre la propia tabla */
        table {
            border-collapse: collapse;
            border: 1px solid #ccc;
        }
        /* Espacio de relleno en celdas y cabeceras */
        td,
        th {
            border: 1px solid #ccc;
            padding: 10px;
        }
        /* Modificación de estilos en cabeceras */
        th {
            background: #000;
            color: #fff;
            text-transform: uppercase;
        }
        /* Modificación de estilos en celdas */
        td {
            text-align: center;
            border: 2px solid #111;
            color: #333;
            font-size: 18px;
        }
        #vacio{
            color:;
        }
    </style>
    <?php
        echo "<table>
        <tr>
            <th>Hora</th>
            <th>Lunes</th>
            <th>Martes</th>
            <th>Miércoles</th>
            <th>Jueves</th>
            <th>Viernes</th>
        </tr>
        <tr>
            <td>8:00-9:00</td>
            <td>Empresas e Iniciativa emprendedora</td>
            <td>Desarollo Web en Entorno Servidor</td>
            <td>Desarollo Web en Entorno Servidor</td>
            <td>Inglés</td>
            <td>Inglés</td>
        </tr>
        <tr>
            <td>9:00-10:00</td>
            <td>Empresas e Iniciativa emprendedora</td>
            <td>Desarollo Web en Entorno Servidor</td>
            <td>Desarollo Web en Entorno Servidor</td>
            <td>Desarollo Web en Entorno Servidor</td>
            <td>Desarollo Web en Entorno Cliente</td>
        </tr>
        <tr>
            <td>10:00-11:00</td>
            <td>Despliegue de aplicaciones Web</td>
            <td>Despliegue de aplicaciones Web</td>
            <td>Desarollo Web en Entorno Cliente</td>
            <td>Desarollo Web en Entorno Servidor</td>
            <td>Diseño de Interfaces Web</td>
        </tr>
            <td>11:30-12:30</td>
            <td>Despliegue de aplicaciones Web</td>
            <td>Despliegue de aplicaciones Web</td>
            <td>Empresas e Iniciativa emprendedora</td>
            <td>Empresas e Iniciativa emprendedora</td>
            <td>Diseño de Interfaces Web</td>
        <tr>
            <td>12:30-13:30</td>
            <td>Desarollo Web en Entorno Servidor</td>
            <td>Diseño de Interfaces Web</td>
            <td>Desarollo Web en Entorno Cliente</td>
            <td>Diseño de Interfaces Web</td>
            <td>Desarollo Web en Entorno Cliente</td>
        </tr>
        <tr>
            <td>13:30-14:30</td>
            <td>Desarollo Web en Entorno Servidor</td>
            <td>Diseño de Interfaces Web</td>
            <td>Desarollo Web en Entorno Cliente</td>
            <td>Diseño de Interfaces Web</td>
            <td>Desarollo Web en Entorno Cliente</td>
        </tr>    
    </table>"
    ?>
</body>
</html>