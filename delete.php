<?php

    if(!empty($_GET['id']))
    {

    include_once("conexao.php");

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM disciplina WHERE id_disciplina = $id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
       $sqlDelete = "DELETE FROM disciplina WHERE id_disciplina = $id";
       $resultDelete = $conexao->query($sqlDelete);
    }
    
    }
    header('Location: listar_disciplina.php');

    
?>
