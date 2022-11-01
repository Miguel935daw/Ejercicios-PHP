<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>
<!-- Realiza un programa que sume los 100 números siguientes a un número entero y positivo introducido por teclado. 
Se debe comprobar que el dato introducido es correcto (que es un número positivo). -->
<body>
    <h1>En este programa vamos sumar los 100 números siguientes al número que introduzcas</h1> 
    <form name="input" action="17.php" method="post">   
            Introduce un número: <input type="number" name="n" min="0" required><br>
            <input type="submit" value="Enviar">
    </form>
    <?php
        if(isset($_POST["n"]) and $_POST["n"]>=0){
            $numero = $_POST["n"];
            $total = $numero;
            for($i=$numero;$i<=100;$i++){
                $total+=$i;
            }
            echo "El resultado de la suma es $total";
        }
    ?>
    <a href="17.php">>> Volver</a>
</body>
</html>