<?php

use Claudsonm\CepPromise\CepPromise;
use Claudsonm\CepPromise\Exceptions\CepPromiseException;


require 'vendor/autoload.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <h1>Verifique seu CEP</h1>
    <form action="./composer.php" method="post">
        <div>
            <label for="">CEP:</label>
            <input type="nunber" name="address">
            <button class="btn btn-primary">Enviar</button>
            <button class="btn btn-warning">Limpar</button>
            <br>
            <br>
            <br>
        </div>
    </form>

    <?php
        
        $add = $_POST['address'];

        try {
            $response = CepPromise::fetch($add);
            $add = $response;
        } catch (CepPromiseException $e) {
            $response = $e->toArray();
        }

        echo "<pre>";
        var_dump($response["errors"][2]);
        echo "</pre>";


        if(isset($response["errors"])){
            echo "<div class= 'p-3 mb-2 bg-danger text-white'>"; 
            echo "<h1>";
            echo"CEP: ";
            echo $add->zipCode;
            echo "</h1>";
            echo"<br>";
            echo "Rua: ";
            echo $add->street;
            echo"<br>";
            echo"Bairro: ";
            echo $add->district;
            echo"<br>";
            echo"Cidade: ";
            echo $add->city;
            echo"<br>";
            echo"Estado: ";
            echo $add->state;
        echo "</div>";
        }else{

        }
       
        

        echo "<div class= 'p-3 mb-2 bg-success text-white'>"; 
            echo "<h1>";
            echo"CEP: ";
            echo $add->zipCode;
            echo "</h1>";
            echo"<br>";
            echo "Rua: ";
            echo $add->street;
            echo"<br>";
            echo"Bairro: ";
            echo $add->district;
            echo"<br>";
            echo"Cidade: ";
            echo $add->city;
            echo"<br>";
            echo"Estado: ";
            echo $add->state;
        echo "</div>";

        
    ?>
</body>
</html>