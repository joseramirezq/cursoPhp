<?php
/*Creacion de variables*/
$variable = "Hello Word";
$variablenumero = 1993;

//cada letra en muscula o minuscula cuenta
$numero = 123;
$NUMERO = 456;
$Numero = 789;

//comillas o comilla simple
$dia = "Lunes";
$Dia = 'Martes';

//como saber que tipo de variable es
echo var_dump($dia); //string(5) "Lunes"
echo "El dia de hoy es $Dia";
echo 'El dia de hoy es $dia'; //cuando incluye comiilas simples no muestra la comiilla

//tipos de datos
//enteros
$numeros = 123456;
$numerosnegativo = -464;
echo $numerosnegativo;

//decimal float
$decimal = 1.45;
echo $decimal;

/*Simbolos secuencias de escape

\n->salto de linea
\ comillas dobles
\$ -> muestra el simbolo dolar
\t ->tabular

 */

/*cancanetacion*/
$a = "Jose Luis";
$b = "Ramirez";

echo $a . "-" . $b;
echo $a . $b;
echo "\n";

//hipervinculo, html
echo "<a href='http://google.com'>" . $a . " " . $b . "</a>";
echo "<br>";

//boleanos
$c = 10;
$false = false;
$true = true;

if ($c < 11) {
    echo "11 es mayor " . $c;
} else {
    echo "11 es menor " . $c;
}

//convertir variables
echo "<br>";
$d = 1.65;
echo (int)$d;
var_dump($d);

?>