<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sheger
 */

?>

	</div><!-- #content -->
	</div>
	<footer id="colophon" class="site-footer row ">
		
		<div class="site-info col-md-12">
			<div class="socialmedia">	
					<a class="media fa fa-facebook" href=""></a>
					<a class="media fa fa-twitter" href=""></a>
					<a class="media fa fa-instagram" href=""></a>
				</div>

				<a href="<?php echo esc_url( __( '#', 'sheger' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly Powered by %s', 'sheger' ), 'sheger' );
				?>
			</a>
			
				
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>


</body>
</html>
