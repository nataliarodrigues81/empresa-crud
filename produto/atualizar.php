<?php
    // obter os dados do editar.php
    $id=$_POST['id'];
    $nome =$_POST['nome'];
    $descricao =$_POST['descricao'];
    $preco =$_POST['preco'];
    $quantidade =$_POST['quantidade'];

    // criar o UPDATE SQL
    $sql = "Update produto set nome='$nome', descricao='$descricao', preco='$preco', quantidade=$quantidade where id=$id";
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