<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Destino GET</h1>
        <hr>
        <?php

            $nome = filter_input(INPUT_GET,"nome", FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_GET,"email", FILTER_SANITIZE_EMAIL);
            $cor = filter_input(INPUT_GET, "cor", FILTER_SANITIZE_SPECIAL_CHARS);


            if ($nome != ''){
                echo "<p>Nome informado: $nome<br>Email: $email</p>";
            }
           
            
            ?>
            <br>
            <a href="http://localhost/lucas/ex4php/destinoget.php?nome=lucas&email=lucas%40g&cor=<?= $cor ?>">
                    |   Enviar dados [nome = Lucas | email = lucas@g]
            </a>
            <br>
            <a href="http://localhost/lucas/ex4php/destinoget.php?nome=Zé&email=ze%40g&cor= <?= $cor ?>">
                    |   Enviar dados [nome = Zé | email = ze@g]
            </a>

            </p>
            <p>
                <a href="form.php" >>Voltar para o formulário</a>
            </P>
            <p>
                <a href="http://localhost/lucas/ex4php/destinoget.php?nome=&email=&cor=">Limpar tudo</a>
            </p>
            
          <div class="cores">
            <div class="vermelho">
                <a href="http://localhost/lucas/ex4php/destinoget.php?nome=<?= $nome ?>&email=<?= $email ?>&cor=red"><img src="vermelho.jpg" alt="vermelho"></a>
            </div>
            
            <div class="azul">
                <a href="http://localhost/lucas/ex4php/destinoget.php?nome=<?= $nome ?>&email=<?= $email ?>&cor=blue"><img src="azul.jpg" alt="azul"></a>
            </div>

            <div class="verde">
                <a href="http://localhost/lucas/ex4php/destinoget.php?nome=<?= $nome ?>&email=<?= $email ?>&cor=green"><img src="verde.jpg" alt="verde"></a>
            </div>
          </div>
        <style>
                body{
                    background-color: <?php echo $cor;?>;
                }
                
                hr{
                    color: black;
                }

                .cores{
                    display: flex;
                    flex-direction: row;
                }

                .vermelho{
                    width: 25%;
                    height: 25%;
                }

                .azul{
                    width: 25%;
                    height: 25%;
                }

                .verde{
                    width: 25%;
                    height: 25%;
                }
        </style>
    </div>   
</html>