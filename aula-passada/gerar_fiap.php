<?php
    require "funcoes.php";
    $aluno1=$_POST['aluno1'];
    $aluno2=$_POST['aluno2'];
    $aluno3=$_POST['aluno3'];
    $observacao=$_POST['observacao'];

    fiap($aluno1, $aluno2, $aluno3, $observacao);
?>