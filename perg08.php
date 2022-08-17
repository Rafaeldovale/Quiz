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
    <h3>8) Qual foi sua última equipe na F1?</h3>
    <div id="container">
    <form method="POST" action="perg08.php">
        <input type="radio" name="ultima" value="williams">Williams<br>
        <input type="radio" name="ultima" value="mercedes" >Mercedes<br>
        <input type="radio" name="ultima" value="mclaren">Mclaren<br>
        <input type="radio" name="ultima" value="ferrari">Ferrari<br>
        <button>Resposta</button>
    </form>
    </div>
        <?php
        //require_once('perg01.php');
        $ultima = $_POST['ultima'];

            if($ultima == 'williams'){
                echo '<div id="correto">Parabéns você acertou a primeira pergunta<div><br>';
                echo '<img src="img/AyrtonWilliams.jpeg" width="300px" height="300px "<br>';
                
                /*echo '<form method="POST" action="perg02.php">
                        <button>Ir para proxima questão</button>
                    </form>';*/
        ?>
                    <form method="POST" action="perg09.php">
                        <button>Ir para proxima questão</button>
                    </form>
        <?php
        }elseif($ultima == 'mercedes'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }elseif($ultima == 'mclaren'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }elseif($ultima == 'ferrari'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }

    ?>
</body>
</html>