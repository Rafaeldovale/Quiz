<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espaço de perguntas</title>
</head>
<body>
    <h3>9) Quantos títulos ele teve?</h3>
    <form method="POST" action="perg09.php">
        <input type="radio" name="titulos" value="3">3<br>
        <input type="radio" name="titulos" value="4" >4<br>
        <input type="radio" name="titulos" value="5">5<br>
        <input type="radio" name="titulos" value="0">0<br>
        <button>Resposta</button>
    </form>
        <?php
        //require_once('perg01.php');
        $titulos = $_POST['titulos'];

            if($titulos == '3'){
                echo 'Parabéns você acertou a seguda pergunta<br>';
                echo '<img src="img/AyrtonTitulos.jpeg"<br>';
                
                /*echo '<form method="POST" action="perg02.php">
                        <button>Ir para proxima questão</button>
                    </form>';*/
        ?>
                    <form method="POST" action="perg10.php">
                        <button>Ir para proxima questão</button>
                    </form>
        <?php
        }elseif($titulos == '4'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }elseif($titulos == '5'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }elseif($titulos == '0'){
            echo 'Infelizmente você errou!!!<br>';
            echo '<img src="img/Rubinho.jpg" width="300px" height="340px "<br>';
        }

    ?>
</body>
</html>