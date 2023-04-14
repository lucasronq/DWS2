<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
    <body>
        <h1>Tabelas</h1>
        <hr>
        <div class="container-sm">
            <form method="POST" action="index2.php">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Linhas</label>
                    <input type="number" class="form-control" min="1" name="linhas" id="exampleInputPassword1" required>
                </div>
                <br>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Colunas</label>
                    <input type="number" class="form-control" min="1" name="colunas" id="exampleInputPassword1" required>
                </div>
                <label for="estilo">Estilo:</label>
                <select id="estilo" name="estilo">
                    <option value="table-danger">red</option>
                    <option value="table-primary">blue</option>
                    <option value="black">black</option>
                    <option value="green">green</option>
                </select>
                <br>
                <br>
                <input type="submit" value="Criar tabela">
            </form>
        </div>
       
    </body>
</html>

