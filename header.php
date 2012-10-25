<?php
/**
 * @package WordPress
 * @subpackage Aether
 */
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 9]><html class="ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if !IE]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
	<head>
		<title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
		<meta charset="utf-8" />
		<meta name="description" content="UI development articles on best practice, code and architecture." />
		<meta name="keywords" content="HTML, JavaScript, CSS, UI, jQuery, HTML5, CSS3, development, web standards, mobile, web apps." />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
		<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/apple-touch-icon.png" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
		<?php if (is_singular() && get_option('thread_comments')) {wp_enqueue_script('comment-reply');} ?>
		<?php wp_head(); ?>	
	</head>
	<body <?php body_class(); ?>>
		<div id="content" class="content">
			<header id="header" class="header" role="banner">
				<p id="skip-link" class="skip-link accessible"><a href="#main">Skip to content</a></p>
				<hgroup id="branding" class="branding">
					<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
					<h2><?php bloginfo('description'); ?></h2>					
				</hgroup>
				<nav id="navigation" class="navigation" role="navigation">
					<?php wp_nav_menu(array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
				</nav>
				<?php get_search_form(); ?>
			</header>