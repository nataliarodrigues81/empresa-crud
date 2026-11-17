<?php
    $nome =$_POST['nome'];
    $descricao =$_POST['descricao'];
    $preco =$_POST['preco'];
    $quantidade =$_POST['quantidade'];
    
    // criar a instrução SQL
    $sql="insert into produto(nome,descricao,preco,quantidade) 
            values ('$nome', '$descricao', '$preco', '$quantidade')";
    require_once("../conexao.php"); //chama o arq de conexao
    $resposta=mysqli_query($conexao,$sql); // executa o SQL
    if($resposta == true)
    {
        header("location: listar.php"); //redireciona
    }

?>

