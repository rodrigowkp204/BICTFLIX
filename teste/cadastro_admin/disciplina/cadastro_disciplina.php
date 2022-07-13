<?php

    include("../../../conexao.php");

    $nome_disciplina=$_POST['nome_disciplina'];
    $id_tema=$_POST['id'];

    $sql="INSERT INTO disciplina(nome_disciplina, id_tema_fk) VALUES('$nome_disciplina', '$id_tema')";

    if(mysqli_query($conexao, $sql)){
        header("Location: disciplina.php?cadastro=Disciplina Cadastrada");
    }else{
        echo "Erro".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
?>