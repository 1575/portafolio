<?php get_header(); ?>
<br><br>
  <script type="text/javascript" src="<?php bloginfo('template_url')?>/animated/js/jquery.waypoints.min.js"></script>
        <script type="text/javascript">//<![CDATA[ 
        $(function(){
        function onScrollInit( items, trigger ) {
        items.each( function() {
        var osElement = $(this),
        osAnimationClass = osElement.attr('data-os-animation'),
        osAnimationDelay = osElement.attr('data-os-animation-delay');
        osElement.css({
        '-webkit-animation-delay':  osAnimationDelay,
        '-moz-animation-delay':     osAnimationDelay,
        'animation-delay':          osAnimationDelay
        });
        var osTrigger = ( trigger ) ? trigger : osElement;
        osTrigger.waypoint(function() {
        osElement.addClass('animated').addClass(osAnimationClass);
        },{
        triggerOnce: true,
        offset: '70%'
        });
        });
        }
        onScrollInit( $('.os-animation') );
        onScrollInit( $('.staggered-animation'), $('.staggered-animation-container') );
        });//]]>  
        </script>
        <!---FIN.WAYPOINT---> 

<!-----GALERIA------>
<link type="text/css" href="<?php bloginfo('template_url')?>/css/styles.css" rel="stylesheet" media="all" />
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
	    <script src="<?php bloginfo('template_url')?>/js/jquery.quicksand.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_url')?>/js/jquery.easing.js" type="text/javascript"></script>
        <script src="<?php bloginfo('template_url')?>/js/script.js" type="text/javascript"></script>
       	<script src="<?php bloginfo('template_url')?>/js/jquery.prettyPhoto.js" type="text/javascript"></script> 
        <link href="<?php bloginfo('template_url')?>/css/prettyPhoto.css" rel="stylesheet" type="text/css" />


<!--importante regula header static----->
<content>
</content>
<!----xxxx--->

<div  class="container-fluid bodygallery">
                <div  style="height:11px; margin-top:-2px;" class="container-fluid deco">
                </div>  
<div style="margin-top:1px; background-color:#FFF;padding-left:0px"  class="container">
<style>
.boscont3{color:#333;font-weight:bold;padding-top:-6px;padding-bottom:-4px;font-family: 'Lato', sans-serif;font-size:15px;
border-radius:10px 10px 10px 10px;width:350px;margin-top:7px;}
.boscont3 h1{color:#333;font-weight:bold;font-size:15px;}
.boscont3  img{margin-top:-25px;padding-left:63px;}
</style>
                    
            <ul  class="portfolio-area">	
            <!---subtittulo--->
            <div  class="container">
            <div class="col-xs-12 col-lg-4">
            <!--uno-->
            </div>
            <div class="col-xs-12 col-lg-3">
            <div class="animated flipInX container boscont3" data-os-animation-delay="1s">
            <h1>&nbsp;&nbsp;ULTIMOS PROYECTOS</h1>
            <img  class="os-animation" data-os-animation="fadeInLeft" data-os-animation-delay="0.3s" src="<?php bloginfo('template_url')?>/imagenes/deco.png" alt="banda">
            </div>
            </div>
            <div class="col-xs-12 col-lg-3">
            <!--tres--->
            </div>
            </div>
            <!--f.subtitulo--->
 
             <bR>
             
            <!--gallery img-->  
            <div class="spbox col-xs-12 col-sm-4 col-md-4 col-lg-4">               		
            <li class="destacados" data-id="id-1" data-type="cat-item-2">	
            <div>
            <span class="image-block">
            <a class="image-zoom" href="<?php bloginfo('template_url')?>/imagenes/hostal.png" rel="prettyPhoto[gallery]">
            <img src="<?php bloginfo('template_url')?>/imagenes/portafolio/mockups-vientosur01.jpg" class="img-responsive" alt="desarrollo web hostal viento sur"/>
            </a>
            </span>
            <div class="home-portfolio-text">
            <h1 class="post-title-portfolio">HOSTAL VIENTO SUR</h1>
            <p class="post-subtitle-portfolio">
            <h2 >Hostal alojamiento turístico en la región de Aysén<br></h2></p>
            <!--<a style="padding-left:11px; font-size:14px; color:#bfa018" href="">Visitar Web</a>-->
            <center>
            <a href="http://www.hostalvientosur.cl/" target="_blank">
            <button style="margin-left:-10px;" type="button" class="btn btn-default">Visitar Web</button></a></center>
            </div>
            </div>	
            </li>				
            </div>    
    
             <!--gallery img-->    
            <div class="spbox col-xs-12 col-sm-4 col-md-4 col-lg-4">                		
            <li class="destacados" data-id="id-1" data-type="cat-item-2">	
            <div>
            <span class="image-block">
            <a class="image-zoom" href="<?php bloginfo('template_url')?>/imagenes/portafolio/4x4.jpg" rel="prettyPhoto[gallery]" title="Up">
            <img src="<?php bloginfo('template_url')?>/imagenes/portafolio/4x4.jpg" class="img-responsive" alt="desarrollo web aventura 4x4"/>                    
            </a>
            </span>
            <div class="home-portfolio-text">
            <h1 class="post-title-portfolio">AVENTURA4X4</h1>
            <p class="post-subtitle-portfolio"><h2>Programa de televisión Vehículos todo terreno</h2></p>
            <center>
            <a href="http://aventura4x4.cl/" target="_blank">
            <button style="margin-left:-10px;" type="button" class="btn btn-default">Visitar Web</button></a></center>
            </div>
            </div>	
            </li>				
            </div>  
            
            <!--gallery img-->    
            <div class="spbox col-xs-12 col-sm-4 col-md-4 col-lg-4">               		
            <li class="destacados" data-id="id-1" data-type="cat-item-2">	
            <div>
            <span class="image-block">
            <a class="image-zoom" href="<?php bloginfo('template_url')?>/imagenes/portafolio/mockups-masvalor01.jpg" rel="prettyPhoto[gallery]" title="Up">
            <img src="<?php bloginfo('template_url')?>/imagenes/portafolio/mockups-masvalor01.jpg" class="img-responsive" alt="desarrollo web propiedades"/>  
            </a>
            </span>
            <div class="home-portfolio-text">
            <h1 class="post-title-portfolio">MAS VALOR PROPIEDADES</h1>
            <p class="post-subtitle-portfolio"><h2>Gesti&oacute;n y Corretaje de propiedades compra y venta</h2></p>
            <center>
            <a href="http://masvalorpropiedades.cl/" target="_blank">
            <button style="margin-left:-10px;" type="button" class="btn btn-default">Visitar Web</button>
            </a>
            </center>
            </div>
            </div>	
            </li>				
            </div>  
                    
            <!--gallery img-->
            <div class="spbox col-xs-12 col-sm-4 col-md-4 col-lg-4">               		
            <li class="destacados" data-id="id-1" data-type="cat-item-2">	
            <div>
            <span class="image-block">
            <a class="image-zoom" href="<?php bloginfo('template_url')?>/imagenes/portafolio/taller.jpg" rel="prettyPhoto[gallery]" title="Up">
            <img src="<?php bloginfo('template_url')?>/imagenes/portafolio/taller.jpg" class="img-responsive" alt="Sitio web taller mecanico"/>                    
            </a>
            </span>
            <div class="home-portfolio-text">
            <h1 class="post-title-portfolio">COMERCIAL COHAYQUE BAJO</h1>
            <p class="post-subtitle-portfolio"><h2>Servicios de mecánica automotriz región de Aysén</h2></p>
            <center>
            <a href="http://comercialcoyhaiquebajo.cl/" target="_blank">
            <button style="margin-left:-10px;" type="button" class="btn btn-default">Visitar Web</button>
            </a>
            </center>
            </div>
            </div>	
            </li>				
            </div>   
            
            <!--gallery img-->         
            <div class="spbox col-xs-12 col-sm-4 col-md-4 col-lg-4" >              		
            <li class="destacados" data-id="id-1" data-type="cat-item-2">	
            <div>
            <span class="image-block">
            <a class="image-zoom" href="<?php bloginfo('template_url')?>/imagenes/portafolio/bellavista.jpg" rel="prettyPhoto[gallery]" title="Up">
            <img src="<?php bloginfo('template_url')?>/imagenes/portafolio/bellavistaxs.jpg" class="img-responsive" alt="Sitio web restaurant"/>                    
            </a>
            </span>
            <div class="home-portfolio-text">
            <h1 class="post-title-portfolio">RESTAURANT BELLAVISTA</h1>
            <p class="post-subtitle-portfolio"><h2>Restaurante gastronomía en la bahía de Puerto Montt.</h2></p>
            <center>
            <a href="http://www.restaurantbellavista.cl/" target="_blank">
            <button style="margin-left:-10px;" type="button" class="btn btn-default">Visitar Web</button>
            </a>
            </center>
            </div>
            </div>	
            </li>				
            </div>  
            
            <!--gallery img-->
            <div class=" spbox col-xs-12 col-sm-4 col-md-4 col-lg-4" >               		
            <li class="destacados" data-id="id-1" data-type="cat-item-2">	
            <div>
            <span class="image-block">
            <a class="image-zoom" href="<?php bloginfo('template_url')?>/imagenes/portafolio/siglo21g.png" rel="prettyPhoto[gallery]" title="Up">
            <img src="<?php bloginfo('template_url')?>/imagenes/portafolio/siglo21.jpg" class="img-responsive" alt="Sitio web natacion deporte"/>                    
            </a>
            </span>
            <div class="home-portfolio-text">
            <h1 class="post-title-portfolio">SIGLO21 NATACION</h1>
            <p class="post-subtitle-portfolio"><h2>Tienda de artículos deportivos y recreación</h2></p>
            <center>
            <a href="http://siglo21deportes.cl/" target="_blank">
            <button style="margin-left:-10px;" type="button" class="btn btn-default">Visitar Web</button>
            </a>
            </center>
            </div>
            </div>	
            </li>				
            </div>  
       
            <!--gallery img-->
            <div class="os-animation spbox col-xs-12 col-sm-4 col-md-4 col-lg-4" data-os-animation="bounceInUp" data-os-animation-delay="0s">             		
            <li class="destacados" data-id="id-1" data-type="cat-item-2">	
            <div>
            <span class="image-block">
            <a class="image-zoom" href="<?php bloginfo('template_url')?>/imagenes/portafolio/dinkenesh.jpg" rel="prettyPhoto[gallery]" title="Up">
            <img src="<?php bloginfo('template_url')?>/imagenes/portafolio/dinkenesh.jpg" class="img-responsive" alt="Sitio web chocolateria"/>                    
            </a>
            </span>
            <div class="home-portfolio-text">
            <h1 class="post-title-portfolio">CHOCOLATERIA DINKENESH</h1>
            <p class="post-subtitle-portfolio"><h2>Chocolater&iacute;a bombones y formas personalizadas</h2></p>
            <center>
            <a href="http://dinkenesh.cl/" target="_blank">
            <button style="margin-left:-10px;" type="button" class="btn btn-default">Visitar Web</button></center>
            </a>
            </div>
            </div>	
            </li>				
            </div>  
                   
            <!--gallery img-->
            <div class="os-animation spbox col-xs-12 col-sm-4 col-md-4 col-lg-4" data-os-animation="bounceInUp" data-os-animation-delay="0s">               	            <li class="destacados" data-id="id-1" data-type="cat-item-2">	
            <div>
            <span class="image-block">
            <a class="image-zoom" href="<?php bloginfo('template_url')?>/imagenes/portafolio/baquedanoxl.jpg" rel="prettyPhoto[gallery]" title="Up">
            <img src="<?php bloginfo('template_url')?>/imagenes/portafolio/baquedanoxl.jpg" class="img-responsive" alt="Sitio web hostal apartamentos"/>                    
            </a>
            </span>
            <div class="home-portfolio-text">
            <h1 class="post-title-portfolio">APARTAMENTOS BAQUEDANO</h1>
            <p class="post-subtitle-portfolio"><h2>Servicio de condominio en la región de Aysén</h2></p>
            <center>
            <a href="http://apartamentosbaquedano.cl/" target="_blank">
            <button style="margin-left:-10px;" type="button" class="btn btn-default">Visitar Web</button>
            </a>
            </center>
            </div>
            </div>	
            </li>				
            </div>  
            
            <!--gallery img-->
            <div class="os-animation spbox col-xs-12 col-sm-4 col-md-4 col-lg-4" data-os-animation="bounceInUp" data-os-animation-delay="0s">           		
            <li class="destacados" data-id="id-1" data-type="cat-item-2">	
            <div>
            <span class="image-block">
            <a class="image-zoom" href="<?php bloginfo('template_url')?>/imagenes/portafolio/ayana.jpg" rel="prettyPhoto[gallery]" title="Up">
            <img src="<?php bloginfo('template_url')?>/imagenes/portafolio/ayana.jpg" class="img-responsive" alt="Sitio web viajes especiales"/>                    
            </a>
            </span>
            <div class="home-portfolio-text">
            <h1 class="post-title-portfolio">AYANA VIAJES</h1>
            <p class="post-subtitle-portfolio"><h2>Ayana Organiza y diseña viajes a medida </h2></p>
            <center>
            <a href="http://www.ayanaviajes.com/destinos/" target="_blank">
            <button style="margin-left:-10px;" type="button" class="btn btn-default">Visitar Web</button>
            </a>
            </center>
            </div>
            </div>	
            </li>				
            </div>   
                   
            <!--gallery img-->
            <div class="os-animation spbox col-xs-12 col-sm-4 col-md-4 col-lg-4" data-os-animation="bounceInUp" data-os-animation-delay="0s">          		
            <li class="destacados" data-id="id-1" data-type="cat-item-2">	
            <div>
            <span class="image-block">
            <a class="image-zoom" href="<?php bloginfo('template_url')?>/imagenes/portafolio/descubrediseno.jpg" rel="prettyPhoto[gallery]" title="Up">
            <img src="<?php bloginfo('template_url')?>/imagenes/portafolio/descubrediseno.jpg" class="img-responsive" alt="Sitio web agencia de diseño"/>                    
            </a>
            </span>
            <div class="home-portfolio-text">
            <h1 class="post-title-portfolio">DESCUBRE DISEÑO</h1>
            <p class="post-subtitle-portfolio"><h2>Branding,Imagen Corporativa,Stands publicitarios</h2></p>
            <center>
            <a href="http://descubrediseno.cl/" target="_blank">
            <button style="margin-left:-10px;" type="button" class="btn btn-default">Visitar Web</button>
            </a>
            </center> 
            </div>
            </div>	
            </li>				
            </div>    
            
            <!--gallery img-->
            <div class="os-animation spbox col-xs-12 col-sm-4 col-md-4 col-lg-4" data-os-animation="bounceInUp" data-os-animation-delay="0s">               		
            <li class="destacados" data-id="id-1" data-type="cat-item-2">	
            <div>
            <span class="image-block">
            <a class="image-zoom" href="<?php bloginfo('template_url')?>/imagenes/portafolio/municipalidad.jpg" rel="prettyPhoto[gallery]" title="Up">
            <img src="<?php bloginfo('template_url')?>/imagenes/portafolio/municipalidad.jpg" class="img-responsive" alt="Sitio web junta vecinal"/>                    
            </a>
            </span>
            <div class="home-portfolio-text">
            <h1 class="post-title-portfolio">BARRIO PLAZA URUGUAY</h1>
            <p class="post-subtitle-portfolio"><h2>Web Vecinos del Barrio Plaza Uruguay </h2></p>
            <center>
            <a href="http://barrioplazauruguay.cl/" target="_blank">
            <button style="margin-left:-10px;" type="button" class="btn btn-default">Visitar Web</button>
            </a>
            </center>
            </div>
            </div>	
            </li>				
            </div>  
                    
            <!--gallery img-->
            <div class="os-animation spbox col-xs-12 col-sm-4 col-md-4 col-lg-4" data-os-animation="bounceInUp" data-os-animation-delay="0s">               	            <li class="destacados" data-id="id-1" data-type="cat-item-2">	
            <div>
            <span class="image-block">
            <a class="image-zoom" href="<?php bloginfo('template_url')?>/imagenes/portafolio/runaway.png" rel="prettyPhoto[gallery]" title="Up">
            <img src="<?php bloginfo('template_url')?>/imagenes/portafolio/runaway-xs.jpg" class="img-responsive" alt="Sitio web venta articulos publicitarios"/>                    
            </a>
            </span>
            <div class="home-portfolio-text">
            <h1 class="post-title-portfolio">RUNAWAY CHILE</h1>
            <p class="post-subtitle-portfolio"><h2>Empresa especializada en artículos promocionales</h2></p>
            <center>
            <a href="http://runawaychile.cl/" target="_blank">
            <button style="margin-left:-10px;" type="button" class="btn btn-default">Visitar Web</button>
            </a>
            </center>
            </div>
            </div>	
            </li>				
            </div>  
            
            <!--gallery img-->
            <div class="os-animation spbox col-xs-12 col-sm-4 col-md-4 col-lg-4" data-os-animation="bounceInUp" data-os-animation-delay="0s">             		
            <li class="destacados" data-id="id-1" data-type="cat-item-2">	
            <div>
            <span class="image-block">
            <a class="image-zoom" href="<?php bloginfo('template_url')?>/imagenes/portafolio/trostel.jpg" rel="prettyPhoto[gallery]" title="Up">
            <img src="<?php bloginfo('template_url')?>/imagenes/portafolio/trostel.jpg" class="img-responsive" alt="Sitio web viajes tours"/>                    
            </a>
            </span>
            <div class="home-portfolio-text">
            <h1 class="post-title-portfolio">TROSTEL TOURS</h1>
            <p class="post-subtitle-portfolio"><h2>City Tour Santiago y Valparaiso</h2></p>
            <center>
            <a href="http://trosteltours.cl/" target="_blank"><button style="margin-left:-10px;" type="button" class="btn btn-default">Visitar Web</button>
            </a>
            </center>
            </div>
            </div>	
            </li>				
            </div>    
            
            <!--gallery img-->
            <div class="os-animation spbox col-xs-12 col-sm-4 col-md-4 col-lg-4" data-os-animation="bounceInUp" data-os-animation-delay="0s">               		
            <li class="destacados" data-id="id-1" data-type="cat-item-2">	
            <div>
            <span class="image-block">
            <a class="image-zoom" href="<?php bloginfo('template_url')?>/imagenes/portafolio/promogrande.png" rel="prettyPhoto[gallery]" title="Up">
            <img src="<?php bloginfo('template_url')?>/imagenes/portafolio/promosx.png" class="img-responsive" alt="Sitio web venta articulos publicitarios"/>                    
            </a>
            </span>
            <div class="home-portfolio-text">
            <h1 class="post-title-portfolio">PROMOLOGO</h1>
            <p class="post-subtitle-portfolio"><h2>Empresa especializada en artículos promocionales</h2></p>
            <center>
            <a href="http://promologo.cl/" target="_blank">
            <button style="margin-left:-10px;" type="button" class="btn btn-default">Visitar Web</button>
            </a>
            </center>
            </div>
            </div>	
            </li>				
            </div>  
             
            <!--gallery img-->                 
            <div class="os-animation spbox col-xs-12 col-sm-4 col-md-4 col-lg-4" data-os-animation="bounceInUp" data-os-animation-delay="0s">               
            <li class="destacados" data-id="id-1" data-type="cat-item-2">	
            <div>
            <span class="image-block">
            <a class="image-zoom" href="<?php bloginfo('template_url')?>/imagenes/portafolio/mockups-ecogedra01.jpg" rel="prettyPhoto[gallery]" title="Up">
            <img src="<?php bloginfo('template_url')?>/imagenes/portafolio/mockups-ecogedra02.jpg" class="img-responsive" alt="Sitio web jardineria"/>                    
            </a>
            </span>
            <div class="home-portfolio-text">
            <h1 class="post-title-portfolio">ECOGEDRA</h1>
            <p class="post-subtitle-portfolio"><h2>Servicios de jardinería, mantenimiento de áreas verdes, </h2></p>
            <center>
            <a href="http://ecogedra.cl/" target="_blank">
            <button style="margin-left:-10px;" type="button" class="btn btn-default">Visitar Web</button>
            </a>
            </center>
            </div>
            </div>	
            </li>				
            </div>  



			                
			   
</ul><!--end portfolio-area -->
                    
                    
                    
                    
                    
		</div><!--end portfolio-content -->

</div><!-- end wrapper -->  




<!-----GALERIA------>





<bR><bR>




    <!--ANIMATED--
    <div style="border:1px solid #F00" class="container">
    <div  class="animated bounceInLeft col-xs-12 col-sm-12 col-md-12 col-lg-12">
    ANIMATED<br><br>
    </div>
    </div>
    ---EJEMPLOS--animated-->
    <style>
    .esperar{ 
    -moz-animation-delay:5s;
    -ms-animation-delay:5s;
    -o-animation-delay:5s;
    -webkit-animation-delay:5s;
    }
    </style>
    <!---RETRAZAR---
    <h3 class="animated jello esperar">clase adicional</h3>
    <!---INFINITO---
    <h1 class="animated infinite bounce">Daniela</h1>
    <!--FIN ANIMATED---
    



<bR/><bR/><bR/><bR/><bR/><bR/><bR/><bR/><bR/><bR/><bR/>
    
        
      

        <!---WAYPOINT---> 
		<style type="text/css">
        .os-animation{opacity: 0;}  
        .os-animation.animated{opacity: 1;}   
        </style>
      


    




<!--< ?php get_sidebar(); ?>-->
<?php get_footer(); ?>
