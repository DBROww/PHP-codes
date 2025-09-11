<form action="login.php" method="post">
<body style="display: flex; align-items: center; justify-content: center; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
    <div style="border: solid; padding: 10px; text-align: center; font-size: 30; width: 400px; height: 230px;">
        Login <br>
        <input type="text" name="usuario" style="padding: 7px;"> <br>
        Senha <br>
        <input type="password" name="senha" style="padding: 7px;"><br><br>
        
        <input type="submit" value="Entrar" style="padding: 7px; width: 100px; background-color: rgb(0, 140, 255); margin-top: -5px;">

             <div style="font-size: 20; margin-top: -85px;">
            <?php
            //exibe uma mensagem de erro, se existir
            if (isset($_GET['msg'])) {
                echo "<p style='color:red'>" . htmlspecialchars($_GET['msg']) . "<p>";
            }
            ?>
            </div>
    </div>
</body>
</form>
