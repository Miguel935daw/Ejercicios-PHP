<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 09</title>
</head>
<!-- Realiza un programa que resuelva una ecuación de segundo grado (del tipo ax2 + bx + c = 0). -->
<body>
    <h1>Despeja una ecuación de segundo grado</h1>
          <form name="input" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
               Valor A: <input type="number" name="valorA" /><br>
               Valor B: <input type="number" name="valorB" /><br>
               Valor C: <input type="number" name="valorC" />
               <input type="submit" value="Despejar" name="enviar"/>
          </form>
    <?php
        function ecuacionG2($a,$b,$c){
            $x1 = (($b*-1) + sqrt($b*$b-(4*$a*$c)))/($a*2);
            $x2 = (($b*-1) - sqrt($b*$b-(4*$a*$c)))/($a*2);
            $solucion1 = pow($a*$x1,2) + ($b*$x1) + $c;
            $solucion2 = pow($a*$x2,2) + ($b*$x2) + $c;
            if($solucion1 == 0 and  $solucion2 == 0){
                if($x1!=$x2){
                    return array($x1,$x2);
                }
                else{
                    return $x1;
                }
            }
            elseif($solucion1 == 0 and $solucion2 != 0){
                return $x1;
            }
            elseif($solucion1 != 0 and $solucion2 == 0){
                return $x2;
            }
            else{
                return 0;
            }
        }
        if($_POST){
            $a = $_POST["valorA"];
            $b = $_POST["valorB"];
            $c = $_POST["valorC"];
            $prueba = ecuacionG2($a,$b,$c);
            if (is_array($prueba)){
                echo "<h2>Solución 1: X = $prueba[0]</h2>";
                echo "<h2>Solución 2: X = $prueba[1]</h2>";
            }elseif($prueba!=0){
                echo "<h2>Solución Única: $prueba";
            }else{
                echo "<h2>La ecuación introducida no tiene solución posible</h2>";
            }
        } 
    ?>
</body>
</html>