<?php $g_settings = get_option('g_settings'); ?>
<?php
/*
Template Name: Portfolio
*/
?>
<?php get_header(); ?>
			
			<div class="wrapper">
											
				<section id="full-column" >
				
				<header>
					<h2><?php the_title(); ?></h2>
				</header>
								
				<div class="wrapper" id="contentWrapper">
					<div class="boundingBox" id="content">
						
						<ul id="portfolio-filter" onchange="window.open(this.options[this.selectedIndex].value,'_top')">
							<li><a href="#all">All</a></li>
							<?php $terms = get_terms("portfolio-categories");
							 $count = count($terms);
							 if ( $count > 0 ){
							     foreach ( $terms as $term ) {
							       echo "<li><a href='#$term->name'>" . $term->name . "</a></li>";
							        
							     }
							 }?>
						</ul>
						
						<div class="clear"></div>
												
						
						<ul id="portfolio-list">
	
					<?php $loop = new WP_Query( array( 'post_type' => 'portfolio', 'posts_per_page' => 100 ) ); ?>
					<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
												
						
					<li id="portfolio-<?php the_ID(); ?>" class="<?php $terms = get_the_terms( $post->ID , 'portfolio-categories' ); foreach( $terms as $term ) { print $term->name . ' '; unset($term); } ?>">

						<section class="portfolio-image">
								<a href="<?php
							//Get the Thumbnail URL
							$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', true, '' );
							echo $src[0];
							?>"  rel="prettyPhoto" class="viewLink">
							<?php the_post_thumbnail('portfolio-image', array( 'alt' => get_the_title(), 'class' =>"cover", 'title' => get_the_title() . "" . get_the_excerpt() . "")); ?></a>
						</section>
						
					</li>
					<?php endwhile; ?>	
					</ul>

				<br class="clear" />
				</div></div>
				
				<!-- end #full-column --></section>
				
				<br class="clear"/>
				
				<article class="promo-blurb">
					<h3><?php echo $g_settings['actiondesc']; ?></h3>
					<a href="<?php echo $g_settings['actionurl']; ?>" class="btn-promo"><?php echo $g_settings['actiontext']; ?></a>
					<div class="clear"></div>
				</article>
				
			</div><!-- end .wrapper -->
			

<?php get_footer(); ?>