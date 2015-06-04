<?php
/**
 * @package Saccharine
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("post-article content"); ?>>	
	<?php if ( has_post_thumbnail() ) {
//		the_post_thumbnail();
	}?>
	<header class="entry-header">
 		<?php saccharine_posted_on(); ?>
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		<div class="post-category"><?php the_category(' '); ?></div>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'saccharine' ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'saccharine' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<hr>
<footer class="entry-footer">
		<?php saccharine_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->