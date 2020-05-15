<?php //Etiqueta de PHP



print("Operadores De Asignación De PHP <br>"); //Imprimir
print ("Igual <br>");

$a=20; //Se asigna 20 a la variable a 
$b=40; // se asigna 40 a variable b
echo $b."<br>";
$c=80;
$d=40;
$e=10;
$f=6;
$g=100;
$h=10;
print ("Operadores combinados <br>");
    print (" Suma <br>");
        print ("a=20 b=40 <br>");
            $a +=$b; // o tambien pueden poner un valor envez de letra ejemplo $j +=2;
            echo $a."<br>";
    print (" Resta <br>");
        print ("c=80 d=40 <br>");
            $c -=$d;// o tambien pueden poner un valor envez de letra ejemplo $j -=2;
            echo $c."<br>";
    print (" Multiplicación <br>");
        print ("e=10 f=6 <br>");
                $e *=$f;// o tambien pueden poner un valor envez de letra ejemplo $j *=2;
                echo $e."<br>";
     print (" División ;<br>");
        print ("g=100 h=10 <br>");
                 $g /=$h;// o tambien pueden poner un valor envez de letra ejemplo $j /=2;
                 echo $g."<br>";
     print (" Módulo <br>");
        print ("g=100 h=10 <br>");
                 $h %=$f;// o tambien pueden poner un valor envez de letra ejemplo $j %=2;
                 echo $h."<br>";
     Print (" \n Operador de asignación contatenar cadenas<br>");
             $i="Hola";
             $i.=" Mundito";
             $i.=" Este es nuestro primer programa";
             echo $i."<br>";
          //o
             $v="Hola";
             $v=$v." Mundo"." Este es nuestro primer programa";
             echo $v."<br>";
             



?>