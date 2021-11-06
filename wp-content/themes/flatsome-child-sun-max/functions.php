<?php 

define('SMX_THEME_DIR', get_theme_file_path() );
define('SMX_THEME_URI', get_theme_file_uri() );

/** Enqueue CSS/JS
 */
function smx_enqueue_scripts() {

  /* All Style Sheets */
  $theme_css_scripts = array(
    array( 'bootstrap-css', '/libs/bootstrap-5.1.3-dist/css/bootstrap.min.css', array(), false ),
    array( 'ach-ultilities-css', '/css/ach.ultilities.css', array(), true ),
  );

  /* All Scripts */
  $theme_js_scripts = array(
    array( 'bootstrap-js', '/libs/bootstrap-5.1.3-dist/js/bootstrap.min.js', array('jquery'), false, true ),
    // array( 'ach-uikit-js', '/js/ach.uikit.js', array('jquery'), true, true ),
  );

  /* Enqueue All Stylesheets */
  foreach( $theme_css_scripts as $file ) {
    $ver = $file[3] ? filemtime(SMX_THEME_DIR.$file[1]) : false;
    wp_enqueue_style( $file[0], SMX_THEME_URI.$file[1], $file[2], $ver );
  }
  /* Enqueue All Scripts */
  foreach( $theme_js_scripts as $file ) {
    $ver = $file[3] ? filemtime(SMX_THEME_DIR.$file[1]) : false;
    wp_enqueue_script( $file[0], SMX_THEME_URI.$file[1], $file[2], false, $file[4] );
  }

  /* CDN Scripts */
  wp_enqueue_style( 'remix-icon-css', 'https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css' );

}
add_action('wp_enqueue_scripts', 'smx_enqueue_scripts');


/* Include Dependencies */
require_once SMX_THEME_DIR.'/inc/template-functions.php';
require_once SMX_THEME_DIR.'/inc/shortcode.php';

?>


