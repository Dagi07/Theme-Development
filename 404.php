<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package sheger
 */

get_header();
?>

	<div id="primary" class="content-area col-md-8 container">
		<main id="main" class="site-main">
		<div class="pageNotFound">
		<i class="fa fa-exclamation-triangle" style = "font-size: 200px; margin: 0 auto;"></i>
		<p>Oops! That page can’t be found.</p>
		<a class="btn btn-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
		</div>	
		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php
get_footer();
