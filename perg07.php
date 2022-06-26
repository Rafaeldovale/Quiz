<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espaço de perguntas</title>
</head>
<body>
    <h3>7) Quem foi seu maior rival?</h3>
    <form method="POST" action="perg07.php">
        <input type="radio" name="rival" value="prost">Prost<br>
        <input type="radio" name="rival" value="alesi" >Alesi<br>
        <input type="radio" name="rival" value="mansel">Mansel<br>
        <input type="radio" name="rival" value="rubinho">rubinho<br>
        <button>Resposta</button>
    </form>
        <?php
        //require_once('perg01.php');
        $rival = $_POST['rival'];

            if($rival == 'prost'){
                echo 'Parabéns você acertou a seguda pergunta<br>';
                echo '<img src="img/AyrtonRival.jpeg"<br>';
                
                /*echo '<form method="POST" action="perg02.php">
                        <button>Ir para proxima questão</button>
                    </form>';*/
        ?>
                    <form method="POST" action="perg08.php">
                        <button>Ir para proxima questão</button>
                    </form>
        <?php
        }elseif($rival == 'alesi'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }elseif($rival == 'mansel'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }elseif($rival == 'rubinho'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }

    ?>
</body>
</html>