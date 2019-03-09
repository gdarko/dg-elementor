<?php get_header(); ?>

<main id="main" class="site-main" role="main">

    <div class="site-container">

        <header class="page-header">
		    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header>

        <div class="page-content">
		    <?php
		    while ( have_posts() ) : the_post();
			    the_content();
		    endwhile;
		    ?>
        </div>

    </div>

</main>

<?php get_footer(); ?>