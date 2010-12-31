<?php
/**
 * @package WordPress
 * @subpackage Toolplate
 */
?><!doctype html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title><?php wp_title(''); ?></title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/reset.css">
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">	
	<?php wp_head(); ?>
	<script src="<?php bloginfo( 'template_directory' ); ?>/js/libs/modernizr-1.6.min.js"></script>
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<header id="branding">
			<<?php echo (is_home() || is_front_page()) ? 'hgroup' : 'div' ?> role="banner">
				<?php if (is_home() || is_front_page()): ?><h1 id="site-title"><?php else: ?><p id="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php endif; ?><?php bloginfo( 'name' ); ?></<?php echo (is_home() || is_front_page()) ? 'h1' : 'a></p' ?>>
				<p id="site-description"><?php bloginfo( 'description' ); ?></p>
			</<?php echo (is_home() || is_front_page()) ? 'hgroup' : 'div' ?>>

			<nav id="access" role="navigation">
				<p class="section-heading"><?php _e( 'Main menu', 'toolplate' ); ?></p>
				<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'toolplate' ); ?>"><?php _e( 'Skip to content', 'toolplate' ); ?></a></div>

				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #access -->
	</header><!-- #branding -->


	<div id="main">