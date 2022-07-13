<?php

    include("../../../conexao.php");

    $link_video=$_POST['video_link'];
    $nome_video=$_POST['video_nome'];
    $id_disciplina_fk=$_POST['id'];

    $sql="INSERT INTO video(link_video, nome_video, id_disciplina_fk) VALUES('$link_video','$nome_video', $id_disciplina_fk)";

    if(mysqli_query($conexao, $sql)){
        header("Location: video.php?video=Vídeo Cadastrado");
    }else{
        echo "Erro".mysqli_connect_error($conexao);
    }
    mysqli_close($conexao);
?>