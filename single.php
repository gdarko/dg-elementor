<?php
/**
 * The template for displaying singular post-types: posts, pages and user-defined custom post types.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header();
?>
<?php while ( have_posts() ) : the_post(); ?>

<main id="main" <?php post_class( 'site-main' ); ?> role="main">

    <div class="site-container">

        <header class="page-header">
		    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header>

        <div class="page-content">
		    <?php the_content(); ?>
            <div class="post-tags">
			    <?php the_tags( '<span class="tag-links">' . __( 'Tagged ', 'dg-elementor' ), null, '</span>' ); ?>
            </div>
        </div>

	    <?php comments_template(); ?>

    </div>

</main>

<?php endwhile; ?>

<?php get_footer(); ?>
