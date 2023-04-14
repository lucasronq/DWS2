<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');

if (!isset($_SESSION["user"]) && empty($_SERVER["user"])) {
    header("Location: index.php");
}

require "padrao/header.php";
?>

<div class="container">
        <div class="bg-light p4 mb-4 rounded">
            <h1>Autenticação</h1>
        </div>
        <?php
            echo "Nome: Lucas";
            echo "</br>";
            echo "Email: lucas@ronq";
            echo "</br>";
            echo "Telefone: XXXXXXXX";
            echo "</br>";
            echo "Endereço: Cosmorama";
            echo "</br>";
            echo "Estado: SP";
            echo "</br>";

            if (isset($_COOKIE['teste'])) {
                echo $_COOKIE['teste'];
            }else {
                echo "Você nunca passou aqui.";
                setcookie('teste', 'Você já passou aqui! '.date('d/m/y h i s'), time() + 3600);
            }
        ?>

</div>