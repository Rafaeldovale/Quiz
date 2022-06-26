<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espaço de perguntas</title>
</head>
<body>
    <h3>1) Qual foi a 1º equipe que Ayrton Senna Correu na sua primeira temporada?</h3>
    <form method="POST" action="perg01.php">
        <input type="radio" name="equipe" value="toleman">Toleman<br>
        <input type="radio" name="equipe" value="ferrari" >Ferrai<br>
        <input type="radio" name="equipe" value="jordan">Jordan<br>
        <input type="radio" name="equipe" value="aguri">Super Aguri<br>
        <button>Resposta</button>
    </form>
        <?php
        $equipe = $_POST['equipe'];

            if($equipe == 'toleman'){
                echo 'Parabéns você acertou a primeira pergunta<br>';
                echo '<img src="img/AyrtonToleman.jpeg"<br>';
                
                /*echo '<form method="POST" action="perg02.php">
                        <button>Ir para proxima questão</button>
                    </form>';*/
        ?>
                    <form method="POST" action="perg02.php">
                        <button>Ir para proxima questão</button>
                    </form>
        <?php
        }elseif($equipe == 'ferrari'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }elseif($equipe == 'jordan'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }elseif($equipe == 'aguri'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }

    ?>
</body>
</html>