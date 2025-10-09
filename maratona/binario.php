<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binário</title>
</head>
<body>
    <form action="binario.php" method="post">
    <label>Número:
    <input type="number" name="numero">
    <button type="submit">Transformar</button>
    </form>
</body>
</html>

<?php 
    $n = isset($_POST['numero']) ? (int)$_POST['numero'] : 0;
    $binario = decbin($n);
    echo "o número $n em binário é: $binario"
?>