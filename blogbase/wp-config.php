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
define('DB_NAME', 'mi_blog');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

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
define('AUTH_KEY', 'ss+LbMdge@b.2xQ=Cq=wQZCspC_k@rY;I^vhhZm:9z4xPKY#@WM|$c:%D/m*+4@)');
define('SECURE_AUTH_KEY', 'Fla/E0:4d-G@+FmT@dD9&sUPVK_^bPib< 3B.rv:Z}FSHWtZF?{-s!f5t`}Z,+2%');
define('LOGGED_IN_KEY', 'vr++{W?-MHjVfnNzKCIBP(=v6(`x.n>QZ  +2q49|NLuPG6bC_+>-zR_y:h5d:e?');
define('NONCE_KEY', '/1!y7JvWJeVczRM<a[$HF6+<1(53O8AisKeW=mK-6A!n2F,i|0Jmqvi??BV).m|&');
define('AUTH_SALT', '5nMEe!D=LcAJhi@j[T=U5]EHAX7UN;E,*CmM[Cj+,t1s^2/*~XG}#lYWmoH`A-!6');
define('SECURE_AUTH_SALT', '0g_Dv!F;j/ Fvz{Qb^UW;3F5@x8l7`U~mC%Enu.[k3-jUc`tKk$&|k-$ekD8tOY+');
define('LOGGED_IN_SALT', 'K30yaQ_9GAZ/sk~CtD|e[nhg%2$.I]%0 Mha?&xR~JsAcptH%C4o7Y)/7I#GQ[HB');
define('NONCE_SALT', 'g*`Q#Y&Nlzx0 Ph]{LJ->5/O(75-`_,DbjWQYDe$g&9XHC8rT)tqifhf5^#]9NJv');

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

