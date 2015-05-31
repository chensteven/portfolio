<?php
/**
 * @package Saccharine
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("post-article content-single"); ?>>

	<header class="entry-header">

		<div class="entry-meta">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php saccharine_posted_on(); ?>
			<div class="post-category"><?php the_category(' '); ?></div>
		</div><!-- .entry-meta -->
		<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail();
		}?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'saccharine' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php saccharine_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
