<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial</title>
</head>
<body>
    <form action="" method="get">
        <h1>Fatorial do número que quiser</h1>
        <input type="number" name="n" placeholder="Digite o número aqui">
        <button type="submit">Calcular</button><br><br>
    </form>
</body>
</html>

<?php     
    $n = isset($_GET['n']) ? (int)$_GET['n'] : 1;
    $fatorial = 1;
     for ($i = 1; $i <= $n; $i++){
        $fatorial *= $i;
    }
    echo "$n fatorial é: $fatorial";
?>