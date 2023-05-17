<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publique aqui!</title>
    <link rel="stylesheet" href="publicar.css">
</head>

<body>
    <?php
    include("../principais/menu.html")
        ?>
    <div class="caixa1">Publicar Obra</div>
    <div class="caixa2">
        <div class="caixa3">
            <div id="image-container">
                <img src="../imagens/ImagenG.png" width="300px" height="350px" class="imagem">
            </div>
            <input type="file" id="image-input">
            <button class="cx" onclick="sendImage()">Importar capa</button>

        </div>
        <div class="caixa4">
            <div class="obra">
                <input type="text" class="linha" id="titulo" name="titulo" placeholder="Dê um nome à sua obra..."
                    required><br>
                <input type="text" class="linha" id="sinopse" name="sinopse" placeholder="Insira uma sinopse" required>
            </div>
            <div class="caixa5">
                <textarea class="linha2" id="capitulo" name="capitulo" placeholder="Escreva seu primeiro capítulo..."
                    wrap="hard"></textarea>
            </div>
        </div>
</body>
<script src="../java/animateto.js"></script>
<script>
    function sendImage() {
        var input = document.getElementById('image-input');
        var container = document.getElementById('image-container');

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                var img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('image-preview');
                container.innerHTML = '';
                container.appendChild(img);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>