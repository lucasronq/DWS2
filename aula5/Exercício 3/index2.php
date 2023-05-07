<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Tabelas</h1>
    <hr>
    <div class="container-sm">
        <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $linhas = $_POST["linhas"];
            $colunas = $_POST["colunas"];
            $estilo = $_POST["estilo"];
            echo " <div class='container' width: 750px; heigth: 750px;>";
            echo "<table class='table'>";
            for ($i = 1; $i <= $linhas; $i++) {
                echo "<tr class='$estilo'>";
                for ($j = 1; $j <= $colunas; $j++) {
                echo "<td class='$estilo'> - </td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            }
            echo "</div>"
            ?>

        <button class="button"><a href="index.php">Voltar</a></button>

    </div>
     
</body>
<style>
    td{
        border: solid 1px;
        text-align: center;
    }    
    tr{
        border: solid 1px;
    }    
</style>
</html>