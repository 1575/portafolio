<?php get_header(); ?>




<section id="contenedorsingle">

     
        <div class="resultado" style="font-family:">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <h1 style="font-size:18px">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RESULTADOS DE  BUSQUEDA</h1>
            </div>

     <section  id="principal">
     
     
     
     

     
     
     
             <div id="separaaside1">
              </div> 
     
          
  <?php if (have_posts()) : ?>
   <?php while (have_posts()) : the_post(); ?>
	
	 
 
          
                  <div class="infosingle2">
                  
                     <div id="titulosingle">
                    <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title();?></a>
                    </div>
				  
				    <?php echo acortar_texto(get_the_excerpt(),114,124,129); ?><br>
                    
                 <div id="fecha">
                <?php the_author() ?>
                <?php the_time('F jS, Y') ?>
                <?php the_category(', ') ?>
                 </div>
    
                    
                    <br><br>
                    
                 <div class="vermas" onClick="window.location='http://localhost/bossultimo/por-que-debo-implementarlo-en-diseno-web/85/';">
                </div>
    
    

    
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
