<?php

    include("../../../conexao.php");

    $nome_tema=$_POST['nome_tema'];

    $sql="INSERT INTO tema(nome_tema) VALUES('$nome_tema')";

    if(mysqli_query($conexao, $sql)){
        header("Location: periodo.php?cadastro1=Período Cadastrado");
    }else{
        echo "Erro".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
?>