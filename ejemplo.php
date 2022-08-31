<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

<h1>Ejercitando</h1>

<?php 
//Escribo un mensaje en una variable y luego imprimo el valor de la variable en pantalla
$mensaje = "Hola Mundo";
echo $mensaje;
?>

<hr>
<br>

<?php
//Cargo el valor del precio en las dos variables como enteros (int)
$manzanas = 90;
$naranjas = 120;

//Cargo la suma de ambas variables en una nueva variable (al ser dos int, el resultado es un int)
$total = $manzanas + $naranjas;

//Muestro en pantalla el valor en la suma cargado en la nueva variable 
echo $total;
?>

<hr>
<br>

<?php
//Testeo mostrar en pantalla directamente el valor de la suma de las dos variables
echo $manzanas + $naranjas;
?>

</body>
</html>