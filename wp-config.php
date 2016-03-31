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
define('DB_NAME', 'prueba_pymes');

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
define('AUTH_KEY', 'xmxOA(HWTd-Uzj^M?|p7%RKe~Iq_Cz$_xQ[;+uvJzG6Oo{8o/i#XC4HX$I]POZ{@');
define('SECURE_AUTH_KEY', '=Di{bpwn[GBcKt)}wgWt7UBvL2e&e>1Z]Ts>1*7e-}t[~Q^l@}sh^QGT.ZZAarJV');
define('LOGGED_IN_KEY', 'HH|,qA$F:SvqhJ[tHy.1l-fBu7q~MHhxy$$e-oo4RZEzI}-Sb():6|lakk4e>,0p');
define('NONCE_KEY', 'B)4!<Hx,,ufg5on}gj8?PN^#_p=K5[rB!c}>a1qz--b?;R W*DyG-pYcujM[4,|a');
define('AUTH_SALT', 'ucW1|l+PVeeDs34dj_%YJZC,,t$4&}l9TGjU4m<R$|IZNGBpW5@!ujd~yqtx<oBK');
define('SECURE_AUTH_SALT', '<|P|d]-h;x-TaV3BB?(N~P$wT6]J=V(J3nnN]J+a8%5+&J&82}Eic7_Pl$BdXtD^');
define('LOGGED_IN_SALT', 'xRP_VQ+o9fa|%f5_Sv0^:ja$lh!hr{Kx)![s~a~$~<+3-a5hYCil.j%526w|/$nJ');
define('NONCE_SALT', '!}jq?UDdcQ9T##V&8-vz&=%D[^$xQiZ(Vb:aPol4#o,m9BVGs,Yw3Wz+&+&D}H5,');

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

