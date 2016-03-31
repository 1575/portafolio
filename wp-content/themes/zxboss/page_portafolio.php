<?php
/*
Template Name: portafolio
*/
?>



<?php get_header(); ?>
<section id="contenedorpo">
 <section id="contenedorportafolio">
           
         <section id="principalportafolio">
           <div  class="tituloportafolio">
           </div>
 

                
          <!----style="border:1px solid #F00"------>
         <?php  query_posts('category_name=portafolioweb'); 
          if (have_posts()) :  while (have_posts()) : the_post(); ?>
          <div id="editorial3">
          
          <div id="tituloporta">
          <h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title();?></a></h3>
          </div>
          <center><a href="http://jonathanaravena.com/?p=18"><IMG alt=Tiger src="<?php bloginfo('template_url')?>/img/web.png"></a></center>
          
           <div id="infoporta">
		 Diseño y desarrollo de la construcción más integra de tu sitio web, combinando estrategia, creatividad y buen criterio que nos caracteriza, para lograr mayor impacto de comunicación.
          </div>
		  
		  <?php endwhile; else:  endif; ?><br>
          </div>
          
          <!---------->
     
          <!---------->
        

         
         
          <?php  query_posts('category_name=portafolioilustracion'); 
          if (have_posts()) :  while (have_posts()) : the_post(); ?>
          <div id="editorial2">
          
          <div id="tituloporta">
          <h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title();?></a></h3>
          </div>
          <center><a href="http://jonathanaravena.com/fotografia-y-ilustracion/16/"><IMG alt=Tiger src="<?php bloginfo('template_url')?>/img/ilustracion.png"></a></center>  
          
           <div id="infoporta">
           Conozco la importancia de tener un logotipo que represente a tu empresa, para lo cual diseñamos una imagen corporativa completa que será tu cara visible frente a tus clientes.
          </div>
		  
		  <?php endwhile; else:  endif; ?><br>
          </div>
         
      
 
           <!---------->
     
          <!---------->
       
          
              
          <?php  query_posts('category_name=portafolioeditorial'); 
          if (have_posts()) :  while (have_posts()) : the_post(); ?>
          <div  id="editorial1">
          
          <div id="tituloporta">
          <h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title();?></a></h3>
          </div>
          <center><a href="http://jonathanaravena.com/?p=28"><IMG  alt=Tiger src="<?php bloginfo('template_url')?>/img/editorial.png" ></a></center>
          
           <div id="infoporta">
		  Desde una completa papelería corporativa, folleto o memoria comercial, tu empresa encontrará una solución clara, precisa y pregnante para tus proyectos editoriales
          </div>
		  
		  <?php endwhile; else:  endif; ?><br>
          </div>
          
         
         
         
          <!---------->
          
          

           </div>
     </section>
    </section>
       
<?php get_footer(); ?>
