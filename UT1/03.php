<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios 03</title>
</head>
<!-- Escribe un programa que muestre por pantalla 10 palabras en inglés junto a 
su correspondiente traducción al castellano. Las palabras deben estar distribuidas en dos columnas. 
Utiliza la etiqueta <table> de HTML. -->
<body>
    <?php
        echo "<table>
                <tr>
                    <th>Inglés</th>
                    <th>Español</th>
                </tr>
                <tr>
                    <td>Hello</td>
                    <td>Hola</td>
                </tr>
                <tr>
                    <td>Goodbye</td>
                    <td>Adiós</td>
                </tr>
                <tr>
                    <td>Purple</td>
                    <td>Morado</td>
                </tr>
                    <td>Blue</td>
                    <td>Azul</td>
                <tr>
                    <td>Pink</td>
                    <td>Rosa</td>
                </tr>
                <tr>
                    <td>Red</td>
                    <td>Rojo</td>
                </tr>
                <tr>
                    <td>Yellow</td>
                    <td>Amarillo</td>
                </tr>
                <tr>
                    <td>Green</td>
                    <td>Verde</td>
                </tr>
                <tr>
                    <td>Grey</td>
                    <td>Gris</td>
                </tr>
                <tr>
                    <td>White</td>
                    <td>Blanco</td>
                </tr> 
                    
            </table>"
    ?>
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
    </style>
</body>
</html>