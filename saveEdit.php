<?php

	include_once('conexao.php');

	if(isset($_POST['update'])){

		$id = $_POST['id'];
		$nome=$_POST['nome'];
        $email=$_POST['email'];
        $senha=$_POST['senha'];
        $tipo=$_POST['tipo_usuario'];

        $sqlUpdate = "UPDATE usuario SET nome='$nome',email='$email',senha='$senha',tipo_usuario='$tipo' WHERE id_usuario='$id'";

        $result = $conexao->query($sqlUpdate);
	}
	header('Location: login/painel.php');
?>