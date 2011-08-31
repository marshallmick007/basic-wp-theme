<?php
// Widgetize the theme
if ( function_exists('register_sidebar') ){
  register_sidebars(2);
}

// Register the Main Menu
add_action( 'init', 'register_menus' );

function register_menus() {
	register_nav_menu( 'main-menu', __( 'Main Menu' ) );
}
?>
