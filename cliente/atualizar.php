<?php
    // obter os dados do editar.php
    $id=$_POST['id'];
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $telefone=$_POST['telefone'];
    $endereco=$_POST['endereco'];
    $data_cadastro=$_POST['data_cadastro'];

    // criar o UPDATE SQL
    $sql = "Update cliente set nome='$nome', email='$email', telefone='$telefone', endereco='$endereco', data_cadastro='$data_cadastro' where id=$id";
    //echo $sql; // teste
    // executar o SQL
    include_once("../conexao.php"); //conecta o BD
    $result = mysqli_query($conexao,$sql);
    if ($result==true)
    {
        header("location: listar.php"); 
    }
    else
    {
        mysqli_error($conexao);
    }
?>