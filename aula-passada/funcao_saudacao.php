<?php 
    //Está é uma função
    function saudacao($nome){
        return "Olá, $nome";
    }

    //Outra função
    function nomeDaFuncao($parametro1, $parametro2){
        //código que será executado
        $resultado = $parametro1 + $parametro2;
        return $resultado; //retorna o valor
    }
    //chamando a função
    $nome="Davi";
    $soma = nomeDaFuncao(5, 10);
    echo "$nome, o resultado é: $soma";


?>
