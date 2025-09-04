<?php
    $pessoa = ['nome' => 'João', 'idade' => '30'];
    echo $pessoa['nome'];
?>
<p> Isso aqui é um HTML</p>
<?php 
    $aluno = ['nome' => 'Francisco', 'idade' => '16', 'nota' => '100'];
    echo 'Olá '. $aluno['nome']. ', você tem '. $aluno['idade']. ' anos e sua nota é '. $aluno['nota'].'<br>';
    $nasceu = date('Y') - $aluno['idade'];
    echo "Você nasceu em $nasceu <br>";
    //Olá Francisco, você tem 16 anos e sua nota é 100
    $hoje = date('d/m/Y');
    $dia = date('d');
    echo "Hoje é dia: $hoje <br>";
    echo "Hoje dia $dia, é um dia qualquer <br>";
    $hora=date('H:i');
    echo "São exatamente $hora";

?>