<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ç, initial-scale=1.0">
    <title>Ejercicio 19</title>
</head>
<!-- Realiza un programa que pinte una pirámide por pantalla. 
La altura se debe pedir por teclado mediante un formulario. 
La pirámide estará hecha de bolitas, ladrillos o cualquier otra imagen de las 5 que se deben dar a elegir mediante un formulario. -->
<body>
        <h2>Pirámide</h2>
        <form action="19.php" method="post">
        Altura: <input type="number" name="altura" min="1" max="10" autofocus=""><br>
        Figura base:
            <select name="figura">
                <option value="https://img1.freepng.es/20180731/puj/kisspng-portable-network-graphics-computer-icons-scalable-circulo-preto-5b607e58741048.6980976615330504564754.jpg"
                        style="
                        background-repeat: no-repeat;
                        background-size: 15px;
                        background-position: 1px;
                        padding-left:20px;
                        ">Bolita</option>
                <option value="https://i2.wp.com/www.tecnofibra.com.pe/wp-content/uploads/2019/02/rectangulos-redondeado-png-6.png?ssl=1"
                        style="
                        background-repeat: no-repeat;
                        background-size: 15px;
                        background-position: 1px;
                        padding-left:20px;
                        ">Ladrillo</option>
                <option value="https://cdn-icons-png.flaticon.com/512/826/826912.png"
                        style="
                        background-repeat: no-repeat;
                        background-size: 15px;
                        background-position: 1px;
                        padding-left:20px;
                        ">Pingüino</option>
                <option value="https://i.pinimg.com/736x/35/65/07/356507f1c4adc8bcbb075f9e9deb78e5.jpg"
                        style="
                        background-repeat: no-repeat;
                        background-size: 15px;
                        background-position: 1px;
                        padding-left:20px;
                        ">Piña</option>
                <option value="https://e7.pngegg.com/pngimages/189/56/png-clipart-sunlight-drawing-sun-orange-symbol.png"
                        style="
                        background-repeat: no-repeat;
                        background-size: 15px;
                        background-position: 1px;
                        padding-left:20px;
                        ">Sol</option>
            </select>
            <input type="submit" value="Aceptar">
        </form>
        <?php
            if(isset($_POST["altura"])){
                $espacio = "https://fondosmil.com/fondo/17536.jpg"; #Fondo blanco
                $altura = $_POST["altura"]; 
                $base = 1; #Cantidad por la que empiza la pirámide
                $espacios = $altura; #Cantidad de espacios por línea
                $figura = $_POST["figura"];
                while ($base<=$altura){
                    for($i = 1; $i <= $espacios; $i++){ #Se pintan los espacios y luego la imagen
                        echo "<img src=$espacio width=20>";
                    };
                    $espacios-=1;
                    for($i = 1; $i <= $base; $i++){
                        echo "<img src=$figura width=36>";
                     }
                     $base+=1;
                     echo "<br>";
                 }
            }
        ?>
        <a href="19.php">>> Volver</a>
</body>
</html>