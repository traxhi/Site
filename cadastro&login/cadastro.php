<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script Storm - Cadastro</title>
    <link rel="stylesheet" href="cadastro.css">
</head>

<body>
    <?php
    include("../principais/menu.html")
        ?>
    <div class="cadastro">
        <img src="../imagens/perfil.png" width="150" height="150" class="perfil">
        <form>
            <label for="nome" class="linha"> Nome:</label>
            <input type="text" class="linha" id="nome" name="nome" required>
            <label for="email" class="linha">E-mail:</label>
            <input type="email" class="linha" id="email" name="email" required>
            <label for="senha" class="linha">Senha:</label>
            <input type="password" class="linha" id="senha" name="senha" value="senha" required>
            <label for="senha" class="linha">Comfirmar Senha:</label>
            <input type="password" class="linha" id="confirmarSenha" name="confirmarSenha" value="confirmarSenha"required> 
        </form>
        <a href="../compra/pagamento.php"><button>CONTINUAR</button></a>
        <script src="../java/animateto.js"></script>
</body>

</html>