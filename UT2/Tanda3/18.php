<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19</title>
</head>
<!-- Escribe un programa que obtenga los números enteros comprendidos entre dos números introducidos por teclado y validados como distintos, 
el programa debe empezar por el menor de los enteros introducidos e ir incrementando de 7 en 7. -->
<body>
    <h2>En este programa vamos enseñarte los números comprendidos en el rango entre el primer número introducido y el segundo, siempre y cuando sean distintos</h2> 
    <form name="input" action="18.php" method="post">   
            Introduce un número: <input type="number" name="n" required><br>
            Introduce un número: <input type="number" name="n2" required><br>
            <input type="submit" value="Enviar">
    </form>
    <?php
        if(isset($_POST["n"]) and isset($_POST["n2"])){
            $n1 = $_POST["n"];
            $n2 = $_POST["n2"];
            if($n1 != $n2){
                if($n2<$n1){
                    $n1 = $_POST["n2"];
                    $n2 = $_POST["n"];
                }
                for($i=$n1;$i<=$n2;$i+=7){
                    echo "$i <br>";
                }
            }else{
                echo "No has introducido dos número distintos";
            }
            
        }
    ?>
    <a href="18.php">>> Volver</a>
</body>
</html>