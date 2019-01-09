<?php
echo 5 * 500;
$f = 454;
$g = 45;

echo $f * $g;
echo "<br>";
echo $f ** $g; //exponentes

//asignaicones
$h = 5;
$t = 78;
echo "<br>";
$h += 45;
$t *= 45;
echo $h;
echo "<br>";
echo $t;

$z = 45;
$x = 48;
echo "<br>";
if ($z == $x) {
    echo "Es verdadero";
} else {
    echo "Es falso";
}//comparaciones(==)

echo "<br>";
$aa = 7;
$bb = 7;

echo $aa == $bb ? "Es igual" : "No es igual";

//si exixstiera muestralo
echo "<br>";
$cc = 45;
echo $cc ?? $dd ?? "No existe";


/*icrmento de decremento, posencremento */
$ee = 5;

while ($ee < 10) {
   echo $ee;
    echo "<br>";
    $ee++;

}

$ee=5;
$ff=5;

echo "<br>";
if($ee===$ff){
    echo "Correcto";
}
else{
    echo "incorrecto";
}

/*cualquiera que sea correcto lo acepta pero no los dos, siempre excluye uno de los dos */
echo "<br>";
if($ee==5 xor $f==4){
    echo "correcto";
}

//cualwuiera de los dos
echo "<br>";
if($ee==5 xor $f==4){
    echo "correcto";
}



?>