<?php

    include("conexao.php");

    $nome=$_POST['nome'];
    $usuario=$_POST['usuario'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $tipo=$_POST['tipo_usuario'];

    $sql="INSERT INTO usuario(nome, nome_usuario, email, senha, tipo_usuario) VALUES('$nome', '$usuario', '$email', '$senha', '$tipo')";

    if(mysqli_query($conexao, $sql)){
        header("Location: /login/index.php?login=Usuario Cadastrado");
    }else{
        echo "Erro".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
?>