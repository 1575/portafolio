<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', '#');

/** Tu nombre de usuario de MySQL */
define('DB_USER', '#');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '#');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#0.]T6zR-gNs-+Op]_uJTR|uK$VmNCL}FO6^>&BNVA]di82OF3666lt8]o7vbVW>');
define('SECURE_AUTH_KEY',  '-!yU/@s6TVtYPfybfr:)<fcTQl3|pB6;*BNhcJE-@G-uXHbZ[%7(ugYs#N! )SmF');
define('LOGGED_IN_KEY',    '7aV_rhx|qn$@TgkHzM8]8|mqy,(|Q(VQ_nwF`c#9U=I/L9r*}]*0%1zf4</+?<w{');
define('NONCE_KEY',        'P>1e0YCX-D5ZE2VU?poT*z+|zT18LX,Mk,8qCvDvU,wd!%-L@9,=4M>`nxxR-{]~');
define('AUTH_SALT',        'Z9p(h[|s#z%:QuBs|AJ}gg9@e`zS%QzEf{%h*/Q(BILF#u))~nX%|]lnaJbWV_vA');
define('SECURE_AUTH_SALT', 'P(P|!6$v|>I#NuBQ:R7IQM)o^k<l_[1$p&fG2ps>8+Ghx++j*~:Cwj;xQ3PhbhO=');
define('LOGGED_IN_SALT',   ',zNmDu4+4W!:M@FWXLu|{7(b_D^vqe!pBTSOmp{V`mWZ!XEFabj_?|B9dwkOS|vL');
define('NONCE_SALT',       'd5EPXHVlDBHX[p<,F w=;?<uRxr+_-*s>*jh% VdP&*r@JK,fCTPL+jUK2y719$D');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

