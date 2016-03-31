<!doctype html>
<html>
<head>


<meta charset="utf-8">
<title><?php bloginfo('name'); ?></title>
<!--CSS-->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<link href="<?php bloginfo('template_url')?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
</head>

<!--animated-->
<link rel="shortcut icon" href="http://jonathanaravena.cl/wp-content/themes/portfolioboss/imagenes/favicom.png">
<link href="<?php bloginfo('template_url')?>/animated/animate.css" rel="stylesheet" type="text/css">
<meta name="description" content="<?php wp_title(); echo ' '; bloginfo( 'description' ); ?>" />
<meta name="keywords" content="<?php wp_title(); echo ' '; bloginfo( 'name' ); echo ' , '; bloginfo( 'description' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="language" content="ES">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<meta name="robots" content="index, follow">
<meta name="author" content="http://jonathanaravena.cl/">
<meta name="revisit-after" content="5 days">
<meta name="robots" CONTENT="all">
		<!--FUENTES-->
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<?php wp_head();?>
<body <?php body_class(); ?>>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<style>
header {position:fixed;background-color:#ccc;width:100%;z-index:10;height:170px;}
content {display:block; margin-top:149px;}
content p {padding:10px 5px;}
@media screen and (max-width: 690px) {
header {position:fixed;background-color:#ccc;width:100%;z-index:10;height:140px;}}
</style>
 

<header class="bgs" >
<div class="container">
<div  class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
</div>

<div  class="logo col-xs-12 col-sm-12 col-md-3 col-lg-3">
    <div id="girar">
    <img src="<?php bloginfo('template_url')?>/imagenes/rueda.png" alt="rueda-web">
    </div>

    <div class="nogira">
      <img src="<?php bloginfo('template_url')?>/imagenes/logo.png" alt="jonathanaravena.cl"><bR>
    </div>
    <div class="marca">DISEÑO & DESARROLLO WEB</div>
</div>

   
<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
</div>
<div class="redes col-xs-12 col-sm-12 col-md-2 col-lg-2">
</div>
</div>
</div>
        
<div class="menuprincipal col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="container">
  
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
        <!--one-->
        </div>
  
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <!--two-->
     
      <ul class="lavaLampBottomStyle" id="3">
      <li>
      <a href="http://jonathanaravena.cl/">PORTAFOLIO</a>
      </li>
      <li class="current" >
      <a href="http://jonathanaravena.cl/contacto"><span style="color:#FFF; font-size:15px;">CURRICULUM </span><span style="color:#6C3">DIGITAL <span style="color:#FFF">+</span> CONTACTO</span></a>
      </li>
      </ul>
       
      </div>
</header><!--f.header-->



</div></div>




<!---GIRAR---->
<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url')?>/js/jQueryRotateCompressed.js"></script>
<script type="text/javascript">
var angulo = 0;
setInterval(function(){
      angulo+=0.8; //velocidad
     $("#girar").rotate(angulo);
},10);
</script>
<!---fin girar--->

<!---MENU lava min-->
<script type="text/javascript" src="<?php bloginfo('template_url')?>/lavamenu/jquery.easing.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url')?>/lavamenu/jquery.lavalamp.min.js"></script>
<script type="text/javascript">
$(function() {
    $("#1, #2, #3").lavaLamp({
        fx: "backout",
        speed: 700,
        click: function(event, menuItem) {
          
        }
    });
});
</script>
<!---XX----->

<!---HEADER STATIC-->
   <script>
        $(document).ready(function(){
            // cada vez que se mueva el scroll del navegador se ejecutara
            // este evento
            $(document).scroll(function(){
 
                // si la posicion del scroll es superior a 55 pixels...
                if($(window).scrollTop()>45)
                {
                    // indicamos que el header tiene una posicion fija a -47 pixels
                    $("header").css({"position":"fixed", "top":-137});
                    // definimos el margen superior al contenido cuando queda fijado
                    $("content").css({"margin-top":100});
                }else{
                    $("header").css({"position":"inherit", "top":"inherit"});
                    $("content").css({"margin-top":-30});
                }
            });
        });
    </script>
<!---XX----->