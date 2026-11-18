<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Clientes</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">
</head>
<body>
    <?php include("../menu.php"); ?> 
    <div class="container">
        <h1 class="mt-4 mb-4">Listar Clientes</h1>
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Endereço</th>
                    <th>Data de cadastro</th>
                    <th>Operação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once("../conexao.php");
                    $sql = "select * from cliente"; // cria o SELECT
                    $result = mysqli_query($conexao, $sql); // EXECUTA o sql
                    while($linha = mysqli_fetch_assoc($result)) // ASSOCIA OS DADOS DO RESULTADO
                    { //vamos fechar o php para digitar HTML a seguir ?>
                       <tr>
                            <td><?php echo $linha["nome"]; ?></td>
                            <td><?php echo $linha["email"]; ?></td>
                            <td><?php echo $linha["telefone"]; ?></td>
                            <td><?php echo $linha["endereco"]; ?></td>
                            <td><?php echo $linha["data_cadastro"]; ?></td>
                            <td>
                                <a href="editar.php?id=<?php echo $linha['id']; ?>" class="btn btn-warning">Editar</a>
                                
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalremover<?php echo $linha['id']; ?>">
                            Remover
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modalremover<?php echo $linha['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Remover Cliente</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Confirma Exclusão do registro ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <a href="remover.php?id=<?php echo $linha['id']; ?>" class="btn btn-danger">Sim</a>
                                </div>
                                </div>
                            </div>
                            </div>
                            </td>
                        </tr>
                        <?php //reabrir o php
                        } ?>

        </table>
</div>
    
</body>
</html>