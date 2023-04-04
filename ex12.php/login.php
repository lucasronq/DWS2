<?php

session_start();

if (isset($_SESSION["user"]) && !empty($_SESSION["user"])) {
    header("Location: index.php");
}
require 'padrao/header.php';
?>

<div class="container">
        <div class="bg-light p4 mb-4 rounded">
            <h1>Autenticação</h1>
        </div>
    <div class="login">
        <form action="destinologin.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Endereço de email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email" name="user">
            </div>
            <br>
            <div class="form-group">
                <label for="exampleInputPassword1">Senha</label>
                <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="submit" class="btn btn-primary">Limpar</button>
        </form>
    </div>
</div>

<?php

require "padrao/footer.php";
?>