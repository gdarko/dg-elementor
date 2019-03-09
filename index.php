<?php
/**
 * The index.php file
 */

get_header();

?>
	<main id="main" class="site-main" role="main">

		<header class="page-header">
			<?php
			if ( is_sticky() && is_home() && ! is_paged() ) {
				printf( '<span class="sticky-post">%s</span>', _x( 'Featured', 'post', 'dg-elementor' ) );
			}
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' );
			endif;
			?>
		</header>

		<div class="page-content">
			<?php
			while ( have_posts() ) : the_post();
				the_content();
			endwhile;
			?>
		</div>

		<div class="entry-links"><?php wp_link_pages(); ?></div>

		<?php global $wp_query;
		if ( $wp_query->max_num_pages > 1 ) : ?>
			<nav id="nav-below" class="navigation" role="navigation">
				<?php /* Translators: HTML arrow */ ?>
				<div class="nav-previous"><?php next_posts_link( sprintf( __( '%s older', 'dg-elementor' ), '<span class="meta-nav">&larr;</span>' ) ); ?></div>
				<?php /* Translators: HTML arrow */ ?>
				<div class="nav-next"><?php previous_posts_link( sprintf( __( 'newer %s', 'dg-elementor' ), '<span class="meta-nav">&rarr;</span>' ) ); ?></div>
			</nav>
		<?php endif; ?>
	</main>

<?php get_footer(); ?>