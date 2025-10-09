<link rel="stylesheet" href="forum.css">
<?php
session_start();
if(!isset($_SESSION['usuario'])){
    echo "Você precisa estar logado para criar um tópico. <a href='login.php'>Login</a>";
    exit();
}
if($_SERVER['REQUEST_METHOD'] === 'POST'){

 if(file_exists('topicos.xml')){
        $topicos = simplexml_load_file('topicos.xml');
    } else {
        // Cria um novo XML se não existir
        $topicos = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><topicos></topicos>');
    }

    $novo = $topicos->addChild('topico');
    $novo->addChild('autor', $_SESSION['usuario']);
    $novo->addChild('titulo', $_POST['titulo']);
    $novo->addChild('mensagem', $_POST['mensagem']);
    $novo->addChild('comentarios');
    $dom = new DOMDocument('1.0', 'UTF-8');
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($topicos->asXML());
    $dom->save('topicos.xml');
    echo "<p class='success-message'>Tópico criado com sucesso! <a href='listar.php'>Ver tópicos</a></p>";
} else {
?>
<form class="menu" method="post">
    Título: <input class="caixa" type="text" name="titulo" required><br>
    Mensagem: <textarea class="caixa" id="mensagem" name="mensagem" required></textarea><br>
    <button class="botao" type="submit">Criar Tópico</button>
</form>
<?php } ?>