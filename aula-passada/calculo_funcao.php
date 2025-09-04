<!--Arquivo trabalhando junto com o arquivo "calc_funcao.html"-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RESULTADO</title>
</head>
<body style="font-size: 100px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
  <div style="display: flex; align-items: center; justify-content: center;">
  <?php 
  $n1=$_POST["n1"];
  $n2=$_POST["n2"];
  $n3=$_POST["n3"];
 
    function media($n1, $n2, $n3){
        return ($n1 + $n2 + $n3)/3;
    }
  echo "Média: " . round(media($n1, $n2, $n3),1);
  ?>
  </div>
 <br><a href="http://localhost/DBRO's_site/projeto01/painel.php" style="font-size: 50px; text-align: center;">Clique aqui para voltar ao inicio</a>
</body>
</html>
