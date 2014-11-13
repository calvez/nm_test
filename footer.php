<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package brosco
 */
?>

	</div><!-- #content -->


	</div>



	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://mma.hu/', 'brosco' ) ); ?>"><?php printf( __( 'Magyar Művészeti Akadémia %s', 'brosco' ), '' ); ?></a>
			<span class="sep"> | </span>
			</a><a href="http://nemzetmuvesze.hu">Nemzet Művésze</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

