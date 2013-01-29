<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" >
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php if (is_home()) {
	echo bloginfo('name');
} elseif (is_404()) {
	echo '404 Not Found';
} elseif (is_category()) {
	echo 'Category:'; wp_title('');
} elseif (is_search()) {
	echo 'Search Results';
} elseif ( is_day() || is_month() || is_year() ) {
	echo 'Archives:'; wp_title('');
} else {
	echo bloginfo('name'); echo wp_title('');
}
?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.4.2.min.js"></script>
<script language="JavaScript" type="text/javascript">
/*<![CDATA[*/
  $j=jQuery.noConflict();
    $j(document).ready(function() {
	$j(".date").hide();
    	$j(".meta").hover(function() {
		$j(this).find(".date").stop(true, true).fadeIn('fast');
	} , function() {
		$j(this).find(".date").stop(true, true).fadeOut('fast');
	});
    $j('.clearp:last').addClass('lastc');
  });
/*]]>*/
</script>
<?php if(is_single() || is_page() || get_option('swt_slider')=="Hide"){ ?>
<style type="text/css">
/*<![CDATA[*/
#topwrap {  background: #fff url(<?php bloginfo('template_directory'); ?>/images/bg1.gif) repeat-x scroll top; height: 128px;}
#tbg {
  height: 128px;
}
/*]]>*/
</style>
<?php } else { ?>
<style type="text/css">
/*<![CDATA[*/
#topwrap {  background: #fff url(<?php bloginfo('template_directory'); ?>/images/bg.gif) repeat-x scroll top; }
/*]]>*/
</style>
<?php } ?>
</head>
<body>
<div id="topwrap">
<div id="top"><!-- PAGE MENU, OR PRIMARY CUSTOM MENU -->
<div id="header">
 <div id="blogtitle">
       <h1><a href="<?php echo get_option('home'); ?>/"><img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo('sitename'); ?>" /></a></h1>
 </div>

    <?php if ( has_nav_menu( 'primary-menu' ) ) {
          wp_nav_menu( array( 'menu_class' => 'sf-menu', 'theme_location' => 'primary-menu' ) );
	} else {
	?>
        <ul class="sf-menu">
            <?php $ex = get_option('swt_pages');  ?>
        	<li class="page_item <?php if(is_home()): ?>current-menu-item<?php endif ?>"><a href="<?php echo get_option('home'); ?>/">Home</a></li>
        	<?php wp_list_pages("sort_column=menu_order&depth=1&exclude=$ex;&title_li=");?>
    	</ul>
    <?php } ?>
</div><!-- END HEADER -->
</div><!-- END TOP -->