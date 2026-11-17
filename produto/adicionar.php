
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
        include_once("../menu.php");
    ?>

    <div class="container">
        <h1>Cadastro de Produtos</h1>

        <form action="inserir.php" method="post">

            <p>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </p>

            <p>
                <label for="descricao">Descrição:</label>
                <input type="text" id="descricao" name="descricao" required>
            </p>

            <p>
                <label for="preco">Preço:</label>
                <input type="number" id="preco" name="preco" step="0.01" required>
            </p>

            <p>
                <label for="quantidade">Quantidade:</label>
                <input type="number" id="quantidade" name="quantidade" required>
            </p>

            <p>
                <input type="submit" value="Cadastrar">
                <input type="reset" value="Limpar">
            </p>

        </form>
    </div>

</body>
</html>
