<?php get_header(); ?>
<section id="contenedor">
     <section id="principal">
         <br>
         
        <div id="separaaside">
        </div> 
         <!--------------------------------------------------------------------------->
         <!--------------------------------------------------------------------------->
          
           
          <?php  query_posts('category_name=blog&showposts=2'); 
          if (have_posts()) :  while (have_posts()) : the_post(); ?>
          <article> 

          
          <div class="fechafinal">
          <?php the_time('d') ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <?php the_time('M') ?>
          </div>
          
          <div id="contenedorpost">
          <div id="titulopost">
              
              <div div="info2">
              <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title();?></a>
              </div>
          </div>

		  <?php $postimageurl = get_post_meta($post->ID, 'foto', true); 
          if ($postimageurl) { ?> 
          
          <div id="separapost">
          </div>
          
          <div class="foto">
          <img style="border:1px solid #ebe8e8; border-radius:10px;" src="<?php echo $postimageurl; ?>" alt="alt" title="gg"/> 
          <?php } else { ?> 
          <img src="<?php bloginfo('template_url'); ?>/images/thumb.jpg" alt="alt"/> </a>
          <?php } ?>
          </div>

          <div class="info">
          
		  <?php echo acortar_texto(get_the_excerpt(),44,144,129); ?><br>
               
               
          <!-----boton vermas-------->      
          <div class="vermas">
          <a href="<?php the_permalink(); ?>"  rel="bookmark">
          <img src="<?php bloginfo('template_url')?>/img/vermastranspa.png" >
          </a>
          </div>
          <!------------------>
         
          </div>
          

          <div id="fecha">
                <?php the_author() ?>
                <?php the_time('F jS, Y') ?>
                <?php the_category(', ') ?>
                </div>
          </div>    
         
          </article>
          
           <?php endwhile; else:  endif; ?>
         <!------------------------------------------------------>
         <!------------------------------------------------------>
         
         
          <?php  query_posts('category_name=multimedia&showposts=2'); 
          if (have_posts()) :  while (have_posts()) : the_post(); ?>
          
          <article> 
           

          <div class="fechafinal">
          <?php the_time('d') ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <?php the_time('M') ?>
          </div>
          
          <div id="contenedorpost">
          <div id="titulopost">
              
              <div div="info2">
              <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title();?></a>
              </div>
          </div>

		  <?php $postimageurl = get_post_meta($post->ID, 'foto', true); 
          if ($postimageurl) { ?> 
          
          <div id="separapost">
          </div>
          
          <div class="foto">
          <img style="border:1px solid #ebe8e8; border-radius:10px;" src="<?php echo $postimageurl; ?>" alt="alt" title="gg"/> 
          <?php } else { ?> 
          <img src="<?php bloginfo('template_url'); ?>/images/thumb.jpg" alt="alt"/> </a>
          <?php } ?>
          </div>

          <div class="info">
          
		  <?php echo acortar_texto(get_the_excerpt(),44,144,129); ?><br>
               
               
          <!-----boton vermas-------->      
          <div class="vermas">
          <a href="<?php the_permalink(); ?>"  rel="bookmark">
          <img src="<?php bloginfo('template_url')?>/img/vermastranspa.png" >
          </a>
          </div>
          <!------------------>
         
          </div>
          

          <div id="fecha">
                <?php the_author() ?>
                <?php the_time('F jS, Y') ?>
                <?php the_category(', ') ?>
                </div>
          </div>    
         
          </article>
          
           <?php endwhile; else:  endif; ?>
         <!------------------------------------------------------>
         <!------------------------------------------------------>
                        <!--------------------------------------------------------------------------->
         <!--------------------------------------------------------------------------->
          
          <?php  query_posts('category_name=fotografia&showposts=2'); 
          if (have_posts()) :  while (have_posts()) : the_post(); ?>
          <article> 
           

          
          <div class="fechafinal">
          <?php the_time('d') ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <?php the_time('M') ?>
          </div>
          
          <div id="contenedorpost">
          <div id="titulopost">
              
              <div div="info2">
              <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title();?></a>
              </div>
          </div>

		  <?php $postimageurl = get_post_meta($post->ID, 'foto', true); 
          if ($postimageurl) { ?> 
          
          <div id="separapost">
          </div>
          
          <div class="foto">
          <img style="border:1px solid #ebe8e8; border-radius:10px;" src="<?php echo $postimageurl; ?>" alt="alt" title="gg"/> 
          <?php } else { ?> 
          <img src="<?php bloginfo('template_url'); ?>/images/thumb.jpg" alt="alt"/> </a>
          <?php } ?>
          </div>

          <div class="info">
          
		  <?php echo acortar_texto(get_the_excerpt(),44,144,129); ?><br>
               
               
          <!-----boton vermas-------->      
          <div class="vermas">
          <a href="<?php the_permalink(); ?>"  rel="bookmark">
          <img src="<?php bloginfo('template_url')?>/img/vermastranspa.png" >
          </a>
          </div>
          <!------------------>
         
          </div>
          

          <div id="fecha">
                <?php the_author() ?>
                <?php the_time('F jS, Y') ?>
                <?php the_category(', ') ?>
                </div>
          </div>    
         
          </article>
          
           <?php endwhile; else:  endif; ?>
         <!------------------------------------------------------>
         <!------------------------------------------------------>
          
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>