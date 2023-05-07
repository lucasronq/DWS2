<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando 6</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <?php
    $artista = $_GET['artista'] ?? '';

    function retornaTextoArtista($artista) {
        switch($artista) {
            case '2-D':
                echo "<p>Stuart Pot , mais conhecido como 2-D , é o vocalista, tecladista e frontman do Gorillaz.</p>";
                break;
            case 'Noodle':
                echo "<p>Noodle é o guitarrista principal oficial do Gorillaz.</p>";
                break;
            case 'Murdoc':
                echo "<p>Murdoc Alphonce 'Faust' Niccals é o baixista oficial, líder autoproclamado e fundador do Gorillaz.</p>";
                break;
            case 'Russel':
                echo "<p>Russel Hobbs é o baterista oficial do Gorillaz.</p>";
                break;
        }
    }
    ?>
    <style>
        body{
            background: #d4283e;
        }
    </style>
</head>
<body class="p-3">
    <header class="mb-5">
        <h1>Praticando - Gorillaz</h1>
    </header>
    <main>
        <?php
        if ($artista == '') {
            echo "<div class='d-flex'>
            <a style='width:25%' href='./?artista=2-D'>
                <img src='./2-D.webp' style='width:100%;'/>
            </a>
            <a style='width:25%' href='./?artista=Noodle'>
                <img src='./Noodle.webp' style='width:100%;'/>
            </a>
            <a style='width:25%' href='./?artista=Murdoc'>
                <img src='./Murdoc.webp' style='width:100%;'/>
            </a>
            <a style='width:25%' href='./?artista=Russel'>
                <img src='./Russel.webp' style='width:100%;'/>
            </a>
            </div>";
        } else {
            echo "<div style='display:flex; flex-direction: column;'>
            <p>Você clicou em um <b>$artista</b>.</p>
            <img style='width: 30%' src='./$artista.webp' />";
            retornaTextoArtista($artista);
            echo "<a href='./'>Voltar</a>
            </div>";
        }
        ?>
    </main>
    
</body>
</html>