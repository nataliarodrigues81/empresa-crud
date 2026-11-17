
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php
        include_once("../menu.php");
        // obter o ID
        $id = $_GET['id']; //paga o dado vindo da URL
        //executar o SELECT 
        $sql = "Select * from produto where id=$id";
        require_once("../conexao.php");// carrega a conexao
        $result = mysqli_query($conexao,$sql);
        $produto = mysqli_fetch_assoc($result);//associa o resultado a variavel
    ?>

    <div class="container">
        <h1>Edição de Produtos</h1>

        <form action="atualizar.php" method="post">

            <p>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" required value="<?php echo $produto['nome']; ?>">
            </p>

            <p>
                <label for="descricao">Descrição:</label>
                <input type="text" name="descricao" required value="<?php echo $produto['descricao']; ?>">
            </p>

            <p>
                <label for="preco">Preço:</label>
                <input type="number" name="preco" step="0.01" required value="<?php echo $produto['preco']; ?>">
            </p>

            <p>
                <label for="quantidade">Quantidade:</label>
                <input type="number" name="quantidade" required value="<?php echo $produto['quantidade']; ?>">
            </p>

            <p>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" value="Atualizar">
            </p>
        </form>
    </div>
</body>
</html>
