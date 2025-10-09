<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhaskara</title>
</head>
<body>
    <form action="" method="post">
        <label>Valor de A:</label>
        <input type="text" name="a" placeholder="Digite o valor de A:" > <br><br>
        <label>Valor de B:</label>
        <input type="text" name="b" placeholder="Digite o valor de B:" > <br><br>
        <label>Valor de C:</label>
        <input type="text" name="c" placeholder="Digite o valor de C:" > <br><br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
<?php 
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $delta = $b**2 - (4*$a*$c);
    $raizD = $delta**0.5;
    $x1 = (-$b + $raizD)/2*$a;
    $x2 = (-$b - $raizD)/2*$a;
    
    if ($delta < 0){
        echo "Está equação não possuí raízes";
    }else {
        echo " Delta = $delta | Raiz de Delta = $raizD | X1 = $x1 | X2 = $x2";
    }
?>