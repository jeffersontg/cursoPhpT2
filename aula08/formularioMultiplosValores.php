<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        if (isset($_POST['ingrediente'])):
    ?>
    <div>
         A variavel possui os elementos <?= print_r($_POST['ingrediente']) ?>
    </div>        
    <?php
        endif;
    ?>            

    <form action='formularioMultiplosValores.php' method='POST'>
        <div>
            <input type='checkbox' name='ingrediente[]' value='Tomate'/> Tomate
        </div>    
        <div>
            <input type='checkbox' name='ingrediente[]' value='Cebola'/> Cebola
        </div>    

        <div>
            <input type='checkbox' name='ingrediente[]' value='Cheiro verde'/> Cheiro verde
        </div>    

        <div>
            <input type='submit' name='enviar' value='Enviar'/>
        </div>    

    </form>
</body>
</html>