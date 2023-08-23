<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action='exercicioFinal02.php' method='POST'>

        <div>
            <label for='nome'>Nome:</label>
            <input type='text' id='nome' name='nome' placeholder='Nome'/>
        </div>

        <div>
            <label for='sobrenome'>Sobrenome:</label>
            <input type='text' id='sobrenome' name='sobrenome' placeholder='Sobrenome'/>
        </div>

        <div>
            <label for='endereco'>Endereço:</label>
            <input type='text' id='endereco' name='endereco' placeholder='Endereço'/>
        </div>

        <div>
            <label for='bairro'>Bairro:</label>
            <input type='text' id='bairro' name='bairro' placeholder='Bairro'/>
        </div>

        <div>
            <label for='cep'>Cep:</label>
            <input type='text' id='cep' name='cep' placeholder='Cep'/>
        </div>
        <div>
            
            <input type='submit' value='Enviar' id='enviar'/>
        </div>


    </form>

    <?php

        $nome = '';
        $sobrenome = '';
        $endereco = '';
        $bairro = '';
        $cep = '';

        if (isset($_POST['nome'])) {
            $nome = $_POST['nome'];
        }
        if (isset($_POST['sobrenome'])) {
            $sobrenome = $_POST['sobrenome'];
        }


        if (isset($_POST['endereco'])) {
            $endereco = $_POST['endereco'];
        }

        if (isset($_POST['bairro'])) {
            $bairro = $_POST['bairro'];
        }

        if (isset($_POST['cep'])) {
            $cep = $_POST['cep'];
        }

        
    ?>

    <h1>Nome: <?= $nome ?> </h1>
    <h1>Sobrenome: <?= $sobrenome ?> </h1>
    <h1>Endereço: <?= $endereco ?> </h1>
    <h1>Bairro: <?= $bairro ?> </h1>
    <h1>cep: <?= $cep ?> </h1>


</body>
</html>