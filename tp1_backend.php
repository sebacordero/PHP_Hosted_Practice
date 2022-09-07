<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TP1 Backend</title>
</head>
<body>
    
<h2>Potrero Digital 2022</h2>
<h1>TP1 Backend</h1>


<hr>
<br>


<h2>1. Imprima por pantalla: “Hola mundo”.</h2>

<?php
    echo "Hola Mundo";
?>

<hr>
<br>

<h2>2. Cargue en una variable la cadena de caracteres “Hola mundo” y luego la imprima por pantalla.</h2>

<?php 
    //Escribo un mensaje en una variable y luego imprimo el valor de la variable en pantalla
    $mensaje = "Hola Mundo";
    echo $mensaje;
?>

<hr>
<br>

<h2>3. Crear dos variables enteras y mostrar por pantalla operaciones matematicas</h2>
    <h3>Operaciones: la suma, la resta, la multiplicación, la división entera y el resto de la división entera.</h3>

    <?php
//Cargo el valor en las dos variables como enteros (int)
$x_1 = 10;
$x_2 = 20;

print "<h4>Variables</h4>\n";
print "<p>x_1: "."$x_1</p>\n";
print "<p>x_2: ". "$x_2</p>\n";

print "<h4>Operaciones</h4>\n";

//Cargo la suma de ambas variables en una nueva variable
$suma = $x_1 + $x_2;
print "<p>Suma:"."$suma</p>\n";

//Cargo la resta de ambas variables en una nueva variable

$resta = $x_1 - $x_2;
print "<p>Resta: "."$resta</p>\n";

//Cargo la multiplicacion de ambas variables en una nueva variable

$producto = $x_1 * $x_2;
print "<p>Producto: "."$producto</p>\n";

//Cargo la division entera de ambas variables en una nueva variable
$division = $x_1 / $x_2;
print "<p>Division: "."$division</p>\n";

//Cargo el resto de la division entera de ambas variables en una nueva variable
$resto_division = $x_1 % $x_2;
print "<p>Resto division: "."$resto_division</p>\n";

?>

<hr>
<br>

<h2>4. Realizar la transformación de grados Celsius a Fahrenheit, para el valor 20°C y luego lo imprima por pantalla.</h2>


<?php
// Creo la variable Celsius y le cargo el valor dentro
$grados_celsius = 20;
$grados_farenheit = ($grados_celsius * 1.8) + 32;


print "<h3>Conversion</h3>\n";
print "<p>Grados Celsius: "."$grados_celsius</p>\n";
print "<p>Grados Farenheit: </p>\n";
echo $grados_farenheit
?>



<hr>
<br>
<h2>5. Implementar algoritmos que permitan:</h2>

<h3>a) Calcular el perímetro y el área de un rectángulo, dado que su base es 18cm y su altura 12cm. </h3>

<?php
$base_cm = 18;
$altura_cm = 12;

$perimetro_rectangulo = (2 * $base_cm) + (2 * $altura_cm);
$area_rectangulo = $base_cm * $altura_cm;

print "<h4>Calculo</h4>\n";
print "<p>Perimetro de Rectangulo: "."$perimetro_rectangulo</p>\n";
print "<p>Area de Rectangulo: "."$area_rectangulo</p>\n";

?>

<h3>b) Calcular el perímetro y el área de un círculo dado que su radio es de 30cm.</h3>

<!--
define("PI", 3.14159);
print "<p>El valor de pi es " . PI . "</p>\n";
-->

<?php
$radio_cm = 30;

$perimetro_circulo = round(2 * 3.14159 * $radio_cm,2);
$area_circulo = round(3.14159 * ($radio_cm ** 2),2);

print "<h4>Calculo</h4>\n";
print "<p>Perimetro del Circulo: "."$perimetro_circulo</p>\n";
print "<p>Area del Circulo: "."$area_circulo</p>\n";

?>

<hr>
<br>

<h3> Trabajo Practico realizado por:</h3>
<h1> SIC </h1>


</body>
</html>