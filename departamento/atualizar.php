<?php
    // obter os dados do editar.php
    $id=$_POST['id'];
    $nome =$_POST['nome'];
    $descricao =$_POST['descricao'];
    // criar o UPDATE SQL
    $sql = "Update departamento set nome='$nome', descricao='$descricao' where id=$id";
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