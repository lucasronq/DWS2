<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
  <h1>Formulario</h1>

  <div class="container">
  <form action="destino.php" method="POST">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Titulo da pagina</label>
      <input type="title" class="form-control" name="titulo">
     
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Corpo</label>
      <textarea class="form-control" rows="3" name="corpo"></textarea>
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Cor do texto</label>
      <input type="color" class="form-control" name="corTexto">
     
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">URL da imagem</label>
      <input type="link" class="form-control" name="url">
     
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Cor do fundo da pagina</label>
      <input type="color" class="form-control" name="corFundo">
     
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
    <button type="submit" class="btn btn-primary">Limpar</button>
  </form>
  </div>

</body>

</html>