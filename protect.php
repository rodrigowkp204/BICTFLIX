<?php


if(!isset($_SESSION)) {
		session_start();
	}

if(!isset($_SESSION['id_usuario'])) {
	die("Você não pode acessar esta página porque não está logadoo.<p><a href=\"index.php\">Entrar</a></p>");
}

?>
