<?php 
    //funções.php
    function saudacao($nome){
        return "Bem-vindo, $nome! Sua partipação foi confirmada!";
    }

    function banco_dados($db){
        return "Seu banco, $db, foi conectado com sucesso!";
    }

    function fiap($aluno1, $aluno2, $aluno3, $observacao){
        echo "<h3>Lista de alunos com observações: </h3>";
        echo "<ul>";
        echo "<li> $aluno1 </li>";
        echo "<li> $aluno2 </li>";
        echo "<li> $aluno3 </li>";
        echo "<br><strong> Observação: $observacao </strong>";
        echo "</ul>";

    }

    //nota.html e calcula_nota.php
    function nota($nota, $nome, $disciplina){
        if ($nota >= 7){
            echo " O aluno <strong>$nome</strong> tirou <strong>$nota</strong> em <strong>$disciplina</strong> e foi aprovado! ";
        }elseif ($nota >=5 && $nota <7){
            echo " O aluno <strong>$nome</strong> tirou <strong>$nota</strong> em <strong>$disciplina</strong> e ficou de recuperação ";
        }else{
            echo " O aluno <strong>$nome</strong> tirou <strong>$nota</strong> em <strong>$disciplina</strong> e foi reprovado ";
        }
    }
?>
