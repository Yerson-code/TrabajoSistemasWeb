<?php
$usuario="Alberto";
$password=123;

if($usuario==="Alberto" && $password===123){
    echo"Bienvenido al sistema";
}else{
    echo"Acceso denegado";
}

print("</br>");
print("<h3>Operador Ternario</h3>");

$edad=18;
echo($edad >=18) ? "Eres mayor de edad" : "Eres menor de edad";
