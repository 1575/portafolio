





    <section id="contenedorsingle">
       <section id="principalsingle">
          
  
  
   <?php if (have_posts()) : ?>
   <?php while (have_posts()) : the_post(); ?>
	
			  
              
               <div id="titulopost" style="color: #333; font-size:18px; font-weight:600; font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif">
				<?php the_title(); ?>
                <br><br>
                </div>
                
                 <div id="fecha">
                  <?php the_author() ?>
				  <?php the_time('F jS, Y') ?>
                  <?php the_category(', ') ?>
                  </div> 
                
                
                
                
                <?php the_content("Leer más..."); ?>
                

                    
                  <div class="separacion">
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
        

<?php get_sidebar(); ?>
<?php get_footer(); ?>
