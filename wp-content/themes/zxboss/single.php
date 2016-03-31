
<?php
      //single1 es para el portafolio web
	  //single3 para portafolio editorial 
	  //single2 para blog y todo lo demas
	  //single5 paraportafolio ilustracion
	  
	if (in_category(9)) { // Si el post pertenece a la cat 1, redirigir a single-1.php
	include(TEMPLATEPATH . '/single2.php');
	

	
	} elseif (in_category(3)) { // Si el post pertenece a la cat 2, redirigir a single-2.php
	include(TEMPLATEPATH . '/single5.php');
	
	} elseif (in_category(4)) { // Si el post pertenece a la cat 2, redirigir a single-2.php
	include(TEMPLATEPATH . '/single1.php');
	
	} elseif (in_category(5)) { // Si el post pertenece a la cat 2, redirigir a single-2.php
	include(TEMPLATEPATH . '/single2.php');
	
           } elseif (in_category(8)) { // Si el post pertenece a la cat 2, redirigir a single-2.php
	include(TEMPLATEPATH . '/single3.php');
	
	           } elseif (in_category(7)) { // Si el post pertenece a la cat 2, redirigir a single-2.php
	include(TEMPLATEPATH . '/single2.php');
	
	         } elseif (in_category(6)) { // Si el post pertenece a la cat 2, redirigir a single-2.php
	include(TEMPLATEPATH . '/single2.php');
	

	
		} elseif (in_category(7)) { // Si el post pertenece a la cat 2, redirigir a single-2.php
	include(TEMPLATEPATH . '/single3.php');
	

	} else { // Si el post pertenece a la cat 3, redirigir a single-3.php
	include(TEMPLATEPATH . '/single4.php');
	} ?>






