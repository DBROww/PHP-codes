<?php
    echo $_GET['nome'];
    $valor1 = $_GET['valor1'];
    $valor2 = $_GET['valor2'];
    $sinal = $_GET['sinal'];
    $resultado = $valor1.$sinal.$valor2."=";
    echo $resultado;
    if($sinal == '*'){
        echo "<br>". $valor1 * $valor2;
    }
    if($sinal == '+'){
        echo "<br>". $valor1 + $valor2;
    }
    if($sinal == '-'){
        echo "<br>". $valor1 - $valor2;
    }
    if($sinal == '/'){
        echo "<br>". $valor1 / $valor2;
    }

?>