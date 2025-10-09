<link rel="stylesheet" href="forum.css">
<body class="topicos">
    
<?php 
    session_start();
    $topicos = simplexml_load_file("topicos.xml");
    $i = 0;
    foreach ($topicos->topico as $t) {
        echo "<div class='post-coment'>";

        echo "<div class='post'>";
        echo "<h2 id='titulo'>" . $t->titulo . "</h2>";
        echo "<p>" . $t->mensagem . "</p>";
        echo "<small>Autor:" . $t->autor . "</small><br><br>";
        echo "<h3>Comentários:</h3><br>";

            $j = 0;
        foreach ($t->comentarios->comentario as $c) {
            echo "<p><b>" . $c->nome . ":</b>" . $c->mensagem;
            if (isset($_SESSION['usuario']) && $_SESSION['usuario'] == $t->autor){
                echo " <a href='excluir.php?id=$i&comentario=$j'>[Excluir]</a>";
            }
            echo "</p>";
            $j++;
        }
        echo "</div>";
        
         echo "<form class='post' id='comentario' method='post' action='comentar.php'>
                <input type='hidden' name='id' value='$i'>
                Nome: <input class='caixa' type='text' name='nome' required><br> 
                Mensagem: <input class='caixa' type='text' name='mensagem' required><br> 
                <button class='botao' type='submit'>Comentar</button>
                </form><hr><br>";
         echo "</div>";
     
       
    $i++;
}
?>
</body>