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
    <h3>5) Qual foi a equipe que deu títulos ao piloto?</h3>
    <div id="container">
    <form method="POST" action="perg05.php">
        <input type="radio" name="titulo" value="mclaren">Mclaren<br>
        <input type="radio" name="titulo" value="ferrari" >Ferrari<br>
        <input type="radio" name="titulo" value="toleman">Toleman<br>
        <input type="radio" name="titulo" value="lotus">Lotus<br>
        <button>Resposta</button>
    </form>
    </div>
        <?php
        //require_once('perg01.php');
        $titulo = $_POST['titulo'];

            if($titulo == 'mclaren'){
                echo '<div id="correto">Parabéns você acertou a quinta pergunta<div><br>';
                echo '<img src="img/AyrtonMclaren.jpg" width="300px" height="300px"<br>';
                
                /*echo '<form method="POST" action="perg02.php">
                        <button>Ir para proxima questão</button>
                    </form>';*/
        ?>
                    <form method="POST" action="perg06.php">
                        <button>Ir para proxima questão</button>
                    </form>
        <?php
        }elseif($titulo == 'ferrari'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }elseif($titulo == 'toleman'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }elseif($titulo == 'lotus'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }

    ?>
</body>
</html>