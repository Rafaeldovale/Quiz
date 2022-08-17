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
    <h3>4) Qual foram as equipes que Ayrton Senna correu?</h3>

    <div id="container">
    <form method="POST" action="perg04.php">
        <input type="radio" name="equipes" value="1">Toleman, Lotus, Mclarens, Willims<br>
        <input type="radio" name="equipes" value="2" >Ferrari, Minardi, Mclaren, Mercedes<br>
        <input type="radio" name="equipes" value="3">Williams, Red Bull, Toleman, Arraws<br>
        <input type="radio" name="equipes" value="4">Ferrari, Prost, Sauber, Williams<br>
        <button>Resposta</button>
    </form>
    </div>
        <?php
        //require_once('perg01.php');
        $equipes = $_POST['equipes'];

            if($equipes == '1'){
                echo '<div id="correto">Parabéns você acertou a quarta pergunta<div><br>';
                echo '<img src="img/AyrtonEquipes.jpeg"<br>';
                
                /*echo '<form method="POST" action="perg02.php">
                        <button>Ir para proxima questão</button>
                    </form>';*/
        ?>
                    <form method="POST" action="perg05.php">
                        <button>Ir para proxima questão</button>
                    </form>
        <?php
        }elseif($equipes == '2'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }elseif($equipes == '3'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }elseif($equipes == '4'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }

    ?>
</body>
</html>