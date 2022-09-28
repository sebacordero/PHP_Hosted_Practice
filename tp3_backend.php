<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TP3 Backend</title>
</head>
<body>
    
<h2>Potrero Digital 2022</h2>
<h1>TP3 Backend - Parte 2</h1>
<em>Estructuras de control</em>


<hr>
<br>


<h2>1. Mostrar los números del 1 al 100.</h2>


<?php
//Va
print("<p>Empiezo</p>");
    for ($i = 1; $i<=100 ; $i++) {
        print "$i"."\n" ;
    }
    print ("<br>FIN\n");
?>
<p>Cierre</p>

<hr>
<br>

<h2>2. Mostrar los números del 100 al 1.</h2>


<?php
//Va
print("<p>Empiezo</p>");
    for ($i = 100; $i>0 ; $i--) {
        print "$i"."\n" ;
    }
    print ("<br>FIN\n");
?>
<p>Cierre en reversa</p>


<hr>
<br>

<h2>3. Mostrar los números pares del 1 al 100.</h2>
  
<?php
//Va
print("<p>Empiezo</p>");
    for ($i = 2; $i<=100 ; $i=$i+2) {
        print "$i"."\n" ;
    }
    print ("<br>FIN\n");
?>
<p>Cierre</p>

<hr>
<br>

<h2>4. Mostrar los números impares del 1 al 100. </h2>

<?php
//Va
print("<p>Empiezo</p>");
    for ($i = 1; $i<=100 ; $i=$i+2) {
        print "$i"."\n" ;
    }
    print ("<br>FIN\n");
?>
<p>Cierre</p>

<hr>
<br>

<h2>5. Mostrar la suma de los números de 1 a 20. </h2>

<?php
//Va
$acum = 0;
print("<p>Empiezo</p>");
    for ($i = 1; $i<=20 ; $acum += $i++) {
        print "$acum"."\n" ;
    }

print ("<br>FIN\n");
?>
<p>Cierre</p>

<hr>
<br>

<h2>6. Mostrar la suma de números pares de 1 a 20. </h2>

<?php
//Va
$acum=2;
print("<p>Empiezo</p>");
for ($i = 2; $i<=20 ; $acum += $i = $i+2) {
    print "$acum"."\n" ;
}

print ("<br>FIN\n");
?>
<p>Cierre</p>

<hr>
<br>

<h3> Trabajo Practico realizado por:</h3>
<h1> SIC </h1>


</body>
</html>