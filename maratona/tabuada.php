<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <form action="" method="get">
        <h1>Tabuada do número que quiser até 10</h1>
        <input type="number" name="n" placeholder="Digite o número aqui">
        <button type="submit">Calcular</button><br><br>
    </form>
</body>
</html>

<?php     
    $n = isset($_GET['n']) ? (int)$_GET['n'] : 1;
    echo "Tabuada <br><br>";
     for ($i = 1; $i <= 10; $i++){
        echo "$n X $i = " . $n * $i . "<br>";
    }
    
?>