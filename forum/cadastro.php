
    <link rel="stylesheet" href="forum.css">
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if(file_exists("usuarios.xml")) {
        $usuarios = simplexml_load_file("usuarios.xml");
    } else {
        $usuarios = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><usuarios></usuarios>');
    }
   
    $novo = $usuarios->addChild("usuario");
    $novo->addChild("nome", $_POST['nome']);
    $novo->addChild("celular", $_POST['celular']);
    $novo->addChild("email", $_POST['email']);
    $novo->addChild("senha", $_POST['senha']);
    $usuarios->asXML("usuarios.xml");
    echo "<br><div class='success-message'>Usuário cadastrado com sucesso! <a href='login.php'>Fazer Login</a></div>";
}
?>

<form class="menu" method="post">
    Nome: <input class="caixa" type="text" name="nome" placeholder="Digite seu nome aqui" required><br>
    Celular: <input class="caixa" type="text" name="celular" placeholder="Digite seu celular aqui" required><br>
    Email: <input class="caixa" type="email" name="email" placeholder="Digite seu email aqui" required><br>
    Senha: <input class="caixa" type="password" name="senha" placeholder="Digite sua senha aqui" required><br>
    <button class="botao" type="submit">Cadastrar</button>
</form>



