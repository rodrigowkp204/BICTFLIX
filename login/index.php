<?php

include('conexao2.php');

if(isset($_POST['email']) || isset($_POST['senha'])){

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0){
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM  usuario WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die ("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){

            $usuario = $sql_query->fetch_assoc();


            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "Falha ao logar! Email ou senha incorretos";
        }

    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bictflix</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="div-main">
        <div class="logo">
        <h1>BICTFLIX</h1>
        </div>
        <form action="" method="POST">
            <h2>Entrar</h2>
            <div class="div-inputs-log1">
                <input id="email-log" type="text" name="email" class="inputs">
                <label class="lab_log1">E-mail</label>

                <div class="div-inputs-log1">
                    <input id="senha-log" type="password" name="senha" class="inputs">
                    <label class="lab_log2">Senha</label>
                </div>
            </div>
            <p>
                <button type="submit" class="btn-log">Entrar</button>
            </p>
            <p class="text1">
                Novo por aqui ? <a href="../teste/index.php">Criar uma conta</a>
            </p>

        </form>
    </div>
</body>

</html>