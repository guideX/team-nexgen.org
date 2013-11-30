<!-- #header -->
<div id="header">
	<!-- #header-inside -->
    <div id="header-inside" class="container_12 clearfix">
    	<!-- #header-inside-left -->
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
            
        </div><!-- EOF: #header-inside-left -->
        
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

<!-- #banner -->
<div id="banner">

	<?php print render($page['banner']); ?>
	
    <?php if (theme_get_setting('slideshow_display','corporateclean')): ?>
    
    <?php if ($is_front): ?>
    
    <!-- #slideshow -->
    <div id="slideshow">
    
        <!--slider-item-->
        <div class="slider-item">
            <div class="content container_12">
            	<div class="grid_12">
                
                <!--slider-item content-->
                <div style="float:left; padding:0 30px 0 0;">
                <img class="masked" src="/sites/all/themes/corporateclean/acidmax.gif" style="width: 314px; height: 219px;" />
                </div>
                <h2>Nexgen Acidmax</h2>
                <strong>Scripts</strong><br/>
                <em>Team Nexgen</em><br/>
                <br/>
                Unlike other scripts we use our own DLL's, sounds, & graphics. Packed full of features any user will need to maintain a channel or just simple chat. Unique features such a operator central, direct update, webcam viewer, mp3 play, and soo much more!
                <div style="display:block; padding:30px 0 10px 0;"><a class="more" href="/mircscripts">View Details</a></div>
                <!--EOF:slider-item content-->
                </div>
            </div>
        </div>
        <!--EOF:slider-item-->
        
        <!--slider-item-->
        <div class="slider-item">
            <div class="content container_12">
            	<div class="grid_12">
                
                <!--slider-item content-->
                <div style="float:right; padding:0 0 0 30px;">
                <img class="masked" src="/sites/all/themes/corporateclean/nirc.gif" style="width: 314px; height: 219px;" />
                </div>
                <h2>nexIRC</h2>
                <strong>Scripts</strong><br/>
                <em>Team Nexgen</em><br/>
                <br/>
                nexIRC is a fully featured IRC client which is compatibile with 17 different IRC Daemons, can support multiple query/servers/channels, has full dcc protocol (send/get, chat), and much more.
                <div style="display:block; padding:30px 0 10px 0;"><a class="more" href="/software">Software</a></div>
                <!--EOF:slider-item content-->
				</div>
            </div>
        </div>
        <!--EOF:slider-item-->
        
        <div class="slider-item">
            <div class="content container_12">
            	<div class="grid_12">
                
                <!--slider-item content-->
                <div style="float:left; padding:0 30px 0 0;">
                <img class="masked" src="/sites/all/themes/corporateclean/nexencode.png" style="width: 314px; height: 219px;" />
                </div>
                <h2>nexENCODE Studio</h2>
                <strong>Software</strong><br/>
                <em>Team Nexgen</em><br/>
                <br/>
                NexENCODE will rip cdaudio to mp3's, search all your hard drives for mp3's, rip cdaudio to wav's, convert wav's to mp3's (encode), add 8 different effects to wave audio files, convert mp3's to wav's (decode), and a lot more.
                <div style="display:block; padding:30px 0 10px 0;"><a class="more" href="/software">Software</a></div>
                <!--EOF:slider-item content-->
                </div>
            </div>
        </div>
        <!--EOF:slider-item-->
        <!--slider-item-->
        <!--
        <div class="slider-item">
            <div class="content container_12">
            	<div class="grid_12">
                
                <img class="masked" src="<?php print base_path() . drupal_get_path('theme', 'corporateclean') ;?>/mockup/slide-3.jpg"/>
				</div>
            </div>
        </div>
		-->
        <!--EOF:slider-item-->
    </div>
    <!-- EOF: #slideshow -->
    
    <!-- #slider-controls-wrapper -->
    <div id="slider-controls-wrapper">
        <div id="slider-controls" class="container_12">
            <ul id="slider-navigation">
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ul>
        </div>
    </div>
    <!-- EOF: #slider-controls-wrapper -->
    
    <?php endif; ?>
    
	<?php endif; ?>  

</div><!-- EOF: #banner -->


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
            <?php if ($title): ?>
            <h1><?php print $title ?></h1>
            <?php endif; ?>
            <?php print render($title_suffix); ?>
            
            <?php if ($tabs): ?><?php print render($tabs); ?><?php endif; ?>
            
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
<script>
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
		jQuery("#software_screenshots").css("background-color", "#FFFFFF");
	});
</script>