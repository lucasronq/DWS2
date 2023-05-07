<?php
session_start();

$user = filter_input(INPUT_POST, "user", FILTER_SANITIZE_SPECIAL_CHARS);
$pass = filter_input(INPUT_POST, "pass", FILTER_SANITIZE_SPECIAL_CHARS);

if ($user == 'lucas@ronq' && $pass == "123") {
    $_SESSION["user"] = $user;
    header("Location: index.php");
}else {
    unset($_SESSION["user"]);
}

require "padrao/header.php";
?>

<div class="container">
        <div class="bg-light p4 mb-4 rounded">
            <h1>Autenticação</h1>
        </div>
    <div class= 'p-3 mb-2 bg-danger text-white'>
        <h2>Falha na autenticação</h2>
        <h3>O usuário e senha estão incorretos</h3>
        <h3>Verifique as informçoes e tente novamente</h3>
        <a href='login.php' class='nav-link active' aria-current='page'>Voltar</a>
    </div>
</div>

<?php

require "padrao/footer.php";
?>