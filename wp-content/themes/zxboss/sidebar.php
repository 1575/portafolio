
<aside>

  <?php if( !function_exists('dynamic_sidebar')
 || !dynamic_sidebar()):?>

<?php endif;?>
 

 <div id="menuhead" >
      <div id="titulosidebar">
       ULTIMAS ENTRADAS
      </div>
  
      <?php get_archives('postbypost', 6); ?>

 
      <div style="margin-top:13px" id="titulosidebar2">
       CATEGORIAS
      </div>
		
		<?php wp_list_categories('title_li=&exclude=8,3,4'); ?>
          
    
       <br>
</div>
&nbsp;
       <div id="titulosidebar2">
       REDES SOCIALES
      </div>
      
      
       <!-- Start of Flickr Badge -->
<style type="text/css">
/*
Las imágenes son envueltas en divs clasificadas como "flickr_badge_image" con ids "flickr_badge_imageX" donde "X" es un número entero especificando una posición ordinaria. ¡A continuación encontrarás algunos estilos para que comiences!
*/
#flickr_badge_uber_wrapper { width:265px; margin-left:5px; margin-top:20px;  }
#flickr_badge_wrapper {padding:10px 0px 10px 0px;}

.flickr_badge_image {margin:0 19px 8px 0px; display:inline-block;}
.flickr_badge_image img {border: 2px solid  #cfcdcd; border-radius:1px; width:40px; height:40px;!important;}
.flickr_badge_image img:hover {border: 2px solid #333; opacity:0.6; border-radius:1px; width:40px; height:40px;}

#flickr_badge_source {text-align:left; margin:0 10px 5px 0px;}
#flickr_badge_icon {float:left; margin-right:5px;}
#flickr_www {display:block; padding:0 10px 5px 0px !important; font: 11px Arial, Helvetica, Sans serif !important; color:#3993ff !important;}
#flickr_badge_uber_wrapper a:hover,
#flickr_badge_uber_wrapper a:link,
#flickr_badge_uber_wrapper a:active,
#flickr_badge_uber_wrapper a:visited {text-decoration:none !important; background:inherit !important;color:#3993ff;}
#flickr_badge_wrapper {background-color:#ffffff;}
#flickr_badge_source {padding:0 !important; font: 11px Arial, Helvetica, Sans serif !important; color:#666666 !important;}
</style>

<div style="margin-top:45px;" id="flickr_badge_uber_wrapper"><a href="http://www.flickr.com/photos/100397469@N05/" id="flickr_www"><span style=" text-align:left;color:#676666; font-family:Tahoma, Geneva, sans-serif; font-size:14px">Mi Galeria Flicker </span></a><div id="flickr_badge_wrapper">
<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&display=latest&size=s&layout=x&source=user&user=100397469%40N05"></script>
</div></div>
<!-- End of Flickr Badge -->

      <hr style=" border:1px solid  #CCC">
 <!---------------------------------------------->
          <br>
       <div  id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
          
 <div class="fb-like-box" data-href="https://www.facebook.com/Habemus.Diseno" data-width="255" data-height="300" data-show-faces="true" data-stream="false" data-show-border="true" data-header="true"></div>
          
  
  
  
  
  
 <br><br> 
 

 


 
 
 
  

 
 
 

 
         <!---------------------------------------------->
</aside>













