<?php
    // Este arquivo CONECTA com o banco de dados MySQL

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bd = "empresa";

    // Chamar o comando para CONECTAR
    $result = mysqli_connect($servidor, $usuario, $senha, $bd);

    // Se a conexão falhar, mostrar o erro e parar
    if (!$result) {
        die("Erro ao conectar: " . mysqli_connect_error());
    }

    // echo "Conexao realizada com sucesso";
?>
