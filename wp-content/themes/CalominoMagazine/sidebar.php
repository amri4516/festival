<div id="sidebar">

<?php if (get_option('swt_banners') == 'Hide') { ?>
<?php { echo ''; } ?>
<?php } else { include(TEMPLATEPATH . '/includes/banners.php'); } ?>

    <?php if (!function_exists('dynamic_sidebar')
	|| !dynamic_sidebar()) : ?>

    <div class="side-widget">
    <h3>Pages</h3>
    <ul><?php wp_list_pages('title_li=' ); ?></ul>
    </div>

    <div class="side-widget">
    <h3>Categories</h3>
    <ul>
    <?php wp_list_categories('title_li=' ); ?>
    </ul>
    </div>

    <div class="side-widget">
    <h3>Recent Posts</h3>
    <ul>
    <?php wp_get_archives('title_li=&type=postbypost&limit=5'); ?>
    </ul>
    </div>

    <?php endif; ?>
</div>