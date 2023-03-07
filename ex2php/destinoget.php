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
            <p>
                <a href="form.php" >>Voltar para o formulário</a>
            </P>
            
        <style>
                body{
                    background-color: <?php echo $cor;?>;
                }
                
                hr{
                    color: black;
                }
        </style>
    </div>   
</html>