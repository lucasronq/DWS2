<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Destino</h1>
    <?php

        $titulo = $_POST["titulo"];
        $corpo = $_POST["corpo"];
        $back = $_POST["corFundo"];
        $text = $_POST["corTexto"];
        $link = $_POST["url"];
        
        echo "
        <header>
            <h1>$titulo</h1>
        </header>";

        echo "
        <figure>
            <img src='$link' alt=''>
        </figure>";
        
    ?>
</body>
<style>
    body{
        background-color: <?php echo $back ?>;
    }

    body{
        color: <?php echo $text ?>;
    }
</style>

</html>