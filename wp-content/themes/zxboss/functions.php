<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

// Agrega tags para subcategor�as!
function in_subcategory($a){
$in_subcategory = false;
foreach( (array) get_term_children( $a, 'category' ) as $child_category ) {
if(in_category($child_category))$in_subcategory = true;
}
return $in_subcategory;
}

function the_breadcrumbs(){
	$CPtheFullUrl = $_SERVER["REQUEST_URI"];
    $CPurlArray=explode("/",$CPtheFullUrl);
    echo '<a href="/">Home</a>';
    while (list($CPj,$CPtext) = each($CPurlArray)) {
        $CPdir='';
        if ($CPj > 1) {
            $CPi=1;
            while ($CPi < $CPj) {
                $CPdir .= '/' . $CPurlArray[$CPi];
                $CPtext = $CPurlArray[$CPi];
                $CPi++;
            }
            if($CPj < count($CPurlArray)-1) echo ' / <a href="'.$CPdir.'">' . str_replace("-", " ", $CPtext) . '</a>';
        }
    }
    echo wp_title(' / ');
}

/*****Obtener la imagen *******/

function la_imagen($size = "medium", $add = ""){
     
     global $wpdb, $post;
     $thumb = $wpdb->get_row("SELECT ID, post_title FROM {$wpdb->posts} WHERE post_parent = {$post->ID} AND post_mime_type LIKE 'image%' ORDER BY menu_order");
     
     if(!empty($thumb)) $image = image_downsize($thumb->ID, $size);
     else $image[0] = "url_alterna";
          
     print "<img src='{$image[0]}' alt='{$thumb->post_title}' {$add} />";

}

function acortar_texto($texto, $mayorque=100, $menos=233, $final=100) {

	$longitud = strlen($texto);
    if($longitud > $mayorque){
    	$longitud = $longitud - $menos;
        $parte_inicial = substr($texto, 0, -$longitud);
        $parte_final = substr($texto, -$final);
        $nuevo_nombre = $parte_inicial.$parte_final;
        $texto_final = $nuevo_nombre;
    }else{
       	$texto_final = $texto;
   	} 
				
	return $texto_final;

}





function new_excerpt_length($length) {
	if($length > 40) $length = 13;
	return $length;
}
add_filter('excerpt_length', 'new_excerpt_length');

function traducefecha($fecha)
    {
    $fecha= strtotime($fecha); // convierte la fecha de formato mm/dd/yyyy a marca de tiempo
    $diasemana=date("w", $fecha);// optiene el n�mero del dia de la semana. El 0 es domingo
       switch ($diasemana)
       {
       case "0":
          $diasemana="Domingo";
          break;
       case "1":
          $diasemana="Lunes";
          break;
       case "2":
          $diasemana="Martes";
          break;
       case "3":
          $diasemana="Mi&eacute;rcoles";
          break;
       case "4":
          $diasemana="Jueves";
          break;
       case "5":
          $diasemana="Viernes";
          break;
       case "6":
          $diasemana="S&aacute;bado";
          break;
       }
    $dia=date("d",$fecha); // d�a del mes en n�mero
    $mes=date("m",$fecha); // n�mero del mes de 01 a 12
       switch($mes)
       {
       case "01":
          $mes="Enero";
          break;
       case "02":
          $mes="Febrero";
          break;
       case "03":
          $mes="Marzo";
          break;
       case "04":
          $mes="Abril";
          break;
       case "05":
          $mes="Mayo";
          break;
       case "06":
          $mes="Junio";
          break;
       case "07":
          $mes="Julio";
          break;
       case "08":
          $mes="Agosto";
          break;
       case "09":
          $mes="Septiembre";
          break;
       case "10":
          $mes="Octubre";
          break;
       case "11":
          $mes="Noviembre";
          break;
       case "12":
          $mes="Diciembre";
          break;
       }
    $ano=date("Y",$fecha); // obtenemos el a�o en formato 4 digitos
    $hora=date("G:i",$fecha); // obtenemos el a�o en formato 4 digitos

    $fecha= $diasemana." ".$dia." de ".$mes." de ".$ano.", ".$hora." hrs"; // unimos el resultado en una unica cadena
    return $fecha; //enviamos la fecha al programa
    }

function getTopParentPostName($myid){
	$mypage = get_page($myid);

	if ($mypage->post_parent == 0){
		return $mypage->post_title;
	}
	else{
		return getTopParentPostName($mypage->post_parent);
	}

}

function get_ancestor_ids ( $child = 0, $inclusive=true, $topdown=true ) {
        if ( $child && $inclusive ) $ancestors[] = $child;
        while ($parent = get_parent_id ( $child ) ) {
                $ancestors[] = $parent;
                $child = $parent;
        }
        //      If there are ancestors, test for resorting, and apply
        if ($ancestors && $topdown) krsort($ancestors);
        if ( !$ancestors ) $ancestors[] = 0;
        //
        return $ancestors;
 }

function get_parent_id ( $child = 0 ) {
        global $wpdb;
        // Make sure there is a child ID to process
        if ( $child > 0 ) {
                $result = $wpdb->get_var("SELECT post_parent FROM $wpdb->posts WHERE ID = $child");
        } else {
                // ... or set a zero result.
                $result = 0;
        }
        //
        return $result;
}

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}

function most_popular_posts($no_posts = 10, $before = '<li>', $after = '</li>', $show_pass_post = false, $duration='') {
    global $wpdb;
    $request = "SELECT ID, post_title, COUNT($wpdb->comments.comment_post_ID) AS 'comment_count' FROM $wpdb->posts, $wpdb->comments";
    $request .= " WHERE comment_approved = '1' AND $wpdb->posts.ID=$wpdb->comments.comment_post_ID AND post_status = 'publish'";
    if(!$show_pass_post) $request .= " AND post_password =''";
    if($duration !="") {
          $request .= " AND DATE_SUB(CURDATE(),INTERVAL ".$duration." DAY) < post_date ";
    }
    $request .= " GROUP BY $wpdb->comments.comment_post_ID ORDER BY comment_count DESC LIMIT $no_posts";
    $posts = $wpdb->get_results($request);
    $output = "";
    if ($posts) {
        foreach ($posts as $post) {
            $post_title = stripslashes($post->post_title);
            $comment_count = $post->comment_count;
            $permalink = get_permalink($post->ID);
            $output .= $before . '<a href="' . $permalink . '" title="' . $post_title.'">' . $post_title . '</a> (' . $comment_count.')' . $after;
        }
    } else {
        $output .= $before . "None found" . $after;
    }
    echo $output;
}
 //  esta función es para contar las letras de cada post en la introducción en el index,
	// es decir cada introducción de post va a tener 80 letras.
     function custom_excerpt_length( $length ) {
      return 60;
       }
      add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
 
   
   
   
    // funcion para habilitar la opcion para subir imagenes destacadas a cada post
      add_theme_support( 'post-thumbnails' ); 
 
    // esto nos añade las funciones para los RSS
    automatic_feed_links();
 
    // cargamos jQuery
    if ( !is_admin() ) {
       wp_deregister_script('jquery');
       wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"), false);
       wp_enqueue_script('jquery');
    }
 
    // Declaramos el sidebar como zona acta para añadir widgets
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'name' => 'Sidebar Widgets',
            'id'   => 'sidebar-widgets',
            'description'   => 'These are widgets for the sidebar.',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>'
        ));
    }
 
 

 ?>