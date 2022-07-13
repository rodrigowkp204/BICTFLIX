<?php

    include('protect.php');
    include_once("../conexao.php");

    $consulta = "SELECT * FROM disciplina";
    $con = $conexao->query($consulta) or die ($mysqli->error);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BICTFLIX</title>
    <script src="https://kit.fontawesome.com/d7f94f9242.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="painel.css">
    <link rel="shortcut icon" href="B_bictflix (reto).png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link  rel="stylesheet"  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <style type="text/css">
        *{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        p{
            font-weight: 300;
            color: #111;
        }

        body{
            min-height: 1000px;
            background-color: #090909;
        }

        .banner{
            position: relative;
            width: 100%;
            min-height: 100vh;
            padding: 0 100px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            background: url(../img1/fundo2.png);
            background-size: cover;
        }

        .banner .content h2{
            font-size: 5em;
            color: #090909;
        }

        .banner .content p{
            font-size: 1em;
            color: #090909;
            font-weight: 300;
            line-height: 1.5em;
            margin: 10px 0 20px;
        }

        .banner .content h4{
            color: rgba(255,255,255,0.5);
            font-weight: 500;
        }

        .banner .content h4 span {
            color: #090909;
            padding: 0 10px;
            border-right: 1px solid #090909;
        }

        .banner .content h4 span:first-child{
            padding-left: 0;
        }

        .banner .content h4 span:last-child{
            border-right: none;
        }

        .banner .content h4 span i{
            background: #de0611;
            color: #fff;
            padding: 0 8px;
            display: inline-block;
            font-style: normal;
            border-radius: 2px;
        }

        .banner .content .buttons {
            position: relative;
        }

        .banner .content .buttons a{
            position: relative;
            display: inline-block;
            margin-right: 10px;
            background: #de0611;
            color: #fff;
            padding: 6px 20px;
            text-decoration: none;
            font-weight: 500;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .banner .content .buttons a:nth-child(2){
            background: rgba(0,0,0,0.5);
            border: 1px solid rgba(255,255,255,0.1);
        }

        .banner .content .buttons a:hover:nth-child(2){
            background: #de0611;
        }

        .btn{
            font-size: 1em;
            color: #fff;
            background: #de0611;
            display: inline-block;
            padding: 10px 30px;
            margin-top: 20px;
            text-decoration: none;
            letter-spacing: 2px;
            transition: 0.5s;
        }

        .btn:hover{
            letter-spacing: 6px;
        }

        header{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 40px 100px;
            z-index: 10000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: 0.5s;
        }

        header.sticky{
            background: #090909;
            padding: 10px 100px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        }

        header .logo img{
            width: 50%;
            height: 5%;
        }

        header.sticky .logo{
            color: #111;
        }

        header .navegation{
            position: relative;
            display: flex;
            align-items: center;
        }

        header .navegation li{
            list-style: none;
            margin-left: 30px;   
            margin-right: 30px; 
        }

        header .navegation li a{
            text-decoration: none;
            color: #fff;
            font-weight: 300;
        }

        header ul{
            padding-left: 0;
        }

        header .navegation li a:hover{
            color: #ff0157;
            border-bottom: 1px solid #ff0157;
        }

        header.sticky .navegation li a{
            color: #fff;
        }

        header.sticky .navegation li a:hover{
            color: #ff0157;
            border-bottom: 2px solid #ff0157;
        }

        .search{
            position: relative;
            width: 300px;
            height: 40px;
            margin-right: 25px;
            margin-left: 25px;
        }

        .search input {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            color: #fff;
            background: transparent;
            border: 1px solid rgba(255,255,255,0.5);
            outline: none;
            border-radius: 4px;
            padding: 0 10px 0 45px;
            backdrop-filter: blur(10px);
        }

        .search input::placeholder{
            color: #fff;
        }

        .search .fa-search {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            padding-right: 50px;
            color: #fff;
            border-radius: 1px solid #fff;
        }

        header.sticky .search input{
            color: #fff;
        }

        .user ul{
            display: inline-flex;
            list-style-type: none;
            padding: 0;
            color: #fff;
        }
        .navegation ul{
            display: inline-flex;
            list-style-type: none;
            padding: 0;
            color: #fff;
        }

        .user ul li {
            display: inline-block;
        }

        .user ul li a{
            display: inline-block;
            text-decoration: none;
            padding: 10px 10px 2px;
        }

        .user ul:hover{
            cursor: pointer;
        }

        .user ul ul{
            display: none;
            right: 1;
            position: absolute;
            background-image: linear-gradient(0deg, #090909,transparent);
            padding: 0 0  10px 0;
            font-size: 15px;
            text-align: left;
        }

        .user ul li:hover ul{
            display: block;
            cursor: pointer;
        }

        .user ul ul{
            width: 110px;
        }

        .user ul ul li a{
            display: block;
            color: #fff;
        }

        .user ul li a:hover{
            transform: scale(1.1);
        }

        header.sticky .user ul ul{
            background-color: #090909; 
        }

        header.sticky .user li a{
            color: #fff;
        }

        .per ul ul{
            display: none;
            right: 1;
            position: absolute;
            background-image: linear-gradient(0deg, #090909,transparent);
            padding: 0 0  10px 0;
            font-size: 15px;
            text-align: left;
        }

        .per ul li:hover ul{
            display: block;
        }

        .per ul ul{
            width: 145px;
        }

        .per ul ul li a{
            display: block;
            margin-bottom: 31px;
            margin-top: 31px;
        }
        .per ul li ul li ul.teste1{
            display: none;
        }
        .per ul li ul li:hover ul.teste1{
            display: block;
        }
        .per ul ul ul{
            margin-left: 115px;
            margin-top: -50px;
        }

        header.sticky .per ul ul{
            display: none;
            right: 1;
            position: absolute;
            background-color: #090909;
            padding: 0 0  10px 0;
            font-size: 15px;
            text-align: left;
        }

        header.sticky .per ul li:hover ul{
            display: block;
        }

        .thumbSection{
            padding-top: 3%;
            color: #fff;
        }

        .thumbTitle{
            font-size: 16px;
            line-height: 14px;
            font-weight: 500;
            margin: 0 4% 12px; 
        }

        .thumbTiles.swiper{
            padding: 0 4%;
        }

        .thumbTile{
            width: 20%;
        }

        .thumbTile_iframe{
            width: 100%;
            border-radius: 4px;
        }

        .thumbTiles .swiper-button-prev,
        .thumbTiles .swiper-button-next{
            height: 100%;
            width: 4%;
            width: calc(4% - 5px);
            top: 0;
            bottom: 0;
            margin: 0;
            background-color: rgba(20,20,20,0.5);
        }

        .thumbTiles .swiper-button-prev{
            left: 0;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
        }

        .thumbTiles .swiper-button-next{
            right: 0;
            border-top-left-radius: 4px;
            border-bottom-left-radius: 4px;
        }

        .thumbTiles .swiper-button-prev::after,
        .thumbTiles .swiper-button-next::after{
            color: #fff;
            font-size: 4vw;
            font-weight: bold;
            transition: transform 0.1s ease-out;
        }

        @media screen and (min-width: 640px) {
            .thumbTiles .swiper-button-prev::after,
            .thumbTiles .swiper-button-next::after {
                display: none;
                font-size: 2.4vw;
            }

            .thumbTiles .swiper-button-prev:hover::after,
            .thumbTiles .swiper-button-next:hover::after {
                transform: scale(1.25);
            }

            .thumbTiles:hover .swiper-button-prev::after,
            .thumbTiles:hover .swiper-button-next::after {
                display: block;
            }
        }

        .sessoes {
            display: flex;
            justify-content: space-between;
            align-content: center;
            align-items: center;
        }

        button.btn.btn-sm.btn-danger.btn_del{
            padding: 3px 30px 5px;
            margin: 10px 57px 10px 10px;
        }

        button.btn.btn-sm.btn-primary.btn_del{
            background: #0d6efd;
            padding: 3px 30px 5px;
            margin: 10px 57px 10px 10px;
        }


    </style>



</head>
    
<body>
    <header>
        <a href="" class="logo"><img src="logo_bictflix.png" alt=""></a>
        <!--NAVEGAÇÃO-->
        <div class="per">
            <ul class="navegation">
                <li><a href="#banner">Inicio</a></li>
                <li><a href="">Períodos</a>
                    <ul>
                        <li><a href="#first">
                            <?php if($_SESSION['tipo_usuario'] == '1') { ?>
                                <li><a href="../teste/cadastro_admin/periodo/periodo.php"><i class="fa fa-plus" aria-hidden="true"></i> Criar Período</a></li>
                            <?php } ?>
                        </a></li>
                    </ul>
                <li><a href="">Disciplina</a>
                    <ul>
                        <li><a href="#second">
                            <?php if($_SESSION['tipo_usuario'] == '1') { ?>
                                <li><a href="../teste/cadastro_admin/disciplina/disciplina.php"><i class="fa fa-plus" aria-hidden="true"></i> Criar Disciplina</a></li>
                            <?php } ?>
                        </a></li>
                    </ul>
                </li>

                <li><a href="">Vídeo</a>
                    <ul>
                        <li><a href="#three">
                            <?php if($_SESSION['tipo_usuario'] == '1') { ?>
                                <li><a href="../teste/cadastro_admin/video/video.php"><i class="fa fa-plus" aria-hidden="true"></i> Adicionar Vídeo</a></li></a></li>
                            <?php } ?>
                        </a></li>
                    </ul>
                </li>

                <li><a href="#">Contato</a></li>
            </ul>
        </div>
        <!--BUSCA-->
        <div class="search">
            <input type="text" placeholder="Search">
            <i class="fas fa-search"></i>
        </div>
        <!--USUARIO-->
        <div class="user">
            <ul>
                <li><a><?php echo $_SESSION['nome']?></a></li>
                <li><a><i class="fa fa-sort-desc" aria-hidden="true"></i></a>
                    <ul>
                        <?php if($_SESSION['tipo_usuario'] == '1') { ?>
                        <li><a href="../teste/cadastro_admin/index.php"><i class="fa fa-plus" aria-hidden="true"></i> Criar um Admin</a></li>
                        <li><a href="../edit.php?id=<?php echo $_SESSION['id_usuario']?>"><i class="fa-solid fa-pencil"></i> Perfil Admin</a></li>
                        <?php } ?>
                        <?php if($_SESSION['tipo_usuario'] == '0') { ?>
                        <li><a href="../edit_2.php?id=<?php echo $_SESSION['id_usuario']?>"><i class="fa-solid fa-pencil"></i> Perfil</a></li>
                        <?php } ?>
                        <li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    <!--SESSÃO INICIAL-->
    <section class="banner" id="banner">
        <!--DESCRIÇÃO-->
        <div class="content">
            <h2>BICT</h2>
            <h4>
                <span>2013</span>
                <span>3 anos</span>
                <span>Ciência e Tecnologia</span>
            </h4>
            <p>O curso tem como objetivos: Agregar uma formação geral, humanística e científica<br> com aprofundamento no campo das Ciências e das Tecnologias (incluindo disciplinas<br> como física, matemática, química, letras, administração e componentes das áreas<br> tecnológicas);Formar profissionais com sólidos fundamentos teóricos e práticos, e<br> com uma visão integrada dessas diferentes áreas do saber;Possibilitar ao aluno(a)<br> a aquisição de competências e habilidades específicas para o aprendizado no campo<br> da Engenharia.</p>
            <!--<div class="buttons">
                <a><i class="fa fa-play" aria-hidden="true"></i> Play</a>
                <a href="#"><i class="fa fa-plus" aria-hidden="true"></i> Watch Now</a>
            </div>-->
        </div>
    </section>
    <main>
        <!--PRIMEIRA SESSÃO-->
       <section class="thumbSection">
            <div class="sessoes">
                
                <!--<h2 id="first" class="thumbTitle">Disciplina 1</h2>
                <div class="botoes">
                    <button class="btn btn-sm btn-primary btn_del">
                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                         <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/></svg>
                    </button>
                    <button class="btn btn-sm btn-danger btn_del"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16"><path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/></svg></button>
                </div>-->
                <?php while ($dado = $con->fetch_array()){?>
            </div>
                <div class="thumbTiles swiper">
                <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                      <!-- Slides -->
                        <div class="swiper-slide">
                            <h2><?php echo $dado['nome_disciplina']?></h2>
                            <?php 
                            	$sql1 = "SELECT * FROM video WHERE id_disciplina_fk=".$dado['id_disciplina'];
   								$con1 = $conexao->query($sql1) or die ($mysqli->error);
   									while($row  = $con1->fetch_array()){?>
   										<a class="thumbTile"><iframe class="thumbTile_iframe <?php echo $row['id_video']?>" width="500" height="315" src="https://www.youtube.com/embed/videoseries?list=<?php echo $row['link_video']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a></div><br/><br/><br/>
   									<?php } ?>
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                </div>
                <?php } ?>
                
        </section>
    <!--SEGUNDA SESSÃO-->
    <!--
    <section class="thumbSection">
            <div class="sessoes">
                
                <h2 id="first" class="thumbTitle"><?php echo $_SESSION['nome']?></h2>
                <h2 id="second" class="thumbTitle">Disciplina 2</h2>
                <?php if($_SESSION['tipo_usuario'] == '1') { ?>
                <div class="botoes">
                    <button class="btn btn-sm btn-primary btn_del">
                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                         <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/></svg>
                    </button>
                    <button class="btn btn-sm btn-danger btn_del"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3-fill" viewBox="0 0 16 16"><path d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z"/></svg></button>
                </div>
                <?php } ?>
            </div>
                <div class="thumbTiles swiper">
                
                    <div class="swiper-wrapper">
                      
                        <div class="swiper-slide">
                           <a class="thumbTile"><iframe class="thumbTile_iframe" width="500" height="315" src="https://www.youtube.com/embed/videoseries?list=PL53AF5032B8C16697" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                        </div>
                        <div class="swiper-slide">
                            <a class="thumbTile"><iframe class="thumbTile_iframe" width="500" height="315" src="https://www.youtube.com/embed/videoseries?list=PL063E43EF2E298037" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                        </div>
                        <div class="swiper-slide">
                            <a class="thumbTile"><iframe class="thumbTile_iframe" width="500" height="315" src="https://www.youtube.com/embed/jsNL4l_ib48" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
                        </div>
                    </div>
                    
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                </div>
                
        </section> -->
            
    </main>
    <script>
        window.addEventListener('scroll', function () {
            const header = document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 0)
        });
    </script>
    <script>
        const swiper = new Swiper('.swiper', {
  // Optional parameters
  spaceBetween: 5,
  slidesPerView: 2,
  //loop: true,
  freeMode: true,
  loopAdditionalSlides: 1,
  speed: 500,

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  //breakpoints: {
    //when window width is >= 640px
    //640: {
        //spaceBetween: 5,
        //slidesPerView: 5,
        //slidesPerGroup: 1,
        //freeMode: false
    //}
  //}
});
    </script>
    
</body>

</html>