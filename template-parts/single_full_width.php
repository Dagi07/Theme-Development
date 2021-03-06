<?php
/**
 * Template Name: Full Width Template
 *Template Post Type: post
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sheger
 */

get_header();
?>
    <div class="container">
	<div id="primary" class="content-area justify-content-md-center col-md-12">
		<main id="main" class="site-main">

		<?php
while (have_posts()):
    the_post();

    get_template_part('template-parts/content', get_post_type());

    the_post_navigation();

    ?>
    <div class="row justify-content-md-left">
    
    <?php

    // If comments are open or we have at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()):
        comments_template();
    endif;

endwhile; // End of the loop.
?>
    </div>
		</main><!-- #main -->
	</div><!-- #primary -->

    </div>

<?php
get_footer();
