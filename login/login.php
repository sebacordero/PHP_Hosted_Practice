<?php
$user = $_POST ["user"];
$pass = $_POST ["pass"];

$ckuser = "admin";
$ckpass = "1234";

if ($user == $ckuser && $pass == $ckpass) {
    header ("location:platform.html");
} 
else {
    header ("location:error.html");
}


?>
