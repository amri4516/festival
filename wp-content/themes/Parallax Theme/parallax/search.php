<?php $g_settings = get_option('g_settings'); ?>
<?php get_header(); ?>


		<?php if (have_posts()) : ?>
		
		<div class="wrapper">
			<section id="main-column">
				
				<article class="results-list standard-page">
					<section class="page-content">
					
					<h2>Search Results for &ldquo;<?php the_search_query(); ?>&rdquo;</h2>
					<ol>
	
						<?php while (have_posts()) : the_post(); ?>
	
						<li>
							<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>						<?php the_excerpt(); ?>
						</li>
	
						<?php endwhile; ?>
	
					</ol>
					</section>
			</article>
			<nav>
				<p><?php posts_nav_link('&nbsp;&bull;&nbsp;'); ?></p>
			</nav>

			<?php else : ?>

			<article>
				<div class="wrapper">
					<section id="main-column">
						
						<article class="results-list standard-page">
							<section class="page-content">
								<h2>Not Found</h2>
								<p>Sorry, but the requested resource was not found on this site.</p>
							</section>
						</article>

			<?php endif; ?>

		</section>

<?php get_sidebar(); ?>
</article></div><!-- end .wrapper -->

<?php get_footer(); ?>