<?php

include("../conexao.php");

	$pesquisa = $_GET['busca'];
    $sql_code = "SELECT * FROM disciplina WHERE nome_disciplina LIKE '%pesquisa%'";
	//$sql_query = $mysqli->query($sql_code) or die ("Erro ao consultar! " . $mysqli->error);
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

        .slider {
            display: block;
            height: 293px;
            width: 600px;
            margin: auto;
            margin-top: 20px;
            position: relative;
        }
        .slider li {
            list-style: none;
            position: absolute;
        }
        .slider iframe {
            margin: auto;
            height: 100%;
            width: 100%;
            vertical-align: top;
        }
        .teste{
            display: inline-flex;
            width: 531%;
            margin-left: 10px;
        }
        h2{
            margin-top: 15px;
            margin-left: 15px;
            color: white;
        }
        footer {
          text-align: center;
          padding: 3px;
          background-color: #221f1f;
          /*color: white;*/
        }
        footer p{
            margin-top: 10px;
            color: white;
        }
        footer a{
            text-decoration: none;
            color: #706868;
        }
        h5{
            color: white;
        }
        .names_desen{
            display: flex;
            justify-content: space-around;
        }

    </style>



</head>
    
<body>
   
    <main>
        <!--PRIMEIRA SESSÃO-->

        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide"> 
                     <?php while ($dado = $con->fetch_array()){?>

                                <h2><?php echo $dado['nome_disciplina']?></h2>
                                        <div class="teste">
                                        <?php 
                                            $sql1 = "SELECT * FROM video WHERE id_disciplina_fk=".$dado['id_disciplina'];
                                            $con1 = $conexao->query($sql1) or die ($mysqli->error);
                                                while($row  = $con1->fetch_array()){?>
                                                    <a class="thumbTile"><iframe class="thumbTile_iframe <?php echo $row['id_video']?>" width="500" height="315" src="https://www.youtube.com/embed/videoseries?list=<?php echo $row['link_video']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><div class="swiper-button-prev"></div>
                                                      <div class="swiper-button-next"></div></a><br/><br/><br/>
                                                      <!-- If we need navigation buttons -->
                                                      
                                                <?php } ?>


                                        </div>
                            <?php } ?>
                    </div>

                </div>
        </div>

        <footer id="contato">
          <div class="footer_1">
          <h5>Desenvolvido por:</h5>
          <div class="names_desen">
          <p> José Rodrigo da Silva Batista<br>
          <a href="mailto:jrs.batista@discente.ufma.br">jrs.batista@discente.ufma.br</a>
          <p> Meyson Silva de Sousa<br>
          <a href="mailto:meyson.ss@discente.ufma.br">meyson.ss@discente.ufma.br</a>
          <p> Jeanderson da Silva Campos<br>
          <a href="mailto:js.campos@discente.ufma.br">js.campos@discente.ufma.br</a>
          <p> Lucas Amorim<br>
          <a href="mailto:lucas.amorim@discente.ufma.br">lucas.amorim@discente.ufma.br</a></p>
          </div>
         </div>
        </footer>
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