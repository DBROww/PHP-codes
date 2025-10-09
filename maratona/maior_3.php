<?php
$num1 = $_POST['num1']; 
$num2 = $_POST['num2']; 
$num3 = $_POST['num3']; 

    if($num1<$num2){
        echo "$num2 é maior que $num1 <br>";
    }elseif ($num1>$num2){
        echo "$num1 é maior que $num2 <br>";
    } else {
        echo "$num1 é igual a $num2 <br>";
    }

    if($num2<$num3){
        echo "$num2 é menor que $num3 <br>";
    } elseif ($num2>$num3){
        echo "$num2 é maior que $num3 <br>";
    } else {
        echo "$num2 é igual a $num3 <br>";
    }

    if($num3<$num1){
        echo "$num1 é maior que $num3 <br>";
    } elseif ($num3>$num1){
        echo "$num3 é maior que $num2 <br>";
    } else {
        echo "$num3 é igual a $num1 <br>";
    }
    ?><br>
<a href="maior_3.html">Clique aqui para calcular novamente</a>