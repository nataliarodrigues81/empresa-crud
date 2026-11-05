<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Funcionários</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">
</head>
<body>
    <?php include("../menu.php"); ?> 
    <div class="container">
        <h1 class="mt-4 mb-4">Listar Funcionários</h1>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nome</th>
                    <th>Cargo</th>
                    <th>Salário</th>
                    <th>Operação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once("../conexao.php");
                    $sql = "select * from funcionario"; // cria o SELECT
                    $result = mysqli_query($conexao, $sql); // EXECUTA o sql
                    while($linha = mysqli_fetch_assoc($result)) // ASSOCIA OS DADOS DO RESULTADO
                    { //vamos fechar o php para digitar HTML a seguir ?>
                       <tr>
                            <td><?php echo $linha["nome"]; ?></td>
                            <td><?php echo $linha["cargo"]; ?></td>
                            <td><?php echo $linha["salario"]; ?></td>
                            <td>
                                <a href="editar.php?id=<?php echo $linha['id']; ?>" class="btn btn-warning">Editar</a>
                                <button class="btn btn-danger">Remover</button>
                            </td>
                        </tr>
                        <?php //reabrir o php
                        } ?>

        </table>
</div>
    
</body>
</html>