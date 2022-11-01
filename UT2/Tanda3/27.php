<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 27</title>
</head>
<!-- Escribe un programa que muestre, cuente y sume los múltiplos de 3 que hay entre 1 y un número leído por teclado. -->
<body>
    <h2>En este programa vamos a mostrar, contar y sumar los múltiplos de 3 en un rango desde 1 hasta el número que introduzcas</h2> 
    <form name="input" action="27.php" method="post">   
            Introduce un número: <input type="number" min="0" name="n" required><br>
            <input type="submit" value="Enviar">
    </form>
    <?php
        if(isset($_POST["n"])){
            $contador = 0;
            $total = 0;
            $numero = $_POST["n"];
            echo "Múltiplos de 3: ";
            for($i=1;$i<=$numero;$i++){
                if($i%3==0){
                    echo "$i, ";
                    $contador+=1;
                    $total+=$i;
                }
            }
            echo "<br>Cantidad de múltiplos de 3: $contador<br>Suma total de los múltiplos de 3: $total";
        }
    ?>
    <a href="27.php">>> Volver</a>
</body>
</html>