<?php
/**
 * Digi-Komp Facebook Slider. Module Entry Point
 *
 * Copyright (C) 2014 Chris Chaffey
 *
 * @package    Digi-Komp Facebook Slider
 * @subpackage Modules
 * @link       http://www.digi-komp.com
 * @license    GNU/GPL, see license.txt
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */
 
 // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' ); 

class modFBslide {

	function getFBslide( $params)   {
		
		if (trim( $params->get( 'loadCss' ) ) == 0)
		{
		?>
			<script type="text/javascript">
				jQuery(document).ready(function() {
					var $fbspeed = "<?php echo $params->get( 'fbspeed' ); ?>";
					jQuery('.fbimg2').css("visibility", "visible");
					jQuery('.fbimg2').fadeOut(0);
					jQuery('#fb-credit').fadeOut(0);
					
					jQuery('.fbimg').click(function() {
						jQuery('.fb-slide').fadeOut(0);
						jQuery('.fbimg').fadeOut(0);
						jQuery('#fbslide').animate({top: 0}, $fbspeed);
						jQuery('#fbslide').animate({<?php echo $params->get( 'fbpos' ); ?>: 0}, $fbspeed);
						jQuery('.fbimg2').fadeIn(1000);
						jQuery('.fb-slide').fadeIn(2000);
						jQuery('#fb-credit').fadeIn(2000);
					});
					
					jQuery('.fbimg2').click(function() {
						jQuery('.fbimg2').fadeOut(0);
						jQuery('.fb-slide').fadeOut(500);
						jQuery('#fb-credit').fadeOut(0);
						jQuery('#fbslide').animate({<?php echo $params->get( 'fbpos' ); ?>: -<?php echo $params->get( 'fbdist' ); ?>}, $fbspeed);
						jQuery('#fbslide').animate({top: <?php echo $params->get( 'fbtop' ); ?>}, $fbspeed);
						jQuery('.fbimg').fadeIn(1000);
					});
				});
			</script>
			<div id="fbslide" style="width:<?php echo $params->get( 'fbwidth' ); ?>px; height:<?php echo $params->get( 'fbheight' ); ?>px; <?php echo $params->get( 'fbpos' ); ?>: -<?php echo $params->get('fbdist'); ?>px; top: <?php echo $params->get('fbtop'); ?>px; background-color: #<?php echo $params->get('fbbackground_color'); ?>; padding: <?php echo $params->get('fbpadding_top'); ?>px <?php echo $params->get('fbpadding_right'); ?>px <?php echo $params->get('fbpadding_bottom'); ?>px <?php echo $params->get('fbpadding_left'); ?>px; border:<?php echo $params->get('fbborder_width'); ?>px <?php echo $params->get('fbborder_style'); ?> #<?php echo $params->get('fbborder_color'); ?>; border-radius: <?php echo $params->get('fbborder_radius'); ?>px; z-index: <?php echo $params->get('fbzindex'); ?>; box-shadow: <?php echo $params->get('fb_shadow_hor'); ?>px <?php echo $params->get('fb_shadow_ver'); ?>px <?php echo $params->get('fb_shadow_blur'); ?>px <?php echo $params->get('fb_shadow_spread'); ?>px #<?php echo $params->get('fb_shadow_color'); ?>;">
				<div class="fbicon" style="top: <?php echo $params->get( 'fbicon_top' ); ?>px; <?php echo $params->get( 'fbicopos' ); ?>: -<?php echo $params->get( 'fbicon_dist' ); ?>px;"><img class="fbimg" src="<?php echo $params->get('fbimg'); ?>" alt="Facebook slider icon" /><img class="fbimg2" src="<?php echo $params->get('fbimg2'); ?>" alt="Close Facebook slider icon" /></div>
				<div id="fb-root"></div>
				<script language="javascript" type="text/javascript">(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>
				<script language="javascript" type="text/javascript">
					//<![CDATA[
					document.write('<div class="fb-slide"><div class="fb-page" data-href="<?php echo $params->get( 'fb_page_url' ); ?>" data-width="<?php echo $params->get( 'fb_page_width' ); ?>" data-height="<?php echo $params->get( 'fb_page_height' ); ?>" data-hide-cover="<?php echo $params->get('fb_page_header'); ?>" data-show-facepile="<?php echo $params->get('fb_page_faces'); ?>" data-show-posts="<?php echo $params->get('fb_page_stream'); ?>"><div class="fb-xfbml-parse-ignore"><blockquote cite="<?php echo $params->get( 'fb_page_url' ); ?>"><a href="<?php echo $params->get( 'fb_page_url' ); ?>"><?php echo $params->get( 'fb_page_link' ); ?></a></blockquote></div></div></div>');
					//]]>
				</script>
				<div class="mobile-link_fb">
					<a href="<?php echo $params->get( 'fb_page_url' ); ?>" target="_blank" rel="nofollow"><img class="fbimg3" src="<?php echo $params->get('fbimg'); ?>" alt="Facebook icon" /></a>	
				</div>
				<?php
				
				if (trim( $params->get( 'give-credit' ) ) == 1)
				{
				?>
					<div id="fb-credit"><a href="http://www.digi-komp.com" rel="nofollow">&copy; Digi-Komp</a></div>
				<?php
				}
				?>
			</div>

		<?php
		}

		else
		{
		?>
			<script type="text/javascript">
				jQuery(document).ready(function() {
					var $fbspeed = "<?php echo $params->get( 'fbspeed' ); ?>";
					jQuery('.fbimg2').css("visibility", "visible");
					jQuery('.fbimg2').fadeOut(0);
					jQuery('#fb-credit').fadeOut(0);
					
					jQuery('.fbimg').click(function() {
						jQuery('.fb-slide').fadeOut(0);
						jQuery('.fbimg').fadeOut(0);
						jQuery('#fbslide').animate({top: 0}, $fbspeed);
						jQuery('#fbslide').animate({<?php echo $params->get( 'fbpos' ); ?>: 0}, $fbspeed);
						jQuery('.fbimg2').fadeIn(1000);
						jQuery('.fb-slide').fadeIn(2000);
						jQuery('#fb-credit').fadeIn(2000);
					});
					
					jQuery('.fbimg2').click(function() {
						jQuery('.fbimg2').fadeOut(0);
						jQuery('.fb-slide').fadeOut(500);
						jQuery('#fb-credit').fadeOut(0);
						jQuery('#fbslide').animate({<?php echo $params->get( 'fbpos' ); ?>: -<?php echo $params->get( 'fbdist' ); ?>}, $fbspeed);
						jQuery('#fbslide').animate({top: <?php echo $params->get( 'fbtop' ); ?>}, $fbspeed);
						jQuery('.fbimg').fadeIn(1000);
					});
				});
			</script>
			<div id="fbslide">
				<div class="fbicon"><img class="fbimg" src="<?php echo $params->get('fbimg'); ?>" alt="Facebook slider icon" /><img class="fbimg2" src="<?php echo $params->get('fbimg2'); ?>" alt="Close Facebook slider icon" /></div>
				<div id="fb-root"></div>
				<script language="javascript" type="text/javascript">(function(d, s, id) {
				  var js, fjs = d.getElementsByTagName(s)[0];
				  if (d.getElementById(id)) return;
				  js = d.createElement(s); js.id = id;
				  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));</script>
				<script language="javascript" type="text/javascript">
					//<![CDATA[
					document.write('<div class="fb-slide"><div class="fb-page" data-href="<?php echo $params->get( 'fb_page_url' ); ?>" data-width="<?php echo $params->get( 'fb_page_width' ); ?>" data-height="<?php echo $params->get( 'fb_page_height' ); ?>" data-hide-cover="<?php echo $params->get('fb_page_header'); ?>" data-show-facepile="<?php echo $params->get('fb_page_faces'); ?>" data-show-posts="<?php echo $params->get('fb_page_stream'); ?>"><div class="fb-xfbml-parse-ignore"><blockquote cite="<?php echo $params->get( 'fb_page_url' ); ?>"><a href="<?php echo $params->get( 'fb_page_url' ); ?>"><?php echo $params->get( 'fb_page_link' ); ?></a></blockquote></div></div></div>');
					//]]>
				</script>
				<div class="mobile-link_fb">
					<a href="<?php echo $params->get( 'fb_page_url' ); ?>" target="_blank" rel="nofollow"><img class="fbimg3" src="<?php echo $params->get('fbimg'); ?>" alt="Facebook icon" /></a>	
				</div>
				<?php
				
				if (trim( $params->get( 'give-credit' ) ) == 1)
				{
				?>
					<div id="fb-credit"><a href="http://www.digi-komp.com" rel="nofollow">&copy; Digi-Komp</a></div>
				<?php
				}
				?>
			</div>
		<?php
		}
	}
}
?>