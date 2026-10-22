<?php
    // este arquivo CONECTA com o BD MYSQL
    $servidor="localhost";
    $usuario= "root";
    $senha="";
    $bd="empresa";
    //chamar o comando para CONECTAR
    $result=mysqli_connect($servidor,$usuario,$senha,$bd);
    if ($result) {
        echo "Conexao realizada com sucesso";
    }
    else {
        echo mysqli_error($result);
    }
?>