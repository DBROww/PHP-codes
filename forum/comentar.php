<link rel="stylesheet" href="forum.css">
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $topicos = simplexml_load_file('topicos.xml');
    $id = intval($_POST['id']);
    $comentario = $topicos->topico[$id]->comentarios->addChild('comentario');
    $comentario->addChild('nome', $_POST['nome']);
    $comentario->addChild('mensagem', $_POST['mensagem']);
    $dom = new DOMDocument('1.0', 'UTF-8');
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($topicos->asXML());
    $dom->save('topicos.xml');
    header("Location: listar.php");
}