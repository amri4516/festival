<div id="sidebar2">
<div id="footer1">
<?php if (get_option('swt_feedburner') == 'Hide') { ?>
<?php { echo ''; } ?>
<?php } else { include(TEMPLATEPATH . '/includes/feedburner.php'); } ?>

<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>

<?php endif; ?>
</div>

<div id="footer2">
<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(3) ) : else : ?>


    <div class="widget">
    <h3>Recent Posts</h3>
    <ul>
    <?php wp_get_archives('title_li=&type=postbypost&limit=5'); ?>
    </ul>
    </div>


<?php endif; ?>
</div>

<div id="footer3">

<?php if (get_option('swt_fcats') == 'Hide') { ?>
<?php { echo ''; } ?>
<?php } else { include(TEMPLATEPATH . '/includes/featured-cats.php'); } ?>

<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(4) ) : else : ?>

<?php endif; ?>
</div>
</div>
