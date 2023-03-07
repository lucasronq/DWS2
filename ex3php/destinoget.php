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

            echo "<p>Nome informado: $nome<br>Email: $email</p>";
            ?>
            <br>

            Sp? Ese
            <a href="http://localhost/lucas/ex3php/destinoget.php?nome=lucas&email=lucas%40g&cor=%23c27070">
            | Enviar dados [nome = Lucas | email = lucas@g]
            </a>

            </p>
            <p>
                <a href="form.php" >>Voltar para o formulário</a>
            </P>
            
          <div class="cores">
            <div class="vermelho">
                <a href="http://localhost/lucas/ex3php/destinoget.php?nome=lucas&email=lucas%40g&cor=red"><img src="vermelho.jpg" alt="vermelho"></a>
            </div>
            
            <div class="azul">
                <a href="http://localhost/lucas/ex3php/destinoget.php?nome=lucas&email=lucas%40g&cor=blue"><img src="azul.jpg" alt="vermelho"></a>
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
        </style>
    </div>   
</html>