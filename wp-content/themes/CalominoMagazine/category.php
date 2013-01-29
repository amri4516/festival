<?php get_header(); ?>
<div id="tbg">
<?php if (get_option('swt_slider') == 'Hide') { ?>
<?php { echo ''; } ?>
<?php } else { include(TEMPLATEPATH . '/includes/slide.php'); } ?>
</div><!-- END TBG -->
</div><!-- END TOPWRAP -->
<div id="mainwrap">
<div id="contentwrap">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post();
        $c++; // increment the counter
         if( $c % 4 != 0) {
      	   $extra_class = 'leftpost';
           } else {
           $extra_class = 'rightpost';
           }
        ?>
			<div <?php post_class($extra_class) ?> id="post-<?php the_ID(); ?>">

                <?php if ( has_post_thumbnail() ) { ?>

                <div class="meta">

                <?php comments_popup_link('0 Comments', '1 Comment', '% Comments', 'comm'); ?>


                 <div class="date"><?php the_time('F d, Y'); ?></div>

                <?php if ( function_exists( 'get_the_image' ) ) {
                get_the_image( array( 'custom_key' => array( 'post_thumbnail' ), 'default_size' => 'full', 'image_class' => 'aligncenter', 'width' => '208', 'height' => '175' ) ); } ?>
                </div>

                <?php } ?>

				<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

				<div class="entry">
					<?php //the_content(''); ?>
                    <?php truncate_post(120, true); ?>
				</div>
			</div>

            <?php if(++$counter % 4 == 0) : ?>
           <div class="clearp"></div>
          <?php endif; ?>

		<?php endwhile; ?>

		<div class="navigation">
        <?php
            include('includes/wp-pagenavi.php');
            if(function_exists('wp_pagenavi')) { wp_pagenavi(); }
        ?>
		</div>

	<?php endif; ?>
</div>
<?php include('sidebar-bottom.php'); ?>
<?php get_footer(); ?>
