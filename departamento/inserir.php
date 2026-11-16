<?php
    $nome =$_POST['nome'];
    $descricao =$_POST['descricao'];
    
    // criar a instrução SQL
    $sql="insert into departamento(nome,descricao) 
            values ('$nome', '$descricao')";
    require_once("../conexao.php"); //chama o arq de conexao
    $resposta=mysqli_query($conexao,$sql); // executa o SQL
    if($resposta == true)
    {
        header("location: listar.php"); //redireciona
    }

?>

