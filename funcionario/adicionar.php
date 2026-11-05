
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
</head>
<body>
    <?php
        include_once("../menu.php");
    ?>

    <div class="container">
        <h1>Cadastro de Funcionários</h1>

        <form action="inserir.php" method="post">

            <p>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </p>

            <p>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </p>

            <p>
                <label for="cargo">Cargo:</label>
                <input type="text" id="cargo" name="cargo" required>
            </p>

            <p>
                <label for="salario">Salário:</label>
                <input type="number" id="salario" name="salario" required>
            </p>

            <p>
                <label for="data">Data de admissão:</label>
                <input type="date" id="data" name="admissao" required>
            </p>

            <p>
                <input type="submit" value="Cadastrar">
                <input type="reset" value="Limpar">
            </p>

        </form>
    </div>

</body>
</html>
