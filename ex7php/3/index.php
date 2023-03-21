<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Números primos</h1>
    <hr>
  
    <?php
        for ($i = 1; $i <= 7; $i++) {
            echo "<a href=\"?num=$i\"> Numero $i</a>";
        }

       if (isset($_GET['num'])) {
        $num = $_GET['num'];
        $is_prime = true;
        
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) {
                $is_prime = false;
                break;
            }
        }
     
        if ($is_prime) {
            echo "<p>O número $num é primo</p>";
        } else {
            echo "<p>O número $num não é primo</p>";
        }
        
        if ($num % 2 == 0) {
            echo "<p>O número $num é par</p>";
        } else {
            echo "<p>O número $num é ímpar</p>";
        }
    }
    ?>
</body>
</html>