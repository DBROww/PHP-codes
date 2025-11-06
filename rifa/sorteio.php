<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main>
        <section class="form">
    <h1>Sorteador</h1>
<!-- Pegando as variáveis para não dar conflito -->
    <?php
    $item = $_POST['item']??'';
    $n = $_POST['n']??'';
    ?>
     <!--  Formulário -->
        <form method="post">
            <br>
            <label class="titulo"><b>Definir prêmio:</b></label>
            <input type="text" name="item" placeholder="Digite aqui" class="caixa" value="<?php echo $item;?>"><br>

            <label class="titulo"><b>Defina o número de Rifas:</b></label>
            <input type="number" name="n" placeholder="Digite aqui" class="caixa" value="<?php echo $n;?>">

            <input type='submit' value='Sortear' class='botao'><br>
            
<!-- PHP para realizar o sorteio -->
<?php
    if (empty($n)) { // Se a variável estiver vazia exibe apenas o echo
        echo "<h2>Prêmio:</h2>";
    }else{
        $numero = rand(1,$n); //Sorteia um número aleatório entre 1 e o definido pelo usuário

        if(file_exists('sorteados.xml')){// Cria/abre arquivo XML e salva os sorteados
            $sorteados = simplexml_load_file('sorteados.xml'); // se o arquivo existir abre
        } else {
        // Cria um novo XML se sorteados.xml não existir
            $sorteados = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><sorteados></sorteados>');
        }

        // Verifica se o número já foi sorteado
        $jaSorteado = false;
        foreach ($sorteados->ganhador as $t) {
            if ((int)$t->numero === (int)$numero) {
                $jaSorteado = true;
                break;
             }
        }
    }
        if ($jaSorteado) {
            echo "<div class='aproximar'>"; // DIV criada para corrigir o prêmio e o número afastado 
                echo "<h2>Prêmio: ". ucfirst($item)."</h2>"; // Deixa a primeira letra do prêmio maíscula
                echo "<h2 class='jasorteado'>O número $numero já foi sorteado!</h2>";
            echo "</div>";
        }else{
            echo "<div class='aproximar'>"; // DIV criada para corrigir o prêmio e o número afastado 
                echo "<h2>Prêmio: ". ucfirst($item)."</h2>"; // Deixa a primeira letra do prêmio maíscula
                echo "<h2>O número: <b class=numero>$numero</b>, foi sorteado!</h2>";
            echo "</div>";

        //adiciona o ganhador na lista
            $ganhador = $sorteados->addChild('ganhador');
            $ganhador->addChild('numero', $numero);
            $ganhador->addChild('premio', ucfirst($item));
            $dom = new DOMDocument('1.0', 'UTF-8');
            $dom->preserveWhiteSpace = false;
            $dom->formatOutput = true;
            $dom->loadXML($sorteados->asXML());
            $dom->save('sorteados.xml');
        }
?>      
    <input type="submit" value="REPETIR SORTEIO" class="botao"> <!-- Botão para repetir o sorteio -->
    </form>

    <!-- Definir data e hora atual -->
        <div class="horario"><br>
        <?php
            date_default_timezone_set("America/Sao_Paulo");
            echo "<b class='titulo'>Data atual: " . date("d/m/Y") . "</b><br>";
            echo "<b class='titulo'>Hora atual: " . date("H:i:s") . "</b><br>";
        ?>
        </div>
    </section>
    

<!-- Listar ganhadores -->
    <section class="ganhadores">
        <!-- Abre a lista dos sorteados -->
        <?php
            $sorteado = simplexml_load_file("sorteados.xml");
            echo "<h1>Ganhadores</h1>";
            foreach ($sorteado->ganhador as $t) { // para cada tópico ganhador existente no sorteados.xml
            echo "<p><b>Prêmio:</b> <b class='premio'>" . $t->premio . "</b> 🠖 <b>Ganhador N°:</b> <b class='numero'>" . $t->numero . " </b></p>"; //lista os filhos "premio" e "numero" 
        }
        ?>
    </section>
    </main>
</body>
</html>
