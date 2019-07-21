<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
			</div>
		</div>
	</div><!-- #content -->

	<?php do_action('sydney_before_footer'); ?>

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

    <a class="go-top"><i class="fa fa-angle-up"></i></a>
		
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<a href="<?php echo esc_url( __( 'http://www.the-builders.org/', 'Bertin Mounok' ) ); ?>"><?php printf( __( 'Copyright © '.date('Y').'','Bertin Mounok' ), 'Developpeur D\'Applications' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'All right reserved.', 'Developpeur D\'Applications' ), 'Bertin Mounok', '<a href="http://www.the-builders.org" rel="designer">Team</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<?php do_action('sydney_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
