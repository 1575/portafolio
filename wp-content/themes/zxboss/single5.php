<?php get_header(); ?>
  <section id="contenedorsingle">
     <section id="principalsingle1">
   <?php if (have_posts()) : ?>
   <?php while (have_posts()) : the_post(); ?>
	
      <div id="banda3">&nbsp;&nbsp;&nbsp;&nbsp;
      </div>
      <div id="ultimoproyecto2">
         
         </div>
          <br>
             <div id="efectobanda">
             </div> 
      <?php the_content("Leer más..."); ?>
        
       
                              
             <br>
             <div id="contenedorvolver">
               <div id="volver"><a href="http://jonathanaravena.com/?page_id=8"> <img src="<?php bloginfo('template_url')?>/img/soy3.png" ></a>
             </div> 
     </div>     
               
   <?php endwhile; ?>
   <?php else : ?>
   La palabra que buscas no se encuentra 
   Intenta con otras palabras 
   <?php endif; ?>
   <br>
   <?php comments_template()?> 
   </div> 
         
    </section>
   <?php get_footer(); ?>
