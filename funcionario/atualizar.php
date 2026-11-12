<?php
    // obter os dados do editar.php
    $id=$_POST['id'];
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $cargo=$_POST['cargo'];
    $salario=$_POST['salario'];
    $admissao=$_POST['admissao'];
    $ativo= '0';
    if (isset($_POST['ativo'])) // precisa do isset pois é uma checkbox e pode vir nulo
    {
        $ativo='1';
    }
    // criar o UPDATE SQL
    $sql = "Update funcionario set nome='$nome', email='$email', cargo='$cargo', salario=$salario, data_admissao='$admissao', ativo='$ativo' where id=$id";
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