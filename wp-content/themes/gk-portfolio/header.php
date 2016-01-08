<?php
/**
 *
 * The Header template for our theme
 *
 **/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<!--[if lte IE 8]>
	<div id="ie-toolbar"><div><?php _e('You\'re using an unsupported version of Internet Explorer. Please <a href="http://windows.microsoft.com/en-us/internet-explorer/products/ie/home">upgrade your browser</a> for the best user experience on our site. Thank you.', 'portfolio') ?></div></div>
	<![endif]-->
		<header id="masthead" class="site-header" role="banner">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<?php if(get_theme_mod('portfolio_logo', '') !== '') : ?>
					<img src="<?php echo get_theme_mod('portfolio_logo', ''); ?>" alt="<?php bloginfo( 'name' ); ?>" />
				<?php else: 
					if (is_home()) {
						$title_class = "title-home";
						$desc_class = "desc-home";
					} else {
						$title_class = "";
						$desc_class = "";
					}
					
					echo '<h1 class="site-title ' . $title_class . '">'; 
					bloginfo( 'name' ); ?></h1>
					<?php if(trim(get_bloginfo('description')) != '' || is_customize_preview()) : 
					echo '<h2 class="site-description ' . $desc_class .'">';
					bloginfo('description'); ?></h2>
					<?php endif; ?>
				<?php endif; ?>
			</a>

			<?php 
			if (is_home()) {
				query_posts( 'cat=4' );
				if ( have_posts() ) : while ( have_posts() ) : the_post();

					the_content();

					endwhile;
				endif;
				wp_reset_query();
			} ?>
			
			<?php if(get_theme_mod('portfolio_show_topbar_search', '') != '') : ?>
			<form role="search" method="get" class="search-topbar" action="<?php echo home_url( '/' ); ?>">
				<label>
					<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'portfolio' ); ?></span>
					<input type="search" class="search-topbar-field" placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder', 'portfolio' ); ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'portfolio' ); ?>" />
				</label>
			</form>
			<?php endif; ?>
			
			<?php if(get_theme_mod('portfolio_show_topbar_social', '') != '') : ?>
			<?php wp_nav_menu(array('theme_location' => 'footer', 'menu_class' => 'social-menu-topbar')); ?>
			<?php 
                            endif;
                            if (is_home()) {
                                echo '<div id="triangle-up-animated" class="drawing"></div>';
                            } else {
                                echo '<div id="triangle-up" class="drawing"></div>';
                            }
			?>

			<div id="line1" class="drawing"></div>
			<div id="line2" class="drawing"></div>
			<div id="line3" class="drawing"></div>
			<div id="line4" class="drawing"></div>

		</header><!-- #masthead -->
				
		<div id="main" class="site-main">
			<div id="page" class="hfeed site">
		
				
