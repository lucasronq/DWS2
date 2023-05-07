<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 9</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        span {
            padding: 1rem;
            border: 1px solid green;
            text-transform: uppercase;
            background-color: green;
        }
    </style>
    <?php
    $num = $_GET['num'] ?? "";
    function retornarDados($num) {
        $isOdd = intval($num) % 2 == 1 ? "ímpar" : "par";
        $isPrimeNumber = "é";
        $color = 'green';
        for($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                $isPrimeNumber = 'não é';
                $color = 'coral';
                break;
            }
        }
        echo "<p>O número 
        <span class='border' style='border-color: $color; background-color: light$color'>
        $num
        </span>
        <span class='border' style='border-color: $color; background-color: light$color'>
        $isPrimeNumber
        </span>
         um número 
        <span class='border' style='border-color: $color; background-color: light$color'>
        primo
        </span>
         .Além disso ele é um número 
        <span class='border' style='border-color: $color; background-color: light$color'>
        $isOdd
        </span>
        </p>";
    }
    ?>
</head>
<body class="p-4">
    <header class="border-bottom border-dark mb-2">
        <h1>Números primos</h1>
    </header>
    <main>
        <div>
            <a style="margin-right: 1rem;" href="./index.php?num=1">Número 1</a>
            <a style="margin-right: 1rem;" href="./index.php?num=2">Número 2</a>
            <a style="margin-right: 1rem;" href="./index.php?num=3">Número 3</a>
            <a style="margin-right: 1rem;" href="./index.php?num=5">Número 5</a>
            <a style="margin-right: 1rem;" href="./index.php?num=20">Número 20</a>
            <a style="margin-right: 1rem;" href="./index.php?num=32">Número 32</a>
            <a style="margin-right: 1rem;" href="./index.php?num=37">Número 37</a>
        </div>
        <div class="mt-4">
            <?php if($num != "") {
                retornarDados($num);
            } ?>
        </div>
    </main>
</body>
</html>