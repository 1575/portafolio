<!---BTN ARRIBA-->
</div><!--separa footer-->
<!--FOOTER-->
<!--BOTON ARRIBA-->
<div id='IrArriba'>
<a href='#Arriba'><span/></a>
</div>
<script type='text/javascript'>
//<![CDATA[
// Botón para Ir Arriba
jQuery.noConflict();
jQuery(document).ready(function() {
jQuery("#IrArriba").hide();
jQuery(function () {
jQuery(window).scroll(function () {
if (jQuery(this).scrollTop() > 200) {
jQuery('#IrArriba').fadeIn();
} else {
jQuery('#IrArriba').fadeOut();
}
});
jQuery('#IrArriba a').click(function () {
jQuery('body,html').animate({
scrollTop: 0
}, 800);
return false;
});
});

});
//]]>
</script>
<style>
/* ----------  Botón Ir Arriba --------- */
#IrArriba {position: fixed;bottom: 30px; /* Distancia desde abajo */right: 30px; /* Distancia desde la derecha */}
#IrArriba span {width:60px;height:60px;display: block;background-image:url(<?php bloginfo('template_url')?>/imagenes/flecha1.png);background-repeat:no-repeat;}
</style>

  <div  style="height:5px; margin-top:-2px;" class="container-fluid deco2">
  </div> 

   <footer>
   <div class="container">

                 
    <div style="padding-left:30px" class="cajafooter col-xs-12 col-sm-5 col-md-5 col-lg-8">
    <span style="font-family: 'Abel', sans-serif; font-size:18px">
    <A href="http://www.flickr.com/photos/100397469@N05/" style="color:#CCC" target="_blank">Contacto:</A></span><br><bR>
    
    <div class="cajaf1">
    <table>
    <tr>
    <td style="border:none" width="23"><img src="<?php bloginfo('template_url')?>/imagenes/puntero2.png" width="12" alt="decoracion"></td>
    <td style="border:none"> Jonathan Aravena E.</td>
    </tr>
    </table>
    </div>
    
    
    <div class="cajaf2">
    <table>
    <tr>
    <td style="border:none" width="23"><img src="<?php bloginfo('template_url')?>/imagenes/sobrefooter.png" width="13" alt="contacto" ></td>
    <td style="border:none">info@jonathanaravena.cl</td>
    </tr>
    </table>
    
    
    </div>
    
      <div class="cajaf3">
       <table>
        <tr>
        <td style="border:none" width="23"> <img src="<?php bloginfo('template_url')?>/imagenes/sobrefooter.png" width="13" alt="e-mail"></td>
        <td style="border:none"> jonathanzx87@gmail.com</td>
        </tr>
        </table>
      </div> 
         </div>
         
         
        <div class="cajafooterlogo col-xs-12 col-sm-4 col-md-4 col-lg-4">
        <span style="font-family: 'Abel', sans-serif; font-size:18px">DISEÑO </span>
        <span style="color:#6C3">& </span><span style="font-family: 'Abel', sans-serif; font-size:18px">DESARROLLO </span><span style="color:#6C3">WEB</span></span><br><bR>
        <div class="spafooter">
        <a style="text-decoration:none; color:#999; font-weight:bolder; font-size:12px" href="" target="_blank">&#169; Desarrollado por: jonathanaravena.cl</A>
        </div>
        </section>
        

   </div><!--fin container-->
   
   
   </footer>
<!--F.FOOTER--->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-75335172-1', 'auto');
  ga('send', 'pageview');

</script>
<?php wp_footer ()?>
</body>
</html>