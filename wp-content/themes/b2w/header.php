<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package B2W
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<!--Google Fonts-->
<link href= "https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
  <!--FontAwesome-->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/font-awesome/css/font-awesome.min.css">
  <!-- bootstrap CSS -->
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/css/bootstrap.min.css">
  

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'b2w' ); ?></a>

	<header class="site-header" role="banner">
    <!--Nav bar-->
    <div class="navbar-wrapper">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
          <a class="navbar-brand" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Bootstrap to Wordpress"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
		  </button>
		  
		<?php
		wp_nav_menu(array(
			'theme_location'  =>'menu-1',
			'container'       => 'div',
			'container_class' => 'collapse navbar-collapse',
			'container_id'    => 'navbarSupportedContent',
      'menu_class'      => 'navbar-nav ml-auto',
     
		));
		?>

        </div>
        <!--End of container-->
      </nav>
      <!--End of navbar-->
    </div>
    <!--End of wrapper-->
  </header>

	<div id="content" class="site-content">
