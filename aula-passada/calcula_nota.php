<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="text-align: center; padding: 30px; width: 400px; align-items: center; justify-content: center; margin: auto; margin-top: 200px; font-size: large;">
        <?php
            $nota = $_POST['nota'];
            $nome = $_POST['nome'];
            $disciplina = $_POST['disciplina'];
            require "funcoes.php";

            nota($nota,$nome,$disciplina);
            ?>
            <br><br><br>
            <a href="nota.html">Clique aqui para voltar</a>
    </div>
  
</html>