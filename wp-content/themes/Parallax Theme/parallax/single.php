<?php $g_settings = get_option('g_settings'); ?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<div class="wrapper">
			<section id="main-column" >
				<article id="post-<?php the_ID(); ?>" class="blog-post">
						<header>
							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						</header>
						<section class="post-meta">
							<?php the_time ('j M Y'); ?> 								<?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?>
						</section>
						
							<?php the_content(); ?>
							<footer>
								<p class="post-tags"><?php the_tags('<strong>Tags:</strong> ', ',', '<br />'); ?></p>
							</footer>
					</article>

			<div class="clear"></div>
			<?php comments_template(); ?>

	<?php endwhile; else: ?>

			<article>
				<p>Sorry, no posts matched your criteria.</p>
			</article>
		
	<?php endif; ?></section>

<?php get_sidebar(); ?>
</div><!-- end .wrapper -->

<?php get_footer(); ?>