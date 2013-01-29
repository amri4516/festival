<?php
/**
*
* Graphite, a Wordpress theme from MediaLoot.com
* 
*
**/

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>

		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">
		<link rel="alternate" type="text/xml" title="<?php bloginfo('name'); ?> RSS 0.92 Feed" href="<?php bloginfo('rss_url'); ?>">
		<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS 2.0 Feed" href="<?php bloginfo('rss2_url'); ?>">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<link href='http://fonts.googleapis.com/css?family=Anton' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Varela&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
			

		<?php wp_enqueue_script('jquery'); ?>
		<?php wp_head(); ?>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
		
		<script src="<?php bloginfo('template_directory'); ?>/javascript/h5.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/javascript/jquery.prettyPhoto.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/javascript/filterable.pack.js"></script>
		<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/javascript/jquery.nivo.slider.pack.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/javascript/nivo-slider.css" media="screen">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/javascript/prettyPhoto.css" media="screen">
		<script type="text/javascript">
		    $(window).load(function() {
		        $('#slider').nivoSlider({
		        	directionNavHide:false,
		            controlNavThumbs:true,
		            controlNavThumbsFromRel:true
		        });
		    });
		 </script>
		 <script type="text/javascript" charset="utf-8">
		      $(document).ready(function(){
		        $("a[rel^='prettyPhoto']").prettyPhoto();
		      });
		  </script>
		    
		
		
		
		
<?php echo $g_settings['headercode']; ?>

	</head>
	<body <?php body_class(); ?>>

		<header>
			<div class="wrapper">
				<h1><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1>
				<nav>
					<ul>
						<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
					</ul>
				</nav>
			</div><!-- end .wrapper -->
		</header>
		