<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TP3 Backend</title>
</head>
<body>
    
<h2>Potrero Digital 2022</h2>
<h1>TP4 Backend </h1>
<em>Matrices</em>


<hr>
<br>


<h2>1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro.</h2>


<?php
//Primero armo la matriz
$matriz1 = [0,2,4,6,8,10];

//Ahora los muestro uno debajo de otro con un loop
foreach ($matriz1 as $valor) {
    print "<p>$valor"."</p>\n";
}
print ("<br>FIN\n");
?>

<hr>
<br>

<h2>Ejercicio 2.</h2>

<ol>
    <li>Crear un array.</li>
    <li>Introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la matriz. </li>
    <li>Mostrar el esquema del array con print_r()</li>
</ol>


<?php
//1 y 2
$matriz2 = ["Pedro", "Ana", "34", "1"];
//3
    print_r($matriz2);
?>

<hr>
<br>

<h2>3. Crear un array asociativo</h2>
  
<h3>Crear un array asociativo e introducir los siguientes valores:</h3>

<ul> 
    <li>Nombre: Pedro</li>
    <li>Apellido: Torres</li>
    <li>Dirección: Av. Mayor 3703</li>
    <li>Teléfono: 1122334455</li>
</ul>

<?php
//Creo el array asociativo

$matriz3=[
    'nombre' => "Pedro",
    'apellido' => "Torres", 
    'Dirección' => "Av. Mayor 3703", 
    'Teléfono' => "1122334455"
];
//Muestro la matriz
print_r($matriz3);

print("<p>FIN</p>");
?>

<hr>
<br>

<h2>Ejercicio 4. Ciudades </h2>

<ul>
    <li>Crear un array introduciendo las ciudades:</li>
    <ul>
        <li>Madrid, </li>
        <li>Barcelona, </li>
        <li>Londres,</li>
        <li>New York,</li>
        <li>Los Ángeles</li>
        <li>Chicago</li>
        , sin asignar índices al array. 
    </ul>
    <li>A continuación, muestra el contenido del array. </li>
    <li>Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.</li>
</ul>

<h3>Resolución</h3>
<?php

//Armo matriz con las ciudades
$matriz4 = [
    "Madrid",
    "Barcelona",
    "Londres",
    "New York",
    "Los Ángeles",
    "Chicago"
];

//Ahora los muestro uno debajo de otro con un loop
for ($i = 0; $i<=5 ; $i++) {
    print "<p>La ciudad con el índice $i tiene el nombre: $matriz4[$i]</p>\n" ;
}

print ("<br>FIN\n");
?>

<hr>
<br>

<h2>5. Mostrar la suma de los números de 1 a 20. </h2>

<ul>
    <li>Repite el ejercicio anterior pero ahora se ha de crear índices,</li>
    <ul>
        <li> MD para Madrid, </li>
        <li> BCL para Barcelona, </li>
        <li> LD para Londres, </li>
        <li> NY para New York, </li>
        <li> LA para Los Ángeles y</li>
        <li> CCG para Chicago.</li>
    </ul>
    <li>Ejemplo: El índice de Madrid es MD.</li>
</ul>

<?php
//Armo matriz con las ciudades
$matriz5 = [
    'MD' => "Madrid",
    'BCL' => "Barcelona",
    'LD' => "Londres",
    'NY' => "New York",
    'LA' => "Los Ángeles",
    'CCG' => "Chicago"
];

//Ahora armo matriz de los indices
$indices = [
    "MD",
    "BCL",
    "LD",
    "NY",
    "LA",
    "CCG"
];

//Los muestro uno debajo de otro con un loop
for ($i = 0; $i<=5 ; $i++) {
    $indice = $indices[$i];
    print "<p>El índice de $matriz5[$indice] es $indice</p>\n";
}

print ("<br>FIN\n");
?>


<hr>
<br>



<h3> Trabajo Practico realizado por:</h3>
<h1> SIC </h1>


</body>
</html>