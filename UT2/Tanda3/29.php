<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!-- Escribe un programa que muestre por pantalla todos los números 
enteros positivos menores a uno leído por teclado que no sean divisibles 
entre otro también leído de igual forma. -->
<body>
    <h2>Este programa muestra los números menores del primer número introducido que además son divisibles entre el segundo número introducido</h2> 
    <form name="input" action="29.php" method="post">   
        Introduce un número: <input type="number" min="0" name="n" required><br>
        Introduce un número: <input type="number" min="0" name="n1" required><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
        if(isset($_POST["n"]) and isset($_POST["n1"])){
            $numero = $_POST["n"];
            $numero2 = $_POST["n1"];
            for($i=1;$i<$numero;$i++){
                if($i%$numero2==0){
                    echo "$i ,";
                }
            }
        }
    ?>
</body>
</html>