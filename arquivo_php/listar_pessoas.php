<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="listar_pessoas.php" method="post">
        <label>Digite o nome aqui: </label>
        <input type="text" name="pessoa">
        <input type="submit" value="Cadastrar">             
    </form>
    <h3>Lista de atendimento:</h3>
    <?php 
        $nome = $_POST['pessoa'] ?? '';
        $arquivo = fopen("Atendimento.txt", "a");
    fwrite($arquivo, "$nome\n");
    fclose($arquivo);
    
     $arquivo = fopen("Atendimento.txt", "r");
    while(!feof($arquivo)) {
        echo fgets($arquivo) . "<br>";
    }
    fclose($arquivo);

    ?>
</body>
</html>