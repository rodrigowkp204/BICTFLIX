<?php


if(!isset($_SESSION)) {
		session_start();
	}

if(!isset($_SESSION['id_usuario'])) {

	die("
		<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: box-shadow;
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
        .div-main{
            width: 400px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            box-shadow: 0 0px 5px rgba(0,0,0,0.3);
            padding: 30px 4%;
            background-color: rgba(0,0,0,.75);
        }
        .btn-acessar{
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
        h1{
        	color: #fff;
        }

		a{
			color: #fff;
			text-decoration: none;
		}
		input{
			background: #0909;
		}
		</style>
		
		<html>
			<body>
			    <div class='div-main'>
			        <div class='logo'>
			        	<h1>Você não pode acessar esta página porque não está logado.</h1>
			        </div>
			        <br/><br/>
			        <p class='logar'>
						<button class='btn-acessar'><a href=\"..\..\..\login\index.php\">Entrar</a></button>
					</p>
    			</div>
			</body>
		</html>");
}

?>

