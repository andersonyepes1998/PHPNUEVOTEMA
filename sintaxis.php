<?php

print "<h1>Mi primer codigo php</h1>";

echo "<h2>el mejor programdor</h2>";

$medellin = "La ciudad mas hermosa de colombia";

$ciudad = "Medellin la segunda ciudad mas grande de colombia";

echo $medellin, $ciudad;


#variable boleana

$boleana = true;
echo "Esto es una variable de tipo boleana: $boleana";
var_dump($boleana);
echo "<br><br>";

$boleana2 = false;
var_dump($boleana);
echo "Esto es una variable de tipo boleana: $boleana2";
echo "<br><br>";

$colores = array("rojo","amarillo");
var_dump($colores);
echo "Esto es na variable arreglo: $colores[1]";
echo "<br><br>";

#variable arreglo con Propiedades
$verduras = array("verdura1"=>"lechuga", "verdura2"=>"cebolla <br>"); 
var_dump($verduras);
echo "esto es una variable arreglo con propiedades:$verduras[verdura1]";

#variables de tipo objeto
$frutas = (object)["fruta1"=>"pera","fruta2"=>"manzana <br>"];
echo "Esto es una variable Objeto: $frutas->fruta1";

#funciones sin parametros
function saludo(){
    echo "hola";
}
saludo();

#funciones con parametros
function textos($literatura){
    echo $literatura;
}
textos("poemas");

#condiciones
$a = 5;
$b = 10;

if($a > $b){
    echo "a es mayor que b";
}
else if($a == $b){
    echo "a es igual a b";
}
else{
    echo "a es menor que b";
}


#suiches
$dia = "sabado";

switch($dia){
    case 'sabado':
        echo "voy a estudiar PHP";
        break;

    case 'viernes':
        echo "voy a estudiar javascript";
        break;

    case 'domingo':
        echo "voy a descansar";
         break;

    default: echo "voy a la universidad";     
}

echo "<br><br>";

#ciclo while

$n = 1;

while($n <= 5){
    echo $n;
    $n++;
}

echo "<br><br>";

#ciclo for

for ($i = 0; $i <=5; $i++){
    echo $i;
}

echo "<br><br>";

#suiches mas avanzados


$materias = 'informatica';
switch ($materias) {
    case 'informatica':
        echo 'martes y los miercoles';
        break;
    

    case 'java':
        echo 'miercoles';
        break;

    case 'python':
        echo 'lunes';
        break; 

    default:
        echo "la clase informatica seria el sabado";
        break;
}

?>