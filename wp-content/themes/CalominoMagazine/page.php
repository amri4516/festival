<?php get_header(); ?>
<div id="tbg">
</div><!-- END TBG -->
</div><!-- END TOPWRAP -->
<div id="mainwrap">
<div id="contentwraps">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
			<div class="post" id="post-<?php the_ID(); ?>">

				<h2 class="titles"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

				<div class="entry">
					<?php the_content(''); ?>
				</div>
			</div>

            <?php comments_template(); ?>

		<?php endwhile; ?>

	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php include('sidebar-bottom.php'); ?>
<?php get_footer(); ?>
