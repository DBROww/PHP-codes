<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<body>
    <form action="" method="get">
        <h1>10 primeiros números da Sequência de Fibonacci</h1>
    </form>
</body>
</html>

<?php     
    $n1 = 1;
    $n2 = 1;
    $n3 = 0;
    echo "1° termo da sequência: $n1 <br> 2° termo da sequência: $n2 <br> ";
     for ($i = 3; $i <= 10; $i++){
        
        $n3 = $n2 + $n1;
        $n1 = $n2;
        $n2 = $n3;
        echo $i ."° termo da sequência: $n3 <br>";
    }
    
?>