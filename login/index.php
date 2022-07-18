<?php

include('conexao2.php');


if(isset($_POST['email']) || isset($_POST['senha'])){

    if(strlen($_POST['email']) == 0) {
        header("Location: index.php?error=Preencha seu email");
        exit();
    } else if(strlen($_POST['senha']) == 0){
        header("Location: index.php?error=Preencha sua senha");
        exit();
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);
        
        

        $sql_code = "SELECT * FROM  usuario WHERE email = '$email' AND senha = '$senha'";
        $sql_code1 ="SELECT * FROM  disciplina";
        $sql_query1 = $mysqli->query($sql_code1) or die ("Falha na execução do código SQL: " . $mysqli->error);
        $sql_query = $mysqli->query($sql_code) or die ("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){

            $usuario = $sql_query->fetch_assoc();
            $disciplina = $sql_query1->fetch_assoc();



            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['tipo_usuario'] = $usuario['tipo_usuario'];
            $_SESSION['id_disciplina'] = $disciplina['id_disciplina'];

            header("Location: painel.php");

        } else {
            header("Location: index.php?error=E-mail ou Senha incorreta.");
            
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
    <link rel="shortcut icon" href="../img1/b_reto.png" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/d7f94f9242.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style type="text/css">
    
        @import url('https://fonts.googleapis.com/css2? family= Barlow & display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lato:wght@400;700&family=Noto+Sans:wght@400;700&family=Poppins:wght@100&family=Ranchers&family=Redressed&family=Roboto&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box; 
        }

        html{
            width: 100vw;
            height: 100vw;
        }

        body{
            font-family: 'Barlow', sans-serif;
            background: linear-gradient(rgba(17,17,17,0.8), rgba(20,20,20,1)), url(https://img.freepik.com/vetores-gratis/formula-matematica-calculo-matematico-no-quadro-negro-da-escola-algebra-e-geometria-ciencia-giz-padrao-conceito-educacao-vetorial-analise-cientifica-calculo-de-numeros-conhecimento-complexo_102902-3216.jpg?w=2000);
            overflow-y: hidden;
            overflow-x: hidden;
            background-repeat: no-repeat;
            background-size: cover;
        }

        form{
            width: 400px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            box-shadow: 0 0px 5px rgba(0,0,0,0.3);
            padding: 30px 4%;
            background-color: rgba(0,0,0,.75);
        }

        div .logo h1{
            font-family: 'Bebas Neue', cursive;
            letter-spacing: 3px;
            color: #e50914;
            margin-left: 40px;
            margin-top: 19px;
            font-size: 70px;
            cursor: pointer;
            font-weight: 700;  
        }

        form h2{
            font-size: 2.5rem;
            color: #fff;
        }

        label.lab_log1{
            position: absolute;
            top: 15px;
            left: 10px;
            color: rgba(100,100,100);
        }

        .div-inputs-log1 .inputs:focus ~ .lab_log1,
        .div-inputs-log1 .inputs:valid ~ .lab_log1{
            transform: translateY(-33px);
            transition: .9s;
            font-size: 15px;
            color: rgba(100,100,100);
        }

        label.lab_log2{
            position: absolute;
            top: 15px;
            left: 10px;
            color: rgba(100,100,100);
        }

        .div-inputs-log1 .inputs:focus ~ .lab_log2,
        .div-inputs-log1 .inputs:valid ~ .lab_log2{
            transform: translateY(-33px);
            transition: .9s;
            font-size: 15px;
            color: rgba(100,100,100);
        }

        .div-inputs-log1 .inputs:focus,
        .div-inputs-log1 .inputs:valid{
            color: #fff;
            border-bottom: 2px solid #e50914;
        }

        .div-inputs-log1{
            position: relative;
            margin: 35px 0;
        }

        .inputs{
            width: 100%;
            padding: 5px;
            height: 50px;
            border: 0;
            border-bottom: 2px solid rgba(200,200,200);
            outline: 0;
            background-color: #333;
            border-radius: 4px;
        }

        .div-inputs-log1 input:focus{
            color: #fff;
        }

        .text1{
            color: rgba(100,100,100);
        }

        .text1 a{
            font-size: 1rem;
            color: #fff;
        }

        .text1 a:hover{
            text-decoration: none;
            font-weight: 300;
            color: rgba(100,100,100);
        }

        .btn-log{
            background: #e50914;
            color: #ffff;
            width: 100%;
            height: 50px;
            border-radius: 4px;
            font-weight: 500;
            font-size: 16px;
            padding: 10px 0 10px 0;
            cursor: pointer;
            border: none;
        }

        .btn-log:hover{
            transition: .5s;
            background-color: #a50b13;
        }

        .error{
            background: rgba(0,0,0,0.75);
            color: #e27202;
            padding: 10px;
            width: 95%;
            border-radius: 4px;
            text-align: center;
        }

        .login{
            background: rgba(0,0,0,0.75);
            color: #038c04;
            padding: 10px;
            width: 95%;
            border-radius: 4px;
            text-align: center;
        }

        .div-main h1 a{
            color: #e50914;
        }

        .div-main h1 a:hover{
            text-decoration: none;
            letter-spacing: 4px;
        }

    </style>
    
</head>

<body>
    <div class="div-main">
        <div class="logo">
        <h1><a href="painel.php">BICTFLIX</a></h1>
        </div>
        <form action="" method="POST">
            <h2>Entrar</h2>
            <?php if(isset($_GET['error'])){ ?>
                <p class="error"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> <?php echo $_GET['error']; ?></p>
            <?php } ?>

            <?php if(isset($_GET['login'])){ ?>
                <p class="login"><?php echo $_GET['login']; ?></p>
            <?php } ?>

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