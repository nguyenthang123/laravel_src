<?php

/**

 * The base configuration for WordPress

 *

 * The wp-config.php creation script uses this file during the

 * installation. You don't have to use the web site, you can

 * copy this file to "wp-config.php" and fill in the values.

 *

 * This file contains the following configurations:

 *

 * * MySQL settings

 * * Secret keys

 * * Database table prefix

 * * ABSPATH

 *

 * @link https://codex.wordpress.org/Editing_wp-config.php

 *

 * @package WordPress

 */
// ** MySQL settings - You can get this info from your web host ** //

/** The name of the database for WordPress */

//define ('WP_POST_REVISIONS', false);

//define('WP_CACHE', true); //Added by WP-Cache Manager
//define( 'WPCACHEHOME', '/home/admin13524/domains/dadayhn.com/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
if(1==1){
    define('DB_NAME', 'pkgpc_tmh0815');
    define('DB_USER', 'pkgpc_tmh0815');
    define('DB_PASSWORD', '12345679');
}else{
    define('DB_NAME', 'pkgpc_tmh0715');
    define('DB_USER', 'pkgpc_tmh0725');
    define('DB_PASSWORD', '12345678');
}
/** MySQL hostname */
define('DB_HOST', 'localhost');
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
define('WP_POST_REVISIONS', false );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j=(}6:!;A_IrA$G8}H3I]qR[ZH#Dzq|4]fSbj5z~Q?+6WPVIP!Z^D!E)]%b.:6==');

define('SECURE_AUTH_KEY',  'v|+|.~)ks=[gFpN%}Y]7yHnwGV.AuIT%fiuD]S~lO^!Q9Sb3NYNElcfw$d|k`VU|');

define('LOGGED_IN_KEY',    'g?-v7[imcMP5ZTX8A%xap/$e#8#Od2<J|Hr*cS<+)!ZXo*L-HXi+trS9MUkr0WEF');

define('NONCE_KEY',        'jog;pw+qH)^D|R^J;]l[7*<>&NLvB6R9@.v9@^w.S[M`xJ%3OTm?D^5x?n3Ym-87');

define('AUTH_SALT',        'fd!,!2f:E:##J;w:cGN3+2ECJfu;>[)>MSzlu?TQ~MHrZ?RxuHaG[;WS,RV|=0nZ');

define('SECURE_AUTH_SALT', ',Vla1<KW)_75L#Xj}W2*-uvz?u?sZ(*?BuA|r!vt|d&/oplC#:(kSP5XtUSEQqF+');

define('LOGGED_IN_SALT',   '6w`qt_y[tbWfvO80pWtPf2+WJLdr{t~O>Df3B5kg@oq#Pj61>jl2c~Qq5E3syzEZ');

define('NONCE_SALT',       '|qRA#00~&.jb%_E&2$75!b^[Rr.16x]%x_K]^gp/S*p)OI5nPgVz1yHu-flJqW<M');



/**#@-*/



/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix  = 'wp_';



/**

 * For developers: WordPress debugging mode.

 *

 * Change this to true to enable the display of notices during development.

 * It is strongly recommended that plugin and theme developers use WP_DEBUG

 * in their development environments.

 *

 * For information on other constants that can be used for debugging,

 * visit the Codex.

 *

 * @link https://codex.wordpress.org/Debugging_in_WordPress

 */

define('WP_DEBUG', true);

define("domain", 'http://phongkhamgiaiphong.com/tmh');

define("link_gioithieu", 'http://taimuihonghanoi.net/gioi-thieu-phong-kham');

define("link_kythuat", 'http://taimuihonghanoi.net/ky-thuat-chuyen-nghiep');

define("link_thietbi", 'http://taimuihonghanoi.net/thiet-bi-hien-dai');

define("link_lotrinhdenkham", 'http://taimuihonghanoi.net/dia-chi-phong-kham');

define("ico_shortcut", '<link rel="shortcut icon" type="image/x-icon" href="http://trihanoi.com/public/frontend/home/image/logo.png" />');

define('link_tuvan','http://swt.pk709.com/LR/Chatpre.aspx?id=KTF27288478&lng=en');

define("link_skype", 'skype:phongkhamdakhoagiaiphong@gmail.com?chat');

define("link_facebook", 'https://www.facebook.com/phongkhamdakhoagiaiphong/');

define("phone1", '1900.2662');

define("phone2", '0978.074.181');

function  rewrite_number_phone($phone,$Arr=null){

    if($Arr==null){

        $Arr=array(' ','.');

        $phone=str_replace($Arr,'', $phone);

    }

    return 'tel:'.$phone;

}

function dangkysdt(){

    $str='<script src="http://phongkhamgiaiphong.com/dangkysdt/js/dkdt.js"></script>';

    return $str;

}

function line_chat(){

    $str='<script type="text/javascript" src="http://swt.pk709.com/JS/LsJS.aspx?siteid=KTF27288478&#038;lng=en&#038;ver=4.7.3"></script>';


    return $str;

}

function Addtop(){

    $str='<script src="http://phongkhamgiaiphong.com/cd/js/funs.js"></script>';

    return $str;

}

function popup(){

    $str3='

<script>

    $(document).ready(function(){

        $("#popup2").hide().fadeIn(500);

        var h=window.innerHeight;

        var w=window.innerWidth;

        $("#popup2").css({"position":"fixed","top":h/2 - 165,"left":w/2 - 200});

        $(".popup_close").click(function () {

            $("#popup2").hide().delay(15000).fadeIn(2000);

        });

    })

</script>

<div id="popup2" style="z-index: 9999;display:none;position;position: fixed;">

    <div class="popup_close" style="width: 30px;position: absolute;top: -15px;left: 384px;z-index: 99;">

        <img src="http://trihanoi.com/public/frontend/images/Addleft/close.png" height="30px">

    </div>

    <img src="http://phongkhamgiaiphong.com/popup/images/popup_tmh.gif">

    <div class="popup_close" style="width: 107px;height: 27px;float: right;display: block;position: absolute;margin-top: -91px;margin-left: 161px;cursor: pointer;"></div>

    <a href="'.link_tuvan.'">

    <div style="width: 108px;height: 27px;float: right;display: block;position: absolute;margin-top: -91px;margin-left: 276px;"></div>

    </a>

</div>';

    return $str3;

}

function Addleft(){

    $str='<script type="text/javascript" src="http://phongkhamgiaiphong.com/addleft/js/funs.js"></script>';

    $str2='<script type="text/javascript" src="http://phongkhamgiaiphong.com/addleft/js/left_right.js"></script>';

    return $str.$str2;

}

/* That's all, stop editing! Happy blogging. */



/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');



/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');

