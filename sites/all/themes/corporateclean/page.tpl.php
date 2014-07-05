<?php
	$front_page = "false";
	if(drupal_is_front_page()) { 
		$front_page = "true";
	}
?>
<div id="header">
    <div id="header-inside" class="container_12 clearfix">
        <div id="header-inside-left" class="grid_8">
            <?php if ($logo): ?>
				<a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
            <?php endif; ?>
            <?php if ($site_name || $site_slogan): ?>
				<div class="clearfix">
					<!--
					<?php if ($site_name): ?>
						<span id="site-name"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></span>
					<?php endif; ?>
					<?php if ($site_slogan): ?>
						<span id="slogan"><?php print $site_slogan; ?></span>
					<?php endif; ?>
					-->
				</div>
            <?php endif; ?>
        </div>
        
        <!-- #header-inside-right -->    
        <div id="header-inside-right" class="grid_4">

			<?php print render($page['search_area']); ?>

        </div><!-- EOF: #header-inside-right -->
    
    </div><!-- EOF: #header-inside -->

</div><!-- EOF: #header -->

<!-- #header-menu -->
<div id="header-menu">
	<!-- #header-menu-inside -->
    <div id="header-menu-inside" class="container_12 clearfix">
    
    	<div class="grid_12">
            <div id="navigation" class="clearfix">
            <?php if ($page['navigation']) :?>
            <?php print drupal_render($page['navigation']); ?>
            <?php else :
            if (module_exists('i18n_menu')) {
            $main_menu_tree = i18n_menu_translated_tree(variable_get('menu_main_links_source', 'main-menu'));
            } else {
            $main_menu_tree = menu_tree(variable_get('menu_main_links_source', 'main-menu')); 
            }
            print drupal_render($main_menu_tree);
            endif; ?>
            </div>
        </div>
        
    </div><!-- EOF: #header-menu-inside -->

</div><!-- EOF: #header-menu -->
<!-- #content -->
<div id="content">
	<!-- #content-inside -->
    <div id="content-inside" class="container_12 clearfix">
        <?php if ($page['sidebar_first']) :?>
        <!-- #sidebar-first -->
        <div id="sidebar-first" class="grid_4">
        	<?php print render($page['sidebar_first']); ?>
        </div><!-- EOF: #sidebar-first -->
        <?php endif; ?>
        
        <?php if ($page['sidebar_first'] && $page['sidebar_second']) { ?>
        <div class="grid_4">
        <?php } elseif ($page['sidebar_first'] || $page['sidebar_second']) { ?>
        <div id="main" class="grid_8">
		<?php } else { ?>
        <div id="main" class="grid_12">    
        <?php } ?>
            <?php if (theme_get_setting('breadcrumb_display','corporateclean')): print $breadcrumb; endif; ?>
            <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
       
            <?php if ($messages): ?>
            <div id="console" class="clearfix">
            <?php print $messages; ?>
            </div>
            <?php endif; ?>
     
            <?php if ($page['help']): ?>
            <div id="help">
            <?php print render($page['help']); ?>
            </div>
            <?php endif; ?>
            
            <?php if ($action_links): ?>
            <ul class="action-links">
            <?php print render($action_links); ?>
            </ul>
            <?php endif; ?>
            
			<?php print render($title_prefix); ?>
			<?php if (!$front_page) { ?>
			<?php if ($title): ?>
			<h1><?php print $title ?></h1>
            <?php endif; ?>
			<?php } ?>
            <?php print render($title_suffix); ?>
            
            <?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>
            
			<?php if ($front_page): ?>
				<div>
					<div class="grid_12 contextual-links-region">
						<?php print render($page['banner']); ?>
						<?php if (theme_get_setting('slideshow_display','corporateclean')): ?>
							<div class="slider-wrapper theme-default">
								<div id="slider" class="nivoSlider">
									<a href='/content/nexirc'><img src='/sites/all/themes/corporateclean/images/nexircnew.jpg' data-thumb='/sites/all/themes/corporateclean/images/nexirc.jpg' alt='' title='nexIRC v3.28 is now available' /></a>
									<a href='/content/nexirc-229'><img src='/sites/all/themes/corporateclean/images/nirc229slider.jpg' data-thumb='/sites/all/themes/corporateclean/images/nirc229slider.jpg' alt='' title='nexIRC v2.29' /></a>
									<a href='/content/nexgen-acidmax'><img src='/sites/all/themes/corporateclean/images/acid.jpg' data-thumb='/sites/all/themes/corporateclean/images/acid.jpg' alt='' title='Nexgen Acidmax' /></a>
								</div>
							</div>
						<?php endif; ?>  
					</div>
				</div>
			<?php endif; ?>

            <?php print render($page['content']); ?>
			<?php print render($page['facebook_comments_area']); ?>            
            <?php print $feed_icons; ?>
            
        </div><!-- EOF: #main -->
        
        <?php if ($page['sidebar_second']) :?>
        <!-- #sidebar-second -->
        <div id="sidebar-second" class="grid_4">
        	<?php print render($page['sidebar_second']); ?>
        </div><!-- EOF: #sidebar-second -->
        <?php endif; ?>  

    </div><!-- EOF: #content-inside -->

</div><!-- EOF: #content -->

<!-- #footer -->    
<div id="footer">
	<!-- #footer-inside -->
    <div id="footer-inside" class="container_12 clearfix">
    
        <div class="footer-area grid_4">
        <?php print render($page['footer_first']); ?>
        </div><!-- EOF: .footer-area -->
        
        <div class="footer-area grid_4">
        <?php print render($page['footer_second']); ?>
        </div><!-- EOF: .footer-area -->
        
        <div class="footer-area grid_4">
        <?php print render($page['footer_third']); ?>
        </div><!-- EOF: .footer-area -->
       
    </div><!-- EOF: #footer-inside -->

</div><!-- EOF: #footer -->

<!-- #footer-bottom -->    
<div id="footer-bottom">

	<!-- #footer-bottom-inside --> 
    <div id="footer-bottom-inside" class="container_12 clearfix">
    	<!-- #footer-bottom-left --> 
    	<div id="footer-bottom-left" class="grid_8">
        
            <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('class' => array('secondary-menu', 'links', 'clearfix')))); ?>
            
            <?php print render($page['footer']); ?>
            
        </div>
    	<!-- #footer-bottom-right --> 
        <div id="footer-bottom-right" class="grid_4">
        
        	<?php print render($page['footer_bottom_right']); ?>
        
        </div><!-- EOF: #footer-bottom-right -->
       
    </div><!-- EOF: #footer-bottom-inside -->
    
    <!-- #credits -->   
    <div id="credits" class="container_12 clearfix">
        <div class="grid_12">
        <p><a href="http://www.team-nexgen.org/">Team Nexgen</a> | <a href="http://www.skywirenews.com/">SkyWireNews</a></p>
        </div>
    </div>
    <!-- EOF: #credits -->

</div><!-- EOF: #footer -->
<script><?php
	if($front_page == "true") { ?>
		$(window).load(function() {
			$('#slider').nivoSlider();
		});<?php
	} ?>
	jQuery(document).ready(function() {
		var n = 0;
		jQuery(".view-software .product").each(function() {
		  n++;
		  if(n == 1) {
			jQuery(this).addClass("alpha");
		  }
		  if(n == 3) {
		    jQuery(this).addClass("omega");
			n = 0;
		  }
		});
		jQuery(".software_logo img").addClass("masked");
		jQuery(".view-software .product img").addClass("masked");
		jQuery(".view-id-mirc_scripts .product img").addClass("masked");
		jQuery(".addbutton a").addClass("more");
		jQuery(".addbutton a:contains('View')" ).css( "margin-left", "10px" );
	});
</script>
