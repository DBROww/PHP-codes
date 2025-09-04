<?php
    $resposta = 'sim';
    $pergunta = 'Sua mãe deixou você ir no MCdonalds?';
    if($resposta=='sim'){
        echo 'Lésgou';
    }else{
        echo 'Moiou';
    }
    echo '<br>';
    $n1=200;
    $n2=100;
    if($n1==$n2){
        echo "$n1 é igual a $n2";
    }
    if($n1>$n2){
        echo "$n1 é maior que $n2";
    }
    if($n1<$n2){
        echo "$n2 é maior que $n1";
    }
?>