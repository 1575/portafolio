<?php get_header(); ?>
<section id="contenedorsingle">
     <section  id="principal">
     
     
             <div id="separaaside1">
              </div> 
     
          
  <?php if (have_posts()) : ?>
   <?php while (have_posts()) : the_post(); ?>
	
	           <!----------style="border:1px solid #F00"--------> 
        
                  <div id="infosingle">
                  
                     <div id="titulosingle">
                    <?php the_title(); ?><br>
                    </div>
				  
				  <?php the_content("Leer más..."); ?><br>
                  </div>

            
    
     
		
		<?php endwhile; ?> <?php else : ?>
              La palabra que buscas no se encuentra 
			  Intenta con otras palabras 
	    <?php endif; ?>
         <br>
          <?php comments_template()?> 
 </div> 
</section>
        

<?php get_sidebar(); ?>
<?php get_footer(); ?>
