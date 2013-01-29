<?php
/*
Template Name: Homepage (Slider)
*/
?>
<?php $g_settings = get_option('g_settings'); ?>
<?php get_header(); ?>
			
			<article class="main-banner">
				<div class="wrapper"><div class="slider-border"></div> 
					<div id="slider"> 
						
						<?php if($g_settings['feature1'] != '') : ?><img src="<?php echo $g_settings['feature1']; ?>" style="width:960px; height:450px;" rel="<?php echo $g_settings['feature1']; ?>" alt="" />
						<?php endif; ?>
						
						<?php if($g_settings['feature2'] != '') : ?><img src="<?php echo $g_settings['feature2']; ?>" style="width:960px; height:450px;" rel="<?php echo $g_settings['feature2']; ?>" alt="" /><?php endif; ?>
						
						<?php if($g_settings['feature3'] != '') : ?><img src="<?php echo $g_settings['feature3']; ?>" style="width:960px; height:450px;" rel="<?php echo $g_settings['feature3']; ?>" alt="" /><?php endif; ?>
						
						<?php if($g_settings['feature4'] != '') : ?><img src="<?php echo $g_settings['feature4']; ?>" style="width:960px; height:450px;" rel="<?php echo $g_settings['feature4']; ?>" alt="" /><?php endif; ?>
						
						<?php if($g_settings['feature5'] != '') : ?><img src="<?php echo $g_settings['feature5']; ?>" style="width:960px; height:450px;" rel="<?php echo $g_settings['feature5']; ?>" alt="" /><?php endif; ?>
						
						<?php if($g_settings['feature6'] != '') : ?><img src="<?php echo $g_settings['feature6']; ?>" style="width:960px; height:450px;" rel="<?php echo $g_settings['feature6']; ?>" alt="" /><?php endif; ?>
						
					</div> 
				</div><!-- end .wrapper -->
			</article>
			
			<div class="wrapper">
				
			<article class="promo-blurb">
				<h3><?php echo $g_settings['actiondesc']; ?></h3>
				<a href="<?php echo $g_settings['actionurl']; ?>" class="btn-promo"><?php echo $g_settings['actiontext']; ?></a>
				<div class="clear"></div>
			</article>
			
				<section id="full-column">					
					<?php
					$args = array( 'numberposts' => 3, 'order'=> 'ASC', 'orderby' => 'title' );
					$postslist = get_posts( $args );
					foreach ($postslist as $post) :  setup_postdata($post); ?> 
					
					<article id="post-<?php the_ID(); ?>" class="blog-post">
						<section class="post-content">
							<header>
								<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							</header>
							<section class="post-meta">
								<?php the_time ('j M Y'); ?> 								<?php comments_popup_link('0 Comments', '1 Comment', '% Comments'); ?>
							</section>
							<?php the_excerpt(); ?>
							<footer>
								<p class="post-tags"><?php the_tags('<strong>Tags:</strong> ', ',', '<br />'); ?></p>
							</footer>
						</section>
						<div class="clear"></div>
					</article>
					<?php endforeach; ?>				
					
					
					
					
				</section><!-- end #main-column -->
			</div><!-- end .wrapper -->

<?php get_footer(); ?>