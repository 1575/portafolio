<!doctype html>
<html>
<head>
<?php wp_head();?>
<meta charset="utf-8">
<title><?php bloginfo('name'); ?></title>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
<meta name="description" content="<?php wp_title(); echo ' '; bloginfo( 'description' ); ?>" />
<meta name="keywords" content="<?php wp_title(); echo ' '; bloginfo( 'name' ); echo ' , '; bloginfo( 'description' ); ?>" />



<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url')?>/img/menu2.ico" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.2.3.min.js"></script> 
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.lavalamp.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $("#1, #2, #3").lavaLamp({
                fx: "backout",
                speed: 700,
                click: function(event, menuItem) {
               
                }
            });
        });
    </script>

</head>
<body>

<header>
<div  id="colorheader">

   <nav>
      <div id="contenedormenu">
      <ul class="lavaLampBottomStyle" id="3">
          <li class="current">
             <?php wp_list_pages( 'title_li=&depth=1' ); ?>
          </li>
          </ul><br>
          <br>
        </div> 
        
         <!--------------------------------------------------------------->
       <div id="publicidadredes">
         
          <div id="publicidad" >
            
          <!--redes-sociales--><!--onclick="window.location='https://www.facebook.com/';"-->
             <div class="facebook" onclick="window.location='https://www.facebook.com/';" title="Facebook">
             </div>
             <div class="tweter" onclick="window.location='http://jonathanaravena.com/contactos/';" title="Correo contacto">
             </div>
             <div class="gmail" onclick="window.location='https://www.facebook.com/';" title="Twitter">
             </div>
          
          </div>
          
        <div id="buscadorredes">
           <div id="buscador">
           <?php $search_text = "Buscador.."; ?> 
           <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/"> 
           <input type="text" value="<?php echo $search_text; ?>" name="s" id="s" 
           onblur="if (this.value == '')    {this.value = '<?php echo $search_text; ?>';}" 
           onfocus="if (this.value == '<?php echo $search_text; ?>') {this.value = '';}" /> 
           <input type="hidden" id="searchsubmit" /> 
           </form>
           </div>
           <div id="logobuscador">
           <img src="<?php bloginfo('template_url')?>/img/buscador.png">
           </div>
        </div>
      </div>
        <!--------------------------------------------------------------->

   </nav>
 </div>
 </header>
