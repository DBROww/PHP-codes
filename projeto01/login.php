<?php
    require_once("funcoes2.php"); //inclui o arquivo com a função

    $usuario = $_POST["usuario"] ?? '';
    $senha = $_POST["senha"] ?? '';

    conecta($usuario, $senha); // Chama a função
?>