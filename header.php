<?php
/**
 * The template for displaying the header.
 *
 * This is the template that displays all of the <head> section, opens the <body> tag and adds the site's header
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" id="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0"/>
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<header class="header">

    <div class="site-container">

        <h2 class="logo"><?php the_custom_logo(); ?></h2>

        <a id="menu-icon">&#9776; Menu</a>

        <nav class="navbar">
	        <?php wp_nav_menu(array('theme_location' => 'primary-nav', 'items_wrap' => '<ul class="menu">%3$s</ul>', 'container' => '')); ?>
        </nav>

    </div>
</header>





