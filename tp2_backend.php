<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TP2 Backend</title>
</head>
<body>
    
<h2>Potrero Digital 2022</h2>
<h1>TP2 Backend</h1>


<hr>
<br>


<h2>1. Crear una variable n y validar que sea un número positivo.</h2>

<?php
//Creo n e imprimo en pantalla su valor
   $n = 1;
   print "<p>n es igual a: " . $n ."</p>\n";

//Testeo si n es positivo
    if ($n > 0) {
        echo $n . " es POSITIVO";
    } else {
        echo $n . " NO es positivo";  
    }
?>

<hr>
<br>

<h2>2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10.</h2>

<?php 
//Asigno valor nuevo a n e imprimo el valor
    $n = 11;
    print "<p>n es igual a: " . $n ."</p>\n";
// Reviso si n esta entre los valores solicitados
   if (($n > 1) & ($n < 10)) {
        echo "es mayor que 1 y menor que 10";
    } else {
        print "<p>$n"." NO es mayor que 1, NI menor que 10</p>\n";       
    }
?>

<hr>
<br>

<h2>3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2.</h2>
  
<?php
//Asigno valor nuevo a n e imprimo el valor
    $n = 8;
    print "<p>n es igual a: " . $n ."</p>\n";

// Reviso si n esta fuera de los valores solicitados
   if (($n < 2) OR ($n > 10)) {
        print "<p>$n"." es mayor a 10 o menor a 2</p>\n";
    } else {
        print "<p>$n"." NO es mayor que 10, ni es menor que 2</p>\n";       
    }

?>

<hr>
<br>

<h2>4. Crear dos variables, una con nombre numerol y otra con el nombre de numero2. </h2>
<p> A) Si numerol es mayor a numero2, mostrar por pantalla, la suma y la resta. 
    B) Si numero2 es mayor a numerol, mostrar por pantalla la multiplicación, la división entera y el resto de la división. 
    C) Si numerol y numero2 son iguales, mostrar el siguiente mensaje "Los números ingresados son iguales".
</p>


<?php
//Cargo el valor en las dos variables como enteros (int)
    $numero1 = 20;
    $numero2 = 10;

    print "<h4>Variables</h4>\n";
    print "<p>numero1: "."$numero1</p>\n";
    print "<p>numero2: ". "$numero2</p>\n";

?>
<h3>Resoluciones</h3>

<h4>A) Si numerol es mayor a numero2, mostrar por pantalla, la suma y la resta. </h4>

<?php
//Armo la condicion para ver si n1 es mayor a n2 y resuelvo
    if ($numero1 > $numero2) {
        echo $numero1 . " es mayor a " . $numero2;
        $suma = $numero1 + $numero2; //Cargo la suma de ambas variables en una nueva variable
        print "<p> - Suma:"."$suma</p>\n";  //Muestro la suma en pantalla
        $resta = $numero1 - $numero2; //Cargo la resta de ambas variables en una nueva variable
        print "<p> - Resta: "."$resta</p>\n";//Muestro la resta en pantalla
    } elseif ($numero1 == $numero2) {
        print "<p> $numero1"." es IGUAL a "."$numero2</p>\n";
    } else {
        echo $numero1 . " es MENOR a " . $numero2;
    }

?>

<h4>B) Si numero2 es mayor a numerol, mostrar por pantalla la multiplicación, la división entera y el resto de la división. </h4>

<?php
//Armo la condicion para ver si n2 es mayor a n1 y resuelvo
    if ($numero2 > $numero1) {
        echo $numero2 . " es mayor a " . $numero1;
        $producto = $numero2 * $numero1; //Cargo la multiplicacion de ambas variables en una nueva variable
        print "<p> - Producto: "."$producto</p>\n";
        $division = round($numero2 / $numero1,0); //Cargo la division entera de ambas variables en una nueva variable
        print "<p> - Division: "."$division</p>\n";
        $resto_division = $numero2 % $numero1;//Cargo el resto de la division entera de ambas variables en una nueva variable
        print "<p> - Resto division: "."$resto_division</p>\n";
    } elseif ($numero1 == $numero2) {
        print "<p> $numero1"." es IGUAL a "."$numero2</p>\n";
    } else {
        echo $numero2 . " es MENOR a " . $numero1;
    }
?>

<h4>C) Si numerol y numero2 son iguales, mostrar el siguiente mensaje "Los números ingresados son iguales".</h4>

<?php
//Armo la condicion para ver si n1 es igual  a n2 y pongo mensaje
    if ($numero1 == $numero2) {
        print "<p> $numero1"." es IGUAL a "."$numero2</p>\n";
    } else {
        print "<p> $numero1"." NO es igual a "."$numero2</p>\n";
    }

?>

<hr>
<br>


<h3> Trabajo Practico realizado por:</h3>
<h1> SIC </h1>


</body>
</html>