<?php
/**
 * @package brosco
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-2 col-md-3 col-sm-4 col-xs-12'); ?>>
   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   </a>
	<div class="entry-content">
			<header class="entry-header">

		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
		<?php if ( has_post_thumbnail() ) : ?>
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	<?php the_post_thumbnail('category-thumb'); ?>
	</a>
<?php endif; ?>
		<?php the_excerpt( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'brosco' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'brosco' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'brosco' ) );
				if ( $categories_list ) :
			?>


		<?php	if( get_field('show_post_category') )
{ ?>

		<?php	} ?>

			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'brosco' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'Tags: %1$s', 'brosco' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>




	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
