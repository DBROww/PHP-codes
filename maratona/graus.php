<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão fahrenheit</title>
</head>
<body>
    <form action="graus.php" method="post">
        <label>Temperatura em °C</label>
        <input type="text" name="c">
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
<?php 
    $c = isset($_POST['c']) ? (int)$_POST['c'] : 1;
    $f=( ($c * (9/5) ) + 32);
    echo "$c °C = $f °F";
?>