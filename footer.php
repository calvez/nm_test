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
</div> <!--	row end -->
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://mma.hu', 'brosco' ) ); ?>"><?php printf( __( ' %s', 'brosco' ), 'Magyar Művészeti Akadémia' ); ?></a>
			<span class="sep"> | </span>
			<a href="http://www.nemzetmuvesze.hu.com">Nemzet Művésze</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

