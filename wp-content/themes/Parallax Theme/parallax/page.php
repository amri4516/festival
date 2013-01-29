<?php $g_settings = get_option('g_settings'); ?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		
	
		<div class="wrapper">
			<section id="main-column">
			
				<header>
					<h2><?php the_title(); ?></h2>
				</header>
				
				<article id="post-<?php the_ID(); ?>" class="standard-page">
					<section class="page-content">
						<?php the_content(''); ?>
					</section>
					<footer>
						<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					</footer>
				</article>

	<?php endwhile; else: ?>

				<article>
					<p>Sorry, no posts matched your criteria.</p>
				</article>
	<?php endif; ?>
			</section>

<?php get_sidebar(); ?>

				<br class="clear" />
				
				<article class="promo-blurb">
					<h3><?php echo $g_settings['actiondesc']; ?></h3>
					<a href="<?php echo $g_settings['actionurl']; ?>" class="btn-promo"><?php echo $g_settings['actiontext']; ?></a>
					<div class="clear"></div>
				</article>
				
				
				</div><!-- end .wrapper -->

<?php get_footer(); ?>