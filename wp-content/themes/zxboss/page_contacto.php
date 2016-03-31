<?php
/*
Template Name: contactos
*/
?>
<?php get_header(); ?>



   
 <section id="contenedor">
    <section id="principal">
    
          
                   <div id="separaaside1">
        </div> 
          <?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?> 

 
  <div id="contactitulo"> 
    
       </div>   
 
 

 <div id="contactform">  
      
       <div style="font-size:14px; font-family:Tahoma, Geneva, sans-serif; margin-bottom:15px; padding-top:10px;" id="infocontact"> 
      
     
      </div> 
 
      <div id="infocontactlinea"> 
      </div> 
      <div id="infoseparacion"> 
      </div>   
   <?php the_content("Leer más..."); ?>
   <br>



   <div id="masinfocont">
    
     
     <div id="contenedorsocial2">
       REDES SOCIALES<br>
       <a href="https://www.facebook.com/jonathan.aravena.92" target="_blank"><img src="<?php bloginfo('template_url')?>/img/facebook.png" width="29" height="46" ></a>&nbsp;&nbsp;
       <a href="#" target="_blank"><img src="<?php bloginfo('template_url')?>/img/twitter.png" width="29" height="46"></a>&nbsp;&nbsp;
       <a href="http://www.flickr.com/photos/100397469@N05/" target="_blank"><img src="<?php bloginfo('template_url')?>/img/youtubeglass.png" width="29" height="46"></a>&nbsp;&nbsp;
       </div>
     
     
     <div id="masinfocontcaja">
     <h1 style="font-size:12px; line-height:10%;">PARA MAYOR CONTACTO</h1>
     <div style="color: #666;font-size:12px; font-family:Tahoma, Geneva, sans-serif">
     jonathanzx87@gmail.com <b>/</b> jonny_zx1@hotmail.com<br>
     </div>
   </div>
       
   
   </div>
   
   
    
     
   
  <!----FIN-REDES-SOCIALES---> 
   
    
      <div id="fin"> 
      </div>
     
</div>


      
</div>




        
<?php endwhile; ?>

<?php else : ?>

<?php endif; ?>

         
       
     
         
      
        
        
       </section>
       
  

<?php get_sidebar(); ?>
<?php get_footer(); ?>
