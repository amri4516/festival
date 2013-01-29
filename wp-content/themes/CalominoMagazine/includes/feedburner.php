<div class="widget">
<h3 id="feedb">Subscribe To Our Blog</h3>
<p id="signup">Get the latest news from us, on your email!</p>
<form id="subscribet" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=<?php echo get_option('swt_femail'); ?>', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
        <div id="swrap">
        <input type="text" value="Enter your email..." id="subbox" onfocus="if (this.value == 'Enter your email...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Enter your email...';}" name="email"/>
        <input type="hidden" value="<?php echo get_option('swt_femail'); ?>" name="uri"/>
        <input type="hidden" name="loc" value="en_US"/>
        <input id="subm" type="image" src="<?php bloginfo('template_url'); ?>/images/submit.png" style="border:0; vertical-align: top;" />
        </div>
</form>
    <div class="custom_images">
	<a class="addthis_button_delicious"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/delicious.png" width="32" height="32" alt="Delicious" /></a>
	<a class="addthis_button_digg"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/digg.png" width="32" height="32" alt="Digg" /></a>
	<a class="addthis_button_facebook"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/facebook.png" width="32" height="32" alt="Facebook" /></a>
	<a class="addthis_button_favorites"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/favorites.png" width="32" height="32" alt="Favorites" /></a>
	<a class="addthis_button_more"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/more.png" width="32" height="32" alt="More" /></a>
	<a class="addthis_button_stumbleupon"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/stumbleupon.png" width="32" height="32" alt="Stumbleupon" /></a>
	<a class="addthis_button_twitter"><img src="<?php bloginfo('template_directory'); ?>/images/socialicons/twitter.png" width="32" height="32" alt="Twitter" /></a>
    </div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js?pub=xa-4a65e1d93cd75e94"></script>
</div>