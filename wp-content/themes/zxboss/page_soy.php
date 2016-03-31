<?php
/*
Template Name: soy
*/
?>
<?php get_header(); ?>



   
 <section id="contenedor">
    <section id="principal">
    
            <div id="separaaside1">
        </div> 
          
       
          <?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
        
        
         
 <img style="margin-top:7px" src="<?php bloginfo('template_url')?>/img/stv.png" > 
   <div id="efectobanda2">
        </div>
  <div id="espacio">
  </div>
  
 <div id="titulosoy"><h1>¿QUIÉN SOY?</h1></div>

<div id="infosoy">     
<h2>Hola mi nombre es Jonathan Aravena, Diseñador gráfico profesional  Duoc Uc , 
poseo un fuerte  compromiso  y constante búsqueda por  la innovación y las nuevas tecnologías  esto me permite aportar con nuevas , buenas y mejores  ideas  en cuanto al ámbito y áreas del  diseño creando soluciones  publicitarias, impresas, multimedia y desarrollo web.
</h2></div>


 <div id="titulosoy"><h1>¿POR QUÉ ELEGIRME?</h1></div>

<div id="infosoy">
<h2>Capacitado para  prestar todo tipo de asesorías  a empresas,  instituciones o particulares e implementar las mejores estrategia  comunicacional aplicada a satisfacer tus necesidades reales  frente al mercado, ofreciendo compromiso y calidad en el  servicio además de dejar una marca personal  en el diseño. </h2>
</div>

<div id="titulosoy"><h1>CONOCIMIENTOS:</h1></div>

<div id="infosoy">
<h2>Dentro de mis conocimientos de diseño poseo manejo de la 
Suite adobe: Illustrator,Photoshop,Indesigne,Flash. <br><br>
   

Conocimientos Web: HTML5,CC3,Javascrit,AS3,Mysql,php.
Maquetacion desde cero sitios autoadministrables CMS Wordpress.</h2>


<img src="<?php bloginfo('template_url')?>/img/soy.png" > <br><br> 
</div>

 
      


        
<?php endwhile; ?>

<?php else : ?>

<?php endif; ?>

         
       
     
         
      
        
        
       </section>
       
  

<?php get_sidebar(); ?>
<?php get_footer(); ?>
