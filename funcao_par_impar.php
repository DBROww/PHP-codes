<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULTADO</title>
</head>
<body style="display: flex; align-items: center; justify-content: center; height: 80vh; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-size: 300px;">

  <?php 
    //Arquivo trabalhando com o arquivo "receberNum.html"
    $num=$_POST['num'];
        function parImpar($num){
            if ($num % 2 == 0){
                return "PAR";
            }else{
                return "ÍMPAR" ;
            }
        }
        echo parImpar($num);
    ?>
    
<div style="font-size: 15px;">
    <a href="receberNum.html">CLIQUE AQUI PARA REFAZER</a>
</div>

</body>

</html>