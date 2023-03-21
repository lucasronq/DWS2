<?php
require 'padrao/header.php'
?>

<?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    $new_date = date('Y-m-d', strtotime($_POST['dateFrom']));
   
?>

<div class="info">
    <p>Nome informado: <?= $nome?></p>
    <p>Email informado: <?= $email?></p>
    <p>Texto informado: <?= $msg?></p>
    <p>Data: <?= $new_date; ?></p>
    <a href="index.php" class="nav-link active">Voltar</a>
</div>



<?php
     $file = fopen("contatos/contatos".rand().".txt","a+");
     fwrite($file, $nome." - ".PHP_EOL.$email.$msg);
     fclose($file);
?>

<?php
require 'padrao/footer.php'
?>