<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>taller 1</title>
</head>
<body>
    <h1>Punto 1</h1>
    <form method="get">
        <label> Digite su salario </label> <br>
        <input type="text" name="salario" placeholder="No pongas puntos de separacion "> <br>
        <button type="submit">Enviar salario</button>
    </form>


    <?php
    if ( isset($_GET["salario"])){
        $salario = $_GET["salario"];
        $salud = $salario * 0.08;
        $pension = $salario * 0.08;
        $neto = ($salud + $pension) - $salario;

        echo "<p> Descuento salud es: $salud <p>";
        echo "<p> Descuento pension es: $pension <p>";
        echo "<p> Su salario es: $salario <p>";
        echo "<p> Su salario menos descuento es: $neto <p>";
    }
        
    ?>


<h1>Punto 2</h1>
    <form method="get">
        <label> Digite las dimenciones de un triangualo </label> <br>
        <input type="text" name="base" placeholder="Digite las dimensiones corretas "> <br>
        <input type="text" name="altura" placeholder="Digite las dimensiones corretas  "> <br>
        <button type="submit">Enviar Dimensiones</button>
    </form>

    <?php
    if ( isset($_GET["base"])){
            $base = $_GET["base"];
            $altura = $_GET["altura"];

            $area = ($base*$altura)/2;

            echo "<p> La base del triangulo es: $base </p>";
            echo "<p> La altura del triangulo es: $altura </p>";
            echo "<p> el area del triangulo es: $area </p>";
    }

    ?>


<h1>Punto 3</h1>
    <form method="get">
        <label> Digite los numeros para hacer las operaciones </label> <br>
        <input type="text" name="primero" placeholder="Digite el primero "> <br>
        <input type="text" name="segundo" placeholder="Digite el segundo "> <br>
        <button type="submit">Enviar la operacion</button>
    </form>

    <?php
    if ( isset($_GET["primero"])){
            $primero = $_GET["primero"];
            $segundo = $_GET["segundo"];

            $suma = $primero + $segundo;
            $resta = $primero - $segundo;
            $multiplicacion = $primero * $segundo;
            $divicion = $primero / $segundo;

            echo "<p> La suma es: $suma </p>";
            echo "<p> La resta es: $resta </p>";
            echo "<p> La multiplicacion es: $multiplicacion </p>";
            echo "<p> La divicion es: $divicion </p>";
    }

    ?>

<h1>Punto 4</h1>
    <form method="get">
        <label> Determinar los numeros </label> <br>
        <input type="text" name="PrimerNume" placeholder="Digite el primero "> <br>
        <button type="submit">Enviar la comparacion</button>
    </form>

    <?php
    if (isset($_GET["PrimerNume"])){
            $PrimerNume = $_GET["PrimerNume"];
            if(($PrimerNume % 2) == 0 && $PrimerNume > 0 ){
                echo "<p> Es par y es positivo $PrimerNume </p>";
            }else if($PrimerNume < 0){
                echo "<p> Es negativo $PrimerNume </p>";
            }else{
                echo "Es impar";
            }
        }
    ?>


<h1>Punto 5</h1>
    <form method="get">
        <label> Condicionales </label> <br>
        <input type="text" name="numero1" placeholder="Digite el primero "> <br>
        <input type="text" name="numero2" placeholder="Digite el segundo "> <br>
        <button type="submit">Enviar la condiconales</button>
    </form>

    <?php
    if (isset($_GET["numero1"])){
        $PrimerNume = $_GET["numero1"];
        $SegundoNume = $_GET["numero2"];
        if($PrimerNume > $SegundoNume && $SegundoNume < $PrimerNume ){
            echo "<p>El numero mayor es:  $PrimerNume  <br> y el numero menor es: $SegundoNume</p>";
            
        }else{
            echo "<p>El numero mayor es:  $SegundoNume y el numero menor es: $PrimerNume</p>";
        }
        }
    ?>
</body>
</html>