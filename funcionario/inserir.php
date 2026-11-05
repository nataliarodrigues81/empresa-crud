<?php
    $nome =$_POST['nome'];
    $email =$_POST['email'];
    $cargo =$_POST['cargo'];
    $salario =$_POST['salario'];
    $admissao =$_POST['admissao'];
    
    // criar a instrução SQL
    $sql="insert into funcionario(nome,email,cargo,salario,data_admissao) 
            values ('$nome', '$email', '$cargo', '$salario', '$admissao')";
    require_once("../conexao.php"); //chama o arq de conexao
    $resposta=mysqli_query($conexao,$sql); // executa o SQL
    if($resposta == true)
    {
        header("location: listar.php"); //redireciona
    }

?>

