<?php
/*
 * Header Section of Donaldson
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header container-fluid" role="banner">
		<div class="row top">
			<div class="logo col-xs-6 col-sm-6 col-md-4 col-lg-4">
				<img class="logo1" src="<?php bloginfo("stylesheet_directory"); ?>/img/logo.png" alt="">
				<img class="logo2" src="<?php bloginfo("stylesheet_directory"); ?>/img/mini-logo.png" alt="">
			</div>
			<div class="text hidden-xs hidden-sm col-md-5 col-lg-5">
				<div class="line1">Дистрибьютор Donaldson в Санкт-Петербурге</div>
				<div class="line2">Поставка оборудования и сервисное обслуживание</div>
			</div>
			<div class="contact col-xs-6 col-sm-6 col-md-3 col-lg-3">
				<div class="city">г. Санкт-Петербург</div>
				<div class="phone">
					<span class="phone-code">+7 (812) </span>
					<span class="phone-number">646-73-83</span>
				</div>
				<div class="button">
					<a href="#">Оформить заявку</a>
				</div>
			</div>			
		</div>
		<nav id="site-navigation" class="themonic-nav" role="navigation">
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'iconic-one' ); ?>"><?php _e( 'Skip to content', 'iconic-one' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'menu-top', 'menu_class' => 'nav-menu', 'container' => 'ul' ) ); ?>
		</nav><!-- #site-navigation -->
		<div class="clear"></div>	
	</header>