<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espaço de perguntas</title>
</head>
<body>
    <h3>10) Quantas temporadas ele correu na F1?</h3>
    <form method="POST" action="perg10.php">
        <input type="radio" name="temporada" value="10">10<br>
        <input type="radio" name="temporada" value="15" >15<br>
        <input type="radio" name="temporada" value="20">20<br>
        <input type="radio" name="temporada" value="5">5<br>
        <button>Resposta</button>
    </form>
        <?php
        //require_once('perg01.php');
        $temporada = $_POST['temporada'];

            if($temporada == '10'){
                echo 'Parabéns você acertou a seguda pergunta<br>';
                echo '<img src="img/AyrtonTemporadas.jpeg"<br>';
                
                /*echo '<form method="POST" action="perg02.php">
                        <button>Ir para proxima questão</button>
                    </form>';*/
        ?>
                    <form method="POST" action="final.php">
                        <button>Ir para proxima questão</button>
                    </form>
        <?php
        }elseif($temporada == '15'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }elseif($temporada == '20'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }elseif($temporada == '5'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }

    ?>
</body>
</html>