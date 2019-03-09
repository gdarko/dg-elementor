<?php
/**
 * The template for displaying 404 pages (not found).
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header();

?>
<main id="main" class="site-main" role="main">

    <div class="site-container">

        <header class="page-header">
            <h1 class="entry-title"><?php esc_html_e( 'The page can&rsquo;t be found.', 'dg-elementor' ); ?></h1>
        </header>

        <div class="page-content">
            <p><?php esc_html_e( 'It looks like nothing was found at this location.', 'dg-elementor' ); ?></p>
        </div>

    </div>

</main>

<?php get_footer(); ?>
