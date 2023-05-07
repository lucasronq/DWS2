<?php
require 'padrao/header.php'
?>
    <h1>Formulario para contato</h1>

    <form action="destino.php" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">Nome:</label>
            <input type="text" class="form-control" id="nome" placeholder="Insira seu nome aqui" name="nome">
        </div>
        <br>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email:</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"
            name="email">
        </div>
        <br>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Mensagem</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
        </div>
        <br>
        <input hidden type="date" name="dateFrom" value="<?php echo date('Y-m-d'); ?>" /><br/>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <button type="submit" class="btn btn-primary">Limpar</button>
    </form>
<?php
require 'padrao/footer.php'
?>