<?php get_header(); ?>

<div id="primary" class="content-area pl-5 col-md-8 pr-5">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<div class="col-md-4 col-sm-10 text-sm-center pl-5 pr-5">
	<?php get_sidebar();  ?>
</div>



<?php
get_footer();
