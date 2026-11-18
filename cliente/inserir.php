<?php
    $nome =$_POST['nome'];
    $email =$_POST['email'];
    $telefone =$_POST['telefone'];
    $endereco =$_POST['endereco'];
    $data_cadastro =$_POST['data_cadastro'];
    
    // criar a instrução SQL
    $sql="insert into cliente(nome,email,telefone,endereco,data_cadastro) 
            values ('$nome', '$email', '$telefone', '$endereco', '$data_cadastro')";
    require_once("../conexao.php"); //chama o arq de conexao
    $resposta=mysqli_query($conexao,$sql); // executa o SQL
    if($resposta == true)
    {
        header("location: listar.php"); //redireciona
    }

?>

