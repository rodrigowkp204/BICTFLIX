<?php

    if(!empty($_GET['id']))
    {

    include_once("conexao.php");

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM video WHERE id_video = $id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
       $sqlDelete = "DELETE FROM video WHERE id_video = $id";
       $resultDelete = $conexao->query($sqlDelete);
    }
    
    }
    header('Location: listar_video.php');

    
?>
