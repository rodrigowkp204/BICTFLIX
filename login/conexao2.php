<?php

$usuario = 'root';
$senha = '';
$database = 'bictflix1';
$host = 'localhost';


$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
	die("Falha ao se conectar" . $mysqli->error);
}

?>