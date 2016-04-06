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
define('DB_NAME', 'puntopym_masterpc');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'puntopym_user');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'sofpymes');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', '191.101.21.141');

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
define('AUTH_KEY', '2T^zz@+~l^q1lT/Kk<g>GO1i8p4ke:t9K9*U+X`:2~fS&GO8)?O-eR(22bGCDG_[');
define('SECURE_AUTH_KEY', '+{=AU&jbyh+R`4BlLB15r4 }@i2fpFt{Hv=;E6|3ctkPDo#B?t=d.l=}j:LTqQGB');
define('LOGGED_IN_KEY', 'VMGMaRg=I}y[WlX@EI25nHHJj%*l);6/Iu);*U`C||7Dx;_-}ffo5 HubS&*H|0H');
define('NONCE_KEY', '=ofC{bac9YR507<e+Qw?Z,^!XJ7i[-w`dWNtNQf3,+3lR)$[-`M 0e}wnRS3pr3R');
define('AUTH_SALT', '~M-h?L_JySw[3yxC-(+;HV%M2!Ps^|}Imbt%)9_*~-LK4dy,LKMGBb@s+|dy7PAN');
define('SECURE_AUTH_SALT', 'u,A)7|dEGwW1;{a?}d#d3+)&Vp~-+|-M.wUyN4_|QqiJMBr}F43IodO[!Zw}X/+|');
define('LOGGED_IN_SALT', '3?`lAzQ(uC,>[&g-3B1mh)j02>^J-5:OLU<s!P6?G2-l|P).yN?!I1%!OuTs02Z(');
define('NONCE_SALT', 'T@K^J*5}AaQ,w_b.*N&Mhp#yK9iv?ZliHF=3,lM9QGQ`+aP[%(i*_p$.8yv_6OdJ');

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

