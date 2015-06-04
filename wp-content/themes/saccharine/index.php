<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Saccharine
 */

 ?>
<?php include(TEMPLATEPATH . '/header-front.php'); ?>
	<div id="wrapper" class="wrapper content-area">
		<header id="header" class="header">
			<div class="brand">
				<h1>Stevofolife</h1>	
			</div>

			<nav class="nav">
				<ul>
					<li><a href="/portfolio/">About</a></li>
					<li><a href="work">Work</a></li>
					<li><a class="active" href="blog">Journal</a></li>
					<li><a href="">Photos</a></li>
				</ul>
			</nav>
		</header>
		<main id="main" class="main-container-posts" role="main">
			<h1 class="page-title">All Posts</h1>
			<section class="post-list">
				<?php if ( have_posts() ) : ?>
		
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
		
						<?php
							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );
						?>
		
					<?php endwhile; ?>
		
					<?php the_posts_navigation(); ?>
		
				<?php else : ?>
		
					<?php get_template_part( 'content', 'none' ); ?>
		
				<?php endif; ?>
			</section>
		</main><!-- #main -->
		<aside class="right-sidebar">
			<div class="rightbar">
				<div class="secondary-nav">
<!-- 					<p>This is where I keep my thoughts. I truely believe these are the issues that we should all care about.</p>-->
					<h4>Categories</h4> 
					<ul class="categories-list">
						<li><a href="">All - Default</a></li>
						<li><a href="">Book Reviews</a></li>
						<li><a href="">Health</a></li>
						<li><a href="">Fashion</a></li>
						<li><a href="">Exercise</a></li>
						<li><a href="">Design</a></li>
						<li><a href="">Programming</a></li>
					</ul>
				</div>
			</div>
		</aside>
	</div><!-- #primary -->

