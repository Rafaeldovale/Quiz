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
    <h3>6) Quantas temporadas ele disputou na Mclaren?</h3>
    <div id="container">
    <form method="POST" action="perg06.php">
        <input type="radio" name="temporada" value="6">6<br>
        <input type="radio" name="temporada" value="2" >2<br>
        <input type="radio" name="temporada" value="8">8<br>
        <input type="radio" name="temporada" value="7">7<br>
        <button>Resposta</button>
    </form>
    </div>
        <?php
        //require_once('perg01.php');
        $temporada = $_POST['temporada'];

            if($temporada == '6'){
                echo '<div id="correto">Parabéns você acertou a primeira pergunta<div><br>';
                echo '<img src="img/AyrtonTemporadas.jpeg"<br>';
                
                /*echo '<form method="POST" action="perg02.php">
                        <button>Ir para proxima questão</button>
                    </form>';*/
        ?>
                    <form method="POST" action="perg07.php">
                        <button>Ir para proxima questão</button>
                    </form>
        <?php
        }elseif($temporada == '2'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }elseif($temporada == '8'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }elseif($temporada == '7'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }

    ?>
</body>
</html>