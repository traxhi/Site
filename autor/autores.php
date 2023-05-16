<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autores</title>
    <link rel="stylesheet" href="autores.css">
</head>

<body>
    <?php
    include("../principais/menu.html")
        ?>
    <div class="pesquisa">
        <div class="barra"><input type="text" id="txtBusca" placeholder="Buscar..." maxlength="256" /><img
                src="../imagens/Lupa.png" class="lupinha" height="30px"></div>
    </div>
    <div class="produtos">
        <div class="itens1">
            <div class="item1">
                <img src="../imagens/ImagenG.png" width="90%" height="300px">
                Autor 1
                <a class="b" href="../autor/biografia.php">
                    <div class="botaover">VER
                </a>
            </div>
        </div>
        <div class="item2">
            <img src="../imagens/ImagenG.png" width="90%" height="300px">
            Autor 2
            <a class="b" href="../autor/biografia.php">
                <div class="botaover">VER
            </a>
        </div>
    </div>
    <div class="item3">
        <img src="../imagens/ImagenG.png" width="90%" height="300px">
        Autor 3
        <a class="b" href="../autor/biografia.php">
            <div class="botaover">VER
        </a>
    </div>
    </div>
    <div class="item4">
        <img src="../imagens/ImagenG.png" width="90%" height="300px">
        Autor 4
        <a class="b" href="../autor/biografia.php">
            <div class="botaover">VER
        </a>
    </div>
    </div>
    </div>

    </div>
    <a href="../autor/autores.php">
        <div class="mais">
            Mais Autores
        </div>
    </a>

</body>
<script src="../java/animateto.js"></script>

</html>