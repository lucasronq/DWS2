<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h1>Contador</h1>
    <hr>

    <form method="post">
        <div class="inicio">
            <label for="inicio">Inicio:</label>
            <input type="number" name="inicio" id="inicio" required>
        </div>
       <div class="final">
            <label for="final">Final:</label>
            <input type="number" name="final" id="final" required>
       </div>
        <div class="incremento">
            <label for="incremento">Incremento:</label>
            <input type="number" name="incremento" id="icre" required>
        </div>
        <input type="submit" value="Contar">
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $ini = $_POST['inicio'];
            $fim = $_POST['final'];
            $incre = $_POST['incremento'];

            echo "<p>Inicio: $ini</p>";
            echo "<p>Fim: $fim</p>";
            echo "<p>Incremento: $incre</p>";
            
            if ($ini < $fim) {
                for ($i = $ini; $i <= $fim; $i += $incre) {
                  echo "<p>$i</p>";
                }
              } else {
                for ($i = $ini; $i >= $fim; $i -= $incre) {
                  echo "<p>$i</p>";
                }
              }
        }
    ?>
</body>
<style>
    .contador{
        display: flex;

    }
</style>
</html>