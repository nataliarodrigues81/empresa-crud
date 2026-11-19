
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
        $sql = "Select * from cliente where id=$id";
        require_once("../conexao.php");// carrega a conexao
        $result = mysqli_query($conexao,$sql);
        $cliente = mysqli_fetch_assoc($result);//associa o resultado a variavel
    ?>

    <div class="container">
        <h1>Edição de Clientes</h1>

        <form action="atualizar.php" method="post">

            <p>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" required value="<?php echo $cliente['nome']; ?>">
            </p>

            <p>
                <label for="email">Email:</label>
                <input type="email" name="email" required value="<?php echo $cliente['email']; ?>">
            </p>

            <p>
                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" required value="<?php echo $cliente['telefone']; ?>">
            </p>

            <p>
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" required value="<?php echo $cliente['endereco']; ?>">
            </p>

            <p>
                <label for="data_cadastro">Data de cadastro:</label>
                <input type="date" name="data_cadastro" required value="<?php echo $cliente['data_cadastro']; ?>">
            </p>
            <p>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input type="submit" value="Atualizar">
            </p>
        </form>
    </div>
</body>
</html>
