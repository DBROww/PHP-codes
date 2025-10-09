<link rel="stylesheet" href="forum.css">
<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuarios = simplexml_load_file("usuarios.xml");
    foreach ($usuarios->usuario as $u) {
        if ($u->email == $_POST['email'] && $u->senha == ($_POST['senha'])) {
            $_SESSION['usuario'] = (string) $u->email;
            echo "<p class='success-message'> Bem vindo! <br> <a href='criar_topico.php'>Criar Tópico</a></p>";
            exit;
        }
    }
    echo "<p>Login inválido! <a href='login.php'>   Tente novamente</a></p>";
    
} else {
?>
<form class="menu" method="post">
    <h2 id="Login">Login</h2><br><br><br>
    Email: <input class="caixa" type="email" name="email" required><br>
    Senha: <input class="caixa" type="password" name="senha" required><br>
    <button class="botao" type="submit">Entrar</buton><br><br><br><br>
    <a href="cadastro.php">Cadastrar</a>
</form>
<?php } ?>
