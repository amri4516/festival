<?php $g_settings = get_option('g_settings'); ?>
<?php get_header(); ?>
			
			<div class="wrapper">
			
			<section id="main-column">
					<?php if (have_posts()) : ?>

			<?php $post = $posts[0]; // hack: set $post so that the_date() works ?>
			<?php if (is_category()) { ?>
			<h4 class="page-title">Archive for the &ldquo;<?php single_cat_title(); ?>&rdquo; Category</h4>

			<?php } elseif(is_tag()) { ?>
			<h4 class="page-title">Posts Tagged &ldquo;<?php single_tag_title(); ?>&rdquo;</h4>

			<?php } elseif (is_day()) { ?>
			<h4 class="page-title">Archive for <?php the_time('F jS, Y'); ?></h4>

			<?php } elseif (is_month()) { ?>
			<h4 class="page-title">Archive for <?php the_time('F, Y'); ?></h4>

			<?php } elseif (is_year()) { ?>
			<h4 class="page-title">Archive for <?php the_time('Y'); ?></h4>

			<?php } elseif (is_author()) { ?>
			<h4 class="page-title">Author Archive</h4>

			<?php } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<h4 class="page-title">Blog Archives</h4>

		<?php } ?>
		<div class="clear"></div>

		
		<?php while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" class="blog-post">
						<section class="post-content">
							<header>
								<?php 
								 if ( has_post_thumbnail()) {
								   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
								   echo '<a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
								   the_post_thumbnail('thumbnail');
								   echo '</a>';
								 }
								 ?>
								<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							</header>
							<section class="post-meta">
								<?php the_time ('j M Y'); ?> 				<?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?>
							</section>
							
							<?php the_content(); ?>
							<footer>
								<p class="post-tags"><?php the_tags('<strong>Tags:</strong> ', ',', '<br />'); ?></p>
							</footer>
						</section>
						<div class="clear"></div>
					</article>


			<?php endwhile; ?>

			<nav>
				<p><?php if(function_exists('wp_paginate')) {
   					 wp_paginate();
					} ?>
				</p>
			</nav>

			<?php else : ?>

			<article>
				<h1>Not Found</h1>
				<p>Sorry, but the requested resource was not found on this site.</p>
				<?php get_search_form(); ?>
			</article>

			<?php endif; ?>
		
		</section><!-- end #main-column -->

<?php get_sidebar(); ?>
	<br class="clear" />
	
	<article class="promo-blurb">
		<h3><?php echo $g_settings['actiondesc']; ?></h3>
		<a href="<?php echo $g_settings['actionurl']; ?>" class="btn-promo"><?php echo $g_settings['actiontext']; ?></a>
		<div class="clear"></div>
	</article>
	</div><!-- end .wrapper -->

<?php get_footer(); ?>
