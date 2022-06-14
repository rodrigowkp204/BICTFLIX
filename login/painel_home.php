<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BICTFLIX</title>
    <script src="https://kit.fontawesome.com/d7f94f9242.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="B_bictflix (reto).png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="painel.css">
    </head>
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
}
.banner{
    position: relative;
    width: 100%;
    min-height: 100vh;
    padding: 0 100px;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    background: url(fundo2.png);
    background-size: cover;
}
/* .banner .content{
    max-height: 900px;
    text-align: left;
} */
.banner .content h2{
    font-size: 5em;
    /* color: #fff; */
    color: #090909;
}
.banner .content p{
    font-size: 1em;
    /* color: #fff; */
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
    /* border-right: 1px solid rgba(255,255,255,0.5); */
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
    background-image: linear-gradient(to top, transparent, #090909);
    padding: 10px 100px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.05);
}
header .logo img{
    width: 50%;
    height: 5%;
}
/* header .logo{
    color: #fff;
    font-weight: 700;
    font-size: 2em;
    text-decoration: none;
} */
header.sticky .logo{
    color: #111;
}
/* header .logo span{
    color: #ff0157;
} */
header .navegation{
    position: relative;
    display: flex;
}
header .navegation li{
    list-style: none;
    margin-left: 30px;    
}
header .navegation li a{
    text-decoration: none;
    color: #fff;
    font-weight: 300;
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

    </style>

<body>
    <header>
        <a href="" class="logo"><img src="logo_bictflix.png" alt=""></a>
        <!-- <a href="" class="logo">Food<span>.</span></a> -->
        <ul class="navegation">
            <li><a href="#banner">Inicio</a></li>
            <li><a href="#first">1º Período</a></li>
            <li><a href="#second">2º Período</a></li>
            <li><a href="#third">3º Período</a></li>
            <li><a href="#fourth">4º Período</a></li>
            <li><a href="#fifth">5º Período</a></li>
        </ul>
        <div class="search">
            <input type="text" placeholder="Search">
            <i class="fas fa-search"></i>
                
        </div>
    </header>
    <section class="banner" id="banner">
        <div class="content">
            <h2>Título</h2>
            <h4>
                <span>2022</span>
                <span><i>12+</i></span>
                <span>1h 55min</span>
                <span>Action</span>
            </h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam repellendus beatae quod modi<br>
                voluptates veritatis a provident quisquam! Corrupti reprehenderit iure animi magnam quae error enim.</p>
            <!-- <a href="#" class="btn">Our Menu</a> -->
            <div class="buttons">
                <a><i class="fa fa-play" aria-hidden="true"></i> Play</a>
                <a href="#"><i class="fa fa-plus" aria-hidden="true"></i> Watch Now</a>
            </div>
        </div>
    </section>
    <script>
        window.addEventListener('scroll', function () {
            const header = document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 0)
        });
    </script>
    
</body>

</html>