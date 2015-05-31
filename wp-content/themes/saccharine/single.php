<?php
/**
 * The template for displaying all single posts.
 *
 * @package Saccharine
 */

?>
<?php include(TEMPLATEPATH . '/header-front.php'); ?>
	<div id="wrapper" class="wrapper content-area">
		<header class="header">
			<div class="brand">
				<h1>Stevofolife</h1>	
			</div>
<!--			<h1 class="name">Stevo</h1>-->
			<nav class="nav">
				<ul>
					<li><a href="/portfolio/">About</a></li>
					<li><a href="work">Work</a></li>
					<li><a class="active" href="blog">Writing</a></li>
				</ul>
			</nav>
		</header>
		<main id="main" class="main-container-single" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
