<?php
/*
Template Name: contacto
*/
?>
<?php get_header('dos'); ?>
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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<br><br>
<!--importante regula header static----->
<content>
</content>
<!----xxxx--->

<link type="text/css" href="<?php bloginfo('template_url')?>/css/styles.css" rel="stylesheet" media="all" />

<div class="container-fluid bodygallery">
                <div  style="height:11px; margin-top:-2px;" class="container-fluid deco">
               <!----DECORACION----> 
                </div>  
<div style="margin-top:1px; background-color:#FFF"  class="container boxperfil">
		</div><!--end portfolio-content -->
        
            <!---cajanegra--->
           <div  class="container boscont">
            Perfil y Experiencia Profesional
            </div>
            <div class="container boxpunt">
            </div>
            <!---cajanegra-->
           <div class="container boscontinf">
           <section class="row infboxsr">
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7 ">
   <div  class="infoperfil  col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div class="perfillogo col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <img src="<?php bloginfo('template_url')?>/imagenes/perfil.png">  
            </div>
             <table style="margin-top:47px;">
             <tr style="height:27px">
             <td width="16" style="border:none"><img src="<?php bloginfo('template_url')?>/imagenes/li.png"></td>
             <td style="border:none"><b>Correo:</b> info@jonathanaravena.cl</td>
             </tr>
             <tr style="height:27px">
             <td style="border:none"><img src="<?php bloginfo('template_url')?>/imagenes/li.png"></td>
             <td style="border:none"><b>E-mail:</b> jonathanzx87@gmail.com</td>
             </tr>
             <tr style="height:27px">
             <td style="border:none"><img src="<?php bloginfo('template_url')?>/imagenes/li.png"></td>
             <td style="border:none"><b>Fono:</b>+56 9775 11 399</td>
             </tr>
             </table>
             <br><br>
           <hr>
             <h1 style="line-height:130%">Jonathan aravena E. Diseñador Gráfico Profesional</h1><bR>
             <p>
          Titulado en Diseño Gráfico Duoc UC Plaza Vespucio.<br>
Capacitado para asumir cualquier desafío potenciando tu negocio u servicio con los mas altos estándares pedidos en los mercado actuales. Me considero un profesional altamente responsable, metódico, perfeccionista,ordenado, flexible y fácilmente adaptable al trabajo en equipo.
             </p>
          <hR>
          <!---BOTON DESCARGA-->
           <a style="text-decoration:none; list-style:none" href="<?php bloginfo('template_url')?>/imagenes/curriculum.pdf" download="Curriculum">
          <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-12 butondownload">
          </div>
          </a>
          </div>
 </div>
            
<div  class="animated slideInUp esperar8 col-xs-12 col-sm-12 col-md-76 col-lg-5 contacto ">
<bR><bR>
        
        <table style="margin-bottom:20px">
        <tr>
        <td><h1><img src="<?php bloginfo('template_url')?>/imagenes/form2.png"></h1></td>
        </tr>
        </table>
          
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php the_content("Leer más..."); ?>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>

</div>
</div>
</div>
</div><!-- end wrapper -->  

    <!--ANIMATED--
    <div style="border:1px solid #F00" class="container">
    <div  class="animated bounceInLeft col-xs-12 col-sm-12 col-md-12 col-lg-12">
    ANIMATED<br><br>
    </div>
    </div>
    ---EJEMPLOS--animated-->
    <style>
	 .esperar8{ 
    -moz-animation-delay:1s;
    -ms-animation-delay:1s;
    -o-animation-delay:1s;
    -webkit-animation-delay:0.7s;
    }
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
    <!--FIN ANIMATED--->


        <!---WAYPOINT---> 
		<style type="text/css">
        .os-animation{opacity: 0;}  
        .os-animation.animated{opacity: 1;}   
        </style>


<?php get_footer(); ?>