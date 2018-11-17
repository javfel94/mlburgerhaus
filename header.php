<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Restaurant_and_Cafe
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head itemscope itemtype="http://schema.org/WebSite">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
<div id="page" class="site">
	
	<header id="masthead" class="site-header <?php if( !is_page_template( 'template-home.php' ) ) echo 'header-inner'; ?>" role="banner" itemscope itemtype="http://schema.org/WPHeader">
		<div class = "container">
		<div class="site-branding" itemscope itemtype="http://schema.org/Organization">
			<img src="https://mlburgerhaus.com/wp-content/uploads/2018/11/ML_burgerhaus_logo.png" width="70" height="70" >
		</div>
			<div id="mobile-header">
			    <a id="responsive-menu-button" href="#sidr-main">
			    	<span class="fa fa-navicon"></span>
			    </a>
			</div> 
		<nav id="site-navigation" class="main-navigation" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
			<div>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</div>
		</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

  	<?php 
  	$restaurant_and_cafe_ed_breadcrumb = get_theme_mod( 'restaurant_and_cafe_ed_breadcrumb' );
   		if( ! ( is_front_page() || is_page_template( 'template-home.php' ) || is_404() ) && (true == $restaurant_and_cafe_ed_breadcrumb)   ) { ?>

			<div class="breadcrumbs">
				<div class="container">
					<?php do_action( 'restaurant_and_cafe_breadcrumbs' ); ?>
				</div>
			</div>
   	
	<?php } 
	
	$ed_section         = restaurant_and_cafe_get_sections();

    if( is_home() || ! $ed_section  || ! ( is_front_page()  || is_page_template( 'template-home.php' ) ) ){
		echo '<div class = "container"><div id="content" class="site-content"><div class = "row">';
	} ?>