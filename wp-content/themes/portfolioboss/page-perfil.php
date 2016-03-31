<?php
/*
Template Name: about
*/
?>
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


<link type="text/css" href="<?php bloginfo('template_url')?>/css/styles.css" rel="stylesheet" media="all" />



<!-----GALERIA------>


	





<div class="container-fluid bodygallery">



                <div  style="height:11px; margin-top:-2px;" class="container-fluid deco">
               <!----DECORACION----> 
                </div>  

  <div style="margin-top:1px; background-color:#FFF"  class="container boxperfil">


            <!--sub cabecera---->
            <div class="perfillogo col-xs-12 col-sm-3 col-md-3 col-lg-3">
            <img src="<?php bloginfo('template_url')?>/imagenes/perfil.png">  
            </div>
            <div class="perfillogo col-xs-12 col-sm-1 col-md-1 col-lg-1">
            </div>
            
            <div class="infoperfil col-xs-12 col-sm-5 col-md-5 col-lg-5">
            <h1>Jonathan aravena E. Diseñador Gráfico Profesional</h1><bR>
            <p>E-mail: jonathanzx87@gmail.com - Fono: +56 9 7751 1399</p>
            </div>
            
          
            <!--f.sub cabecera---->
  

  
  
                    
                    
                    
		</div><!--end portfolio-content -->
        
     <!---cajanegra--->
           <div  class="container boscont">
            Jonathan Aravena E.
            </div>
            <div class="container boxpunt">
            </div>
            <!---cajanegra-->
  
           
           
           <div class="container boscontinf">
           
           <section class="row infboxsr">
          
             <div class="col-xs-12 col-sm7 col-md-7 col-lg-7">
             
 
             
            <table style="margin-bottom:10px">
            <tr>
            <td><h1>PERFIL PROFESIONAL</h1></td>
            <td><div class="bgray"></div></td>
            </tr>
            </table>

             <Br>
             <p>
             Titulado en Diseño Gráfico Duoc UC Plaza Vespucio.<bR>
             Capacitado para asumir cualquier desafío y competir con los mercado actuales<br> potenciando tu negocio.Me considero un profesional 
             responsable el cual se acomoda <bR>al
trabajo metódico como también el trabajo de equipo, cuento con la capacidad de liderazgo en
equipos multidiciplinarios, tengo aptitudes de superación y capacidad<bR> de aprendizaje.
             </p>
             
             
            <table style="margin-bottom:25px; margin-top:10px">
            <tr>
            <td><h1>CONOCIMIENTOS</h1></td>
            <td><div class="bgray2"></div></td>
            </tr>
            </table>
             
             <table>
             <tr style="height:27px">
             <td width="16" style="border:none"><img src="<?php bloginfo('template_url')?>/imagenes/li.png"></td>
             <td style="border:none">Suit Adobe: illustrator - Photoshop -In Design - Flash.</td>
             </tr>
             <tr style="height:27px">
             <td style="border:none"><img src="<?php bloginfo('template_url')?>/imagenes/li.png"></td>
             <td style="border:none">Frontend: Html5 - Css3 - Javascript - jquery - Bootstrap -  Mediaqueries.</td>
             </tr>
             <tr style="height:27px">
             <td style="border:none"><img src="<?php bloginfo('template_url')?>/imagenes/li.png"></td>
             <td style="border:none">Backend: Maquetación desde cero plantillas Wordpress + woocomerce.</td>
             </tr>
             <tr style="height:27px">
             <td style="border:none"><img src="<?php bloginfo('template_url')?>/imagenes/li.png"></td>
             <td style="border:none">prestashop, Php  intermedio patron mvc.</td>
             </tr>
             <tr style="height:27px">
              <td style="border:none"><img src="<?php bloginfo('template_url')?>/imagenes/li.png"></td>
             <td style="border:none">Posicionamiento organico, keyword, google analityc web master tools.</td>
             </tr>
             </table>
           </div>
             
             
             <div  class="col-xs-12 col-sm5 col-md-5 col-lg-5">
          
              <table style="margin-bottom:10px">
            <tr>
            <td><h1><img src="<?php bloginfo('template_url')?>/imagenes/form2.png"></h1></td>
            <td><div class="bgray3"></div></td>
            </tr>
            </table>
          
          
          
             <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 
  <div class="form-group">
   <textarea class="form-control" rows="3"></textarea>
  </div>
 
 
  <button style="background-color:#66b5c3; color:#FFF; padding:5px 25px 5px 25px" type="submit" class="btn btn-default">Enviar</button>
</form>
             </div>
             
             
             
             
             
             
             
             
             <div  class="infoexp col-xs-12 col-sm12 col-md-12 col-lg-12">
             <table style="margin-bottom:25px; margin-top:10px">
            <tr>
            <td><h1>EXPERIENCIA LABORAL</h1></td>
            <td><div class="bgray2"></div></td>
            </tr>
            </table>
            
            
        <p><span class="exp">2015 - dic 2015 - Freelancer</span><Br>
        Diseño y desarrollo gestionando distintos proyectos.
        Proyectos: diseño y desarrollo web  responsive designe, autoadministrables, E-Commerce, redes sociales, posicionamiento. 
        </p> <br>
        
        <p><span class="exp">2014 - 2015 - Agencia de Maketin digital Comunicaciononline21</span><Br> 
        Maquetación y Desarrollo web asesoría Sercotec 2014 gobierno de Chile (aproximadamente 70 proyectos) 
        Gestiónando en diferentes proyectos en el áreas de Diseño Gráfico y desarrollo web, asesorando, orientado clientes según sus necesidades
        Proyectos: diseño y desarrollo web  responsive designe, autoadministrables, E-Commerce, redes sociales, posicionamiento.</p> <br>
        
        
        
        <p><span class="exp">2013 - 2014  - Agencia de Diseño y  desarrollo midesign.cl</span><br>
        Maquetación y Desarrollo web asesoría Sercotec 2013 gobierno de Chile (aproximadamente 50 proyectos) 
        Gestiónando en diferentes proyectos en el áreas de Diseño Gráfico y desarrollo web, asesorando, orientado clientes según sus necesidades
        Proyectos: diseño y desarrollo web  autoadministrables, E-Commerce, redes sociales, posicionamiento.
        </p> <br>
        
        
        <p><span class="exp">2012 - 2013 - Freelancer</span></br>
        Diseño y desarrollo gestionando distintos proyectos.
        Proyectos: diseño y desarrollo web  responsive designe, autoadministrables, E-Commerce, redes sociales, posicionamiento . 
        
        </p>  <br>
        
        
        <p><span class="exp">2007- 2008 - Diseñador Grafico</span><br>
        Imprenta Pepe grillo área de diseño y encargado de realizar y maquetar originales pre prensa 
        Tarjetas de presentación, papelería,flyers, impresión en distintos formatos.</p> <br>
        
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
<?php get_footer(); ?>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>