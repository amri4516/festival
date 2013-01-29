<div class="widget">
<h3>Featured Posts</h3>
<ul id="featured">
<?php $featured_category1 = get_option('swt_featured_category1'); $featured_number1 = get_option('swt_featured_number1'); ?>
<?php if(($featured_category1 == "Choose a category:") || ($featured_number1 == '')) { ?>
<?php { /* nothing */ } ?>
<?php } else { ?>
<?php $x=0;
//insert your category name
$my_query = new WP_Query('category_name='. $featured_category1 . '&' . 'offset=' . '&' . 'showposts='. $featured_number1);
while ($my_query->have_posts()) : $my_query->the_post(); $do_not_duplicate = $post->ID; $the_post_ids = get_the_ID(); $x++;
        $c++; // increment the counter
         if( $x % 2 != 0) {
      	   $extra_class = 'firstf';
           } else {
           $extra_class = 'secondf';
           }
?>
<li class="<?php echo $extra_class; ?>">
<?php comments_popup_link('0 Comments', '1 Comment', '% Comments', 'fcomm'); ?>
<?php get_the_image( array( 'custom_key' => array( 'fi' ), 'default_size' => 'full', 'image_class' => 'alignleft', 'width' => '105', 'height' => '105' ) ); ?>
</li><!-- FEAT META <?php the_ID(); ?> END -->

<?php endwhile;?>

<?php } ?>
</ul>
</div><!-- FEATURED CATEGORY END -->
