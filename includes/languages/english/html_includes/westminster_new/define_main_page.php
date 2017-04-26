<div id="home-top">

<div id="top-banner">
 <?php
if (SHOW_BANNERS_GROUP_SETHOMETOP != '' && $banner = zen_banner_exists('dynamic', SHOW_BANNERS_GROUP_SETHOMETOP)) 
    {
    if ($banner->RecordCount() > 0) 
        {
           echo zen_display_banner('static', $banner);
        }
    }?> 

</div>




<?php
if (WES_SLIDER_STATUS == 'true') {
?>

          <?php require($template->get_template_dir('tpl_home_slider.php',DIR_WS_TEMPLATE, $current_page_base,'common')
                        . '/tpl_home_slider.php');?>


<?php } ?>


</div>

<br class="clearBoth" />

<div id="home-text">
You can add any custom content here by editing: /languages/english/html_includes/westminster_new/define_main_page.php.  Edit this content via Admin->Tools->Define Pages Editor, and select define_main_page.php from the pulldown.
<br /><br />

<script type="text/javascript">
   $(document).ready(function() {
       $('.hover').bind('touchstart touchend', function(e) {
	   e.preventDefault();
	   $(this).toggleClass('hover_effect');
	 });
     });
</script>


<div id="home-images">
 
              <div class="view view-tenth">
<div class="hover">
 <?php
if (SHOW_BANNERS_GROUP_SETHOMEAD1 != '' && $banner = zen_banner_exists('dynamic', SHOW_BANNERS_GROUP_SETHOMEAD1)) 
    {
    if ($banner->RecordCount() > 0) 
        {
           echo zen_display_banner('static', $banner) . '</div><div class="mask"><h2>' . $banner->fields['banners_title'] . '</h2><a href="' . zen_href_link(FILENAME_REDIRECT, 'action=banner&goto=' . $banner->fields['banners_id']) . '" class="info">' . SHOP_NOW . '</a>';
        }
    }?> 
                    </div>
                </div>

                <div class="view view-tenth hm-right">
<div class="hover">
 <?php
if (SHOW_BANNERS_GROUP_SETHOMEAD2 != '' && $banner = zen_banner_exists('dynamic', SHOW_BANNERS_GROUP_SETHOMEAD2)) 
    {
    if ($banner->RecordCount() > 0) 
        {
           echo zen_display_banner('static', $banner) . '</div><div class="mask"><h2>' . $banner->fields['banners_title'] . '</h2><a href="' . zen_href_link(FILENAME_REDIRECT, 'action=banner&goto=' . $banner->fields['banners_id']) . '" class="info">' . SHOP_NOW . '</a>';
        }
    }?> 
                    </div>
                </div>
                <div class="view view-tenth hm-right">
<div class="hover">
 <?php
if (SHOW_BANNERS_GROUP_SETHOMEAD3 != '' && $banner = zen_banner_exists('dynamic', SHOW_BANNERS_GROUP_SETHOMEAD3)) 
    {
    if ($banner->RecordCount() > 0) 
        {
           echo zen_display_banner('static', $banner) . '</div><div class="mask"><h2>' . $banner->fields['banners_title'] . '</h2><a href="' . zen_href_link(FILENAME_REDIRECT, 'action=banner&goto=' . $banner->fields['banners_id']) . '" class="info">' . SHOP_NOW . '</a>';
        }
    }?> 
                    </div>
                </div>





</div>



</div>		

<br class="clearBoth" />