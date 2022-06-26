<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="../img1/b_reto.png"/>


</head>

<body>

    <h1>BICTFLIX</h1>
    

    <div class="div-main">

        <div class="div-form">
    
            <form method="POST" action="../cadastro.php">
                <h2>Cadastro</h2>
                
            
                <div class="div-inputs">
                   
                    <br />
                    <input id="name" type="text" name="nome" class="inputs" required>
                    <label for="Nome" class="lab1">Nome</label>
                    <br />
                </div>

                <div class="div-inputs">
                    
                    <br />
                    <input id="email" type="email" name="email" class="inputs" required>
                    <label for="" class="lab3">E-mail</label>
                    <br />
                </div>
                <!-- <div class="div-inputs">
                    <br />
                    <input id="user" type="text" name="usuario" class="inputs" required>
                    <label for="Usuario" class="lab2">Usuário</label>
                    <br />
                </div> -->

                <div class="div-inputs">
                    <br />
                    <input id="password" type="password" name="senha" class="inputs" required>
                    <label for="" class="lab4">Senha</label>
                    <br /><br />
                </div>

                    <button class="btn-cadastrar">Cadastrar</button>

                    <p>Já tem uma conta? <a href="../login/index.php">Faça seu login</a></p>
            </form>
        </div>
    </div>
</body>

</html>
