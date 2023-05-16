<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Textos</title>
    <link rel="stylesheet" href="textos.css">
</head>
    <body>
    <?php
    include("../principais/menu.html")
        ?>
        <div class="pesquisa">
            <div class="filtro"><img src="../imagens/FILTRO.png" width="20px" class="filtrao">Filtrar por
                <select id="Filtross" class="filtrosss">
                    <option selected>Todos</option>
                    <option>Artigo</option>
                    <option>Manuscrito</option>
                    <option>Texto</option>
                </select>
            </div>
            <div class="barra"><input type="text" id="txtBusca" placeholder="Buscar..." maxlength="256" /><img
                    src="../imagens/Lupa.png" class="lupinha" height="30px"></div>
        </div>
        <div class="produtos">
            <div class="itens1">
                <div class="item1">
                    <img src="../imagens/ImagenG.png" width="90%" height="270px">
                    Artigo
                    <a class="b" href="../itens&produtos/item.php">
                        <div class="botaoler">LER
                    </a>
                </div>
            </div>
            <div class="item2">
                <img src="../imagens/ImagenG.png" width="90%" height="270px">
                Manuscrito
                <a class="b" href="../itens&produtos/item.php">
                    <div class="botaoler">LER
                </a>
            </div>
        </div>
        <div class="item3">
            <img src="../imagens/ImagenG.png" width="90%" height="270px">
            Texto
            <a class="b" href="../itens&produtos/item.php">
                <div class="botaoler">LER
            </a>
        </div>
        </div>
        </div>

        </div>

    </body>
    <script src="../java/animateto.js"></script>

</html>