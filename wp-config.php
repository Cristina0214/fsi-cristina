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
define('DB_NAME', 'fsi-bd');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', '(0)w#?!Rk[M%W ySN9CyiK)pP^]`35;-sCj/ZM$GV9erPgb|iUY-g2,8|gIXU6Bx');
define('SECURE_AUTH_KEY', '8gOoJWiS|5:gH);GhQg^zgpz8G2dNwe[hOWduykzzIEe:Qkv<<R(~?6a|/uH@-;Y');
define('LOGGED_IN_KEY', '/|zm1SR%[[DpwHPj0e4nTY_j+jvn]lL]@~iZ<5Z@2x*r9_^K;6ZcB.>7eB2bW<6R');
define('NONCE_KEY', '1O9A`=m(KaJ%T)h~ttv*~EAZqH6oU8B%C]OhJ.Tmr0+fr:_W42iP{m~Xcdo/zROt');
define('AUTH_SALT', ',OQ}AcR?BhZv1w2*KcDL F] koKWY4ziDuFa:P?R7j}a%<_R[3X{YO<SQYi-/|2{');
define('SECURE_AUTH_SALT', 'qYj:}|ydw!]KK1+>6/9EDSQd)L[se6n_]1pN{qS}Q(i)Su<i@)I}h&]o&+$^v0^M');
define('LOGGED_IN_SALT', '5GH5mXwmL&Ymony>^aR:WACCUkKza)tNnO.n$APIE1li}3i^dWAqQ)?H@X3!VWg@');
define('NONCE_SALT', '3nE(B`+[>:~Ge KYJdg2.yb=%0Q^E]/U.;7Er!4 *T9?cICD|/pPgA`5&>.Ip=vi');

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

