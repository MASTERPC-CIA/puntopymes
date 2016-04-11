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
define('DB_NAME', 'puntopymes');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'primos14');

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
define('AUTH_KEY', '.NBLAhY/ucxfyUgX8$#iPX-o,c-,1Lb8O4r3< 6c8NLo<KXR5 ,Xitrl9,EB 1-h');
define('SECURE_AUTH_KEY', '4E}triEieGxHnL]uo_9s(Tr%W&xKU6zoLth/|lDAQw_QWm~HJv))$vKwVWIY =Mw');
define('LOGGED_IN_KEY', '7SiIj1f&gHlUxx rzh p>YKG h`,oIW`27;Jk*ACb&ccI|Rk3~D.1IrRC +NUEX0');
define('NONCE_KEY', '{vg g^ckMoFih;3~$|Nu|_QOD/9h:f]@M%G1:?iu>(5(gA)&0s>R%s*s}F@s|8xU');
define('AUTH_SALT', 'I@ei2`ER@6YCb8|B(A;lY{SGpP|X,_5ADAeuPF}D8T(LS+tyluox{.s4*qgoLcH~');
define('SECURE_AUTH_SALT', 'rvw)r74>?bJ>|&<T`(+pd[#*DM:1_&UEXPmQef^&c;@4AZ=JE}&B?y=} eEQ`m_U');
define('LOGGED_IN_SALT', 'o_NM/1?-9TvO|-+mPtb)`RCO,|MuRAB~oi4`}E}SGgUO2DH#Y<@BXP4x/>S4n(|v');
define('NONCE_SALT', '}LX*?|kbi-GkBoG17P`j3YDkOvXCEV<PE_.-BxPR+a!i,SyX7]Uv#d}6KpDfnBkX');

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

