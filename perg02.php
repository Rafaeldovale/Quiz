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
    <h3>2) Qual foi seu ano de estreia?</h3>
    <div id="container">
    <form method="POST" action="perg02.php">
        <input type="radio" name="ano" value="1984">1984<br>
        <input type="radio" name="ano" value="2012" >2012<br>
        <input type="radio" name="ano" value="1990">1990<br>
        <input type="radio" name="ano" value="1450">1450<br>
        <button>Resposta</button>
    </form>
    </div>
        <?php
        //require_once('perg01.php');
        $ano = $_POST['ano'];

            if($ano == '1984'){
                echo '<div id="correto">Parabéns você acertou a segunda pergunta<div><br>';;
                echo '<img src="img/AyrtonEstreia.jpeg"<br>';
                
                /*echo '<form method="POST" action="perg02.php">
                        <button>Ir para proxima questão</button>
                    </form>';*/
        ?>
                    <form method="POST" action="perg03.php">
                        <button>Ir para proxima questão</button>
                    </form>
        <?php
        }elseif($ano == '2012'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }elseif($ano == '1990'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }elseif($ano == '1450'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }

    ?>
</body>
</html>