<?php get_header(); ?>



   
 <section id="contenedor">
    <section id="principal">
      <div id="single">
          
       
          <?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
        
          <div class="titulosingle">
      
          <?php the_title('<h1>', '</h1>', TRUE); ?></a>
          </div>
          
          
          
        <div class="infosingle">
		  
		  <?php the_content("Leer más..."); ?>
          
          
          ¡QUIEN SOY?<br><br>
          
          
          
      
      

        
<?php endwhile; ?>

<?php else : ?>

<?php endif; ?>

         
       
          
        </div>
      
         
      
        
        
       </section>
       
  

<?php get_sidebar(); ?>
<?php get_footer(); ?>
