<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 08</title>
</head>
<!-- Muestra la tabla de multiplicar de un número introducido por teclado. El resultado se debe mostrar en una tabla (<table> en HTML). -->
<body>
    <form name="input" action="08.php" method="post">
            Introduce un número: <input type="number" name="n1" min=0 max=99999 required><br>
            <input type="submit" value="Enviar">
    </form>
    <?php
        if($_POST){
            $numero = $_POST["n1"];
                echo "<table>
                        <tr>
                            <th>Tabla del $numero</th>
                        </tr>";
            for ($i = 1; $i<=10; $i++){
                $resultado = $numero*$i;
                echo "<tr>
                        <td>$numero x $i = $resultado</td>
                     </tr>";
            }
            echo "</table>";
        }
    ?>
</body>
</html>