

<!DOCTYPE html>
<html lang="es">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>INNOJEANS</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/favicon2.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
    
   <body class="main-layout">
       
       

	<!-- header section start -->
	<div class="header_section">
		<div class="container">
			<div class="row">
                 <?php

session_start();

if(isset($_SESSION['nombredelusuario']))
{
	$usuarioingresado = $_SESSION['nombredelusuario'];
	echo "<h1>Bienvenido: $usuarioingresado </h1>";
}
else
{
	header('location: login.php');
}

if(isset($_POST['btncerrar']))
{
	session_destroy();
	header('location: login.php');
}
?>
                           
				<div class="col-sm-9">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                           <a class="nav-item nav-link" href="index.php">Inicio</a>
                           <a class="nav-item nav-link" href="collection.php">Tienda</a>
                           <a class="nav-item nav-link" href="racing boots.html">Ubicación</a>
                           <a class="nav-item nav-link" href="contact.html">Contacto</a>
                           <a class="nav-item nav-link last" href="#"><img src="images/search_icon.png"></a>
                           <a class="nav-item nav-link last" href="contact.html"><img src="images/shop_icon.png"></a>
                            <link rel="stylesheet" href="login.css">
<body>
<form method="POST">
<input type="submit" value="Cerrar sesión" name="btncerrar" />
</form>
</body>
                        </div>
                    </div>
                    </nav>
				</div>
			</div>
		</div>
<div id="sfcl12fq8tze23mj7mfeqtcnhchzwh97r1q"></div>
<script type="text/javascript" src="https://counter7.stat.ovh/private/counter.js?c=l12fq8tze23mj7mfeqtcnhchzwh97r1q&down=async" async></script>
<br><a href="https://www.contadorvisitasgratis.com">contador de visitas</a><noscript><a href="https://www.contadorvisitasgratis.com" title="contador de visitas gratis"><img src="https://counter7.stat.ovh/private/contadorvisitasgratis.php?c=l12fq8tze23mj7mfeqtcnhchzwh97r1q" border="0" title="contador de visitas gratis" alt="contador de visitas gratis"></a></noscript>

		<div class="banner_section">
			<div class="container-fluid">
				<section class="slide-wrapper">
    <div class="container-fluid">
	    <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
					<div class="col-sm-2 padding_0">
						<p class="mens_taital"></p>
						<div class="page_no">1/4</div>
						<p class="mens_taital_2"></p>
					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="banner_text">¿Quienes somos?</h1>
							<h1 class="mens_text"><strong>Nuestra historia</strong></h1>
							<p class="lorem_text">Microempresa Gutiérrez en una microempresa dedicada a la fabricación y comercialización de pantalones, su inicio remonta desde los años 90´s.<br><br>
                               
                <br><br></p>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="shoes_img"><p class="lorem_text">
                            A lo largo de este tiempo, se ha distinguido por comercializar productos accesibles y de calidad.<br><br>
Actualmente, se dio una asociación con la compañía INNOVATION JEANS, la cual tiene una participación muy importante, ya que, se mantiene en constante evolución proponiendo modelos nuevos debido a la evolución de las modas y creando un buen equipo para ser líderes en el mercado textil.
                <br><br>
Hoy en día la formalidad ha sido un requisito fundamental para trabajar en una empresa.
                <br><br>
El ahorró del tiempo es de gran importancia.
</p></div>
					</div>
				</div>
                </div>
                <div class="carousel-item">
                    <div class="row">
					<div class="col-sm-2 padding_0">
						<p class="mens_taital">INNO JEANS</p>
						<div class="page_no">2/4</div>
						<p class="mens_taital_2">INNO JEANS</p>
					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
							<p class="lorem_text">La idea de este pantalón surge debido a que a la mayoría de las personas no les gusta estar todo el día con traje o verse formal en todo momento, ya que es incómodo usar traje en climas con temperaturas altas, así como también los zapatos. El lugar en donde te encuentres es parte importante de como tienes que lucir. Con este pantalón te hace lucir casual con mezclilla de un lado y por el otro lucir de manera formal y lo único que tienes que hacer es voltear el pantalón.
                <br><br>
Es por ello que surge la idea de esta nueva marca de pantalones llamada INNOJEANS Un pantalón de doble vista.</p>
						</div>
					</div>
					<div class="col-sm-5">
                        <br>
							<h1 class="mens_text"><strong>Misión</strong></h1>
						<div class="shoes_img"><p class="lorem_text">Ofrecer y comercializar a los clientes variedad de pantalones de mezclilla a buen precio, brindando confiabilidad y calidad en la obtención de estos, además, satisfaciendo necesidades en cuanto a moda y brindando disponibilidad de la forma más cómoda posible.</p></div>
					</div>
				</div>
                </div>
                <div class="carousel-item">
                    <div class="row">
					<div class="col-sm-2 padding_0">
						<p class="mens_taital">INNO JEANS</p>
						<div class="page_no">3/4</div>
						<p class="mens_taital_2">INNO JEANS</p>
					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="mens_text"><strong>Visión</strong></h1>
							<p class="lorem_text">Ser la compañía líder en la venta de pantalones en línea a nivel nacional.</p>
							<h1 class="mens_text"><strong>Valores</strong></h1>
                            <p class="lorem_text">•	Calidad: El producto estará hecho con materiales de alta resistencia para que su uso que tengan una prolongada duración.<br><br>
•	Pasión: Tener un gran desempeño al momento de su elaboración y disfrutar hacerlo. <br>
                                </p>
						</div>
					</div>
					<div class="col-sm-5">
                        
						<div class="shoes_img"><p class="lorem_text">
                            •	Trabajo en equipo: Habrá un buen ambiente laboral entre los socios para llegar a un resultado en común y en la mejora de toma de decisiones.<br><br>
•	Escucha: Nos permitirá poder oír a los clientes y saber que requieren ellos para poder brindar un producto de excelencia. <br><br>
•	Puntualidad: El tiempo es una herramienta indispensable, así como también poder ejercer este punto para tener todo a la brevedad.</p></div>
					</div>
				</div>
                </div>
                <div class="carousel-item">
                    <div class="row">
					<div class="col-sm-2 padding_0">
						<p class="mens_taital">INNO JEANS</p>
						<div class="page_no">4/4</div>
						<p class="mens_taital_2">INNO JEANS</p>
					</div>
					<div class="col-sm-5">
						<div class="banner_taital">
							<h1 class="mens_text"><strong>Objetivos</strong></h1>
							<p class="lorem_text">•	Ser un nuevo producto con una buena calidad, y diseño único.<br><br>
•	Superar a la competencia en visibilidad y ventas dentro del mercado on-line.
</p>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="shoes_img"><p class="lorem_text">•	Mantener a los clientes actualizados con los nuevos estilos.<br><br>
•	Imponer una tendencia de consumo novedosa.

</p></div>
					</div>
				</div>
                </div>
            </div>
        </div>
    </div>
</section>		
                
			</div>
		</div>
	</div>
	<!-- header section end -->
	<!-- new collection section start -->
    <div class="layout_padding collection_section">
    	<div class="container">
            <center><video width="800" height="500" controls><source src="images/INNOJEANS.mp4" type="video/mp4" autoplay muted loop>
                    <source src="INNOJEANS.mp4" type="video/mp4">
                    </video></center>
            
    	    				</div>
    	    			</div>
    
	<div class="copyright">2019 All Rights Reserved. <a href="https://html.design">Free html  Templates</a></div>


      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         
$('#myCarousel').carousel({
            interval: false
        });

        //scroll slides on swipe for touch enabled devices

        $("#myCarousel").on("touchstart", function(event){

            var yClick = event.originalEvent.touches[0].pageY;
            $(this).one("touchmove", function(event){

                var yMove = event.originalEvent.touches[0].pageY;
                if( Math.floor(yClick - yMove) > 1 ){
                    $(".carousel").carousel('next');
                }
                else if( Math.floor(yClick - yMove) < -1 ){
                    $(".carousel").carousel('prev');
                }
            });
            $(".carousel").on("touchend", function(){
                $(this).off("touchmove");
            });
        });
      </script> 
   </body>
</html>
