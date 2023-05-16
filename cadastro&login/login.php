<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <?php
    include("../principais/menu.html")
        ?>

    <div class="embaixo">
        <div class="usuario">
            <img src="../imagens/usuario.png" class="usuarioo">
        </div>
        <div class="retangulo">
            <div class="escritas">
                E-mail
                <input type="text" id="txtBusca" class="Email" />
                Senha
                <input type="text" id="txtBusca" class="Senha" />
            </div>
            <div class="sejaaautor">
                <a href="../cadastro&login/cadastro autor.php">
                    <div class="sejaAutor">Seja um Autor ➜</div>
                </a>
            </div>
            <div class="botao">
                <a href="../itens&produtos/textos.php"><button>CONTINUAR</button></a>
            </div><br>
            <div class="final">
                <div class="cadastro">Não tem cadastro?</div>
                <a href="../cadastro&login/cadastro.php">
                    <div class="registre">Registre-se aqui!</div>
                </a>
            </div>

        </div>
    </div>

</body>
<script src="../java/animateto.js"></script>

</html>