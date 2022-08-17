<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>Espaço de perguntas</title>
</head>
<body>
    <h3>3) Como Ayrton é chamado em por causa das corridas em Mônaco?</h3>
    <div id="container">
    <form method="POST" action="perg03.php">
        <input type="radio" name="apelido" value="rei">Rei<br>
        <input type="radio" name="apelido" value="campeao" >Campeão<br>
        <input type="radio" name="apelido" value="fenomeno">Fenomeno<br>
        <input type="radio" name="apelido" value="genio">Gênio<br>
        <button>Resposta</button>
    </form>
    </div>  
        <?php
        //require_once('perg01.php');
        $apelido = $_POST['apelido'];

            if($apelido == 'rei'){
                echo '<div id="correto">Parabéns você acertou a terceira pergunta<div><br>';
                echo '<img src="img/AyrtonMonaco.jpeg"<br>';
                
                /*echo '<form method="POST" action="perg02.php">
                        <button>Ir para proxima questão</button>
                    </form>';*/
        ?>
                    <form method="POST" action="perg04.php">
                        <button>Ir para proxima questão</button>
                    </form>
        <?php
        }elseif($apelido == 'campeao'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }elseif($apelido == 'fenomeno'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }elseif($apelido == 'genio'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }

    ?>
</body>
</html>