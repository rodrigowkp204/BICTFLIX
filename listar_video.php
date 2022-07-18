<?php

    include_once("conexao.php");

    $sql = "SELECT * FROM video ORDER BY id_video DESC";

    $result = $conexao->query($sql);

    //print_r($result);

    
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../../../img1/b_reto.png"/>
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

        /*Fundo da página*/

        html {

            width: 100vw;
            height: 100vw;
    
        }


        body{
            margin: 0;
            font-family: 'Barlow', sans-serif;
            background: linear-gradient(rgba(17,17,17,0.8), rgba(20,20,20,1)), url(https://img.freepik.com/vetores-gratis/formula-matematica-calculo-matematico-no-quadro-negro-da-escola-algebra-e-geometria-ciencia-giz-padrao-conceito-educacao-vetorial-analise-cientifica-calculo-de-numeros-conhecimento-complexo_102902-3216.jpg?w=2000);
            overflow-y: hidden;
            overflow-x: hidden;
            background-repeat: no-repeat;
            background-size: cover;
         /* background-position: center center; */
        }

        .div-main{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
   
        h1 a{
            font-family: 'Bebas Neue', cursive;
            letter-spacing: 3px;
            color: #e50914;
            margin-left: 40px;
            margin-top: 19px;
            font-size: 70px;
            cursor: pointer;
        }

        h1 a:hover{
            letter-spacing: 4px;
            color: #e50914;
        }

        form{
            margin-top: 26px;
            min-width: 1000px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            box-shadow: 0 0px 5px rgba(0,0,0,0.3);
            padding: 36px 80px 36px 80px;
            background-color: rgba(0,0,0,.75);
            border-radius: 15px;
        }

        .table-bg{
            background: rgba(0,0,0,0.3);
            border-radius: 15px 15px 0 0;

        }

        img.logo1{
            color: #e50914;
            width: 96%;
            height: 17%;
            margin-left: 4px;
        }

        h2{
            margin-bottom: 30px;
            color: white;
            font-size: 32px;
            font-family: Arial, Helvetica, sans-serif;
        }

        label.lab1{
            position: absolute;
            top: 38px;
            left: 20px;
            color: rgba(100,100,100);
        }

        .div-inputs .inputs:focus ~ .lab1,
        .div-inputs .inputs:valid ~ .lab1{
            transform: translateY(-17px);
            font-size: 14px;
            transition: .5s;
            color: rgba(100,100,100);
        }

        .div-inputs .inputs:focus,
        .div-inputs .inputs:valid{
            border-bottom: 2px solid #e50914;
            color: #fff;
        }

        .div-inputs{
            position: relative;
            margin: 5px 0;
        }

        .inputs{
            width: 100%;
            padding: 16px 20px 0;
            height: 60px;
            border: 0;
            border-bottom: 2px solid rgba(200,200,200);
            outline: 0;
            background-color: #333;
            border-radius: 4px;
        }

        .div-inputs input:focus{
            color: #fff;
        }

        .btn-cadastrar{
            background: #e50914;
            color: #ffff;
            width: 100%;
            height: 50px;
            border-radius: 4px;
            font-weight: bold;
            font-size: 20px;
            padding: 10px 0 10px 0;
            cursor: pointer;
            border: none;
        }

        .btn-cadastrar:hover{
            transition: .5s;
            background-color: #a50b13;
        }

        .btn-inicial{
            background: #e50914;
            color: #ffff;
            width: 100%;
            height: 50px;
            border-radius: 4px;
            font-weight: bold;
            font-size: 20px;
            padding: 10px 0 10px 0;
            cursor: pointer;
            border: none;
        }

        .btn-inicial:hover{
            transition: .5s;
            background-color: #a50b13;
        }

        p{
            color: white;
            margin-top: 20px;
        }

        a{
            text-decoration: none;
            color: #fff;
        }

        a:hover{
            letter-spacing: 0.3px;
            color: #333;
        }

        .cadastro{
            background: rgba(0,0,0,0.75);
            color: #038c04;
            padding: 10px;
            width: 95%;
            border-radius: 4px;
            text-align: center;
        }

        button:disabled{
            opacity: .4;
            cursor: default;   
        }

        label.tipo2{
            color: #fff;
        }

        h3{
            color: #fff;
        }
        select.slc_periodo{
            width: 100%;
            height: 45px;
            background-color: #333;
            color: #fff;
            border-radius: 4px;
            border: 0;
            border-bottom: 2px solid rgba(200,200,200);
            text-align: center;
            font-size: 1rem;
            cursor: pointer;
        }

    </style>
</head>

<body>

    <h1><a href="../../../login/painel.php" class="logo">BICTFLIX</a></h1>

    <div class="div-main">

        <div class="div-form">
    
            <form method="POST" action="cadastro_disciplina.php">
                <div class="m-2">
                <table class="table text-white table-bg">
                    <thead>
                        <th scope="col">ID</th>
                        <th scope="col">Nome Video</th>
                        <th scope="col">Link Video</th>
                        <th scope="col">ID_Discilpina</th>
                        <th scope="col">...</th>
                    </thead>
                    <tbody>
                        <?php
                            while($user_data = mysqli_fetch_assoc($result))
                            {
                                echo "<tr>";
                                echo "<td>" .$user_data['id_video']. "</td>";
                                echo "<td>" .$user_data['nome_video']. "</td>";
                                echo "<td>" .$user_data['link_video']. "</td>";
                                echo "<td>" .$user_data['id_disciplina_fk']. "</td>";
                                echo "<td> <a href='delete_video.php?id=$user_data[id_video]'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                        </svg></a> </td>";
                                echo "<tr>";
                            }
                        ?>
                    </tbody>
                </table>
                </div>
                </div>
            </form>
            
        </div>
    </div>
</body>

</html>