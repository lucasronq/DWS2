<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <body>
    <h1>Tabuada</h1>
    <hr>
    <form method="post">
      <label for="num">Digite um número:</label>
      <input type="number" name="num" id="num" required>
      <br><br>
      <button type="submit" name="numero" value="Exibir Tabuada"> Enviar </button>
      <button>Limpar</button>
    </form>
   
    <?php
    
        $num = filter_input(INPUT_POST, "num", FILTER_SANITIZE_SPECIAL_CHARS);
        echo "<h2>Tabuada do $num</h2>";
       
    if (isset($_POST['numero'])) {
      $num = $_POST['num'];
      
      for ($i = 1; $i <= 10; $i++) {
        echo $num . " x " . $i . " = " . ($num * $i) . "<br>";
      }
    }
    ?>
  </body>
</body>
</html>