<?php

	include_once('conexao.php');

	if(isset($_POST['update1'])){

		$id = $_POST['id'];
		$nome=$_POST['nome'];
        $email=$_POST['email'];
        $senha=$_POST['senha'];

        $sqlUpdate = "UPDATE usuario SET nome='$nome',email='$email',senha='$senha' WHERE id_usuario='$id'";

        $result = $conexao->query($sqlUpdate);
	}
	header('Location: login/painel.php?teste=oi');
	//pode redirecionar para o edit_2.php, aparecendo a msg que o perfil foi alterado.
	//editar uma variavel e colocar no edit_2.php, pra personalizar
?>