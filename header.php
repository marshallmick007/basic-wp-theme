<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>

<body>

<div id="wrapper">
  <div id="content">
    <div id="logo"><?php bloginfo( 'name' ); ?></div>
    <div id="topnav">
      <?php if ( has_nav_menu( 'main-menu' ) ) { ?>
        navmenu
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
      <?php } ?>
    </div>
