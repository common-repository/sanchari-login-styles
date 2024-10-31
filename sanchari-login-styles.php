<?php
/*
Plugin Name: Sanchari Login Styles
Plugin URI: http://arnabportfolio.blogspot.in/
Description: This plugin will enable colorful Custom Wordpress Login panel.
Author: Arnab Kumar Halder
Version: 1.0
Author URI: http://arnabportfolio.blogspot.in/
*/

// Wordpress jQuery

function sls_login_styles_jquery() {
	wp_enqueue_script('jquery');
}
add_action('init', 'sls_login_styles_jquery');

 //custom styles
 include_once( 'css/style-login.php' );
 

 //active custom_meta_box
 include_once( 'inc/cmb/init.php' );
 
 
 //admin option panel
 include_once( 'inc/options.php' );
 
  //admin option panel
 include_once( 'css/custom_styles.php' );
 
 
 
 
 
 
 
 
function add_sls_options_framwork()  
{  
	add_options_page('Purchase Sanchari Login Styles Pro for cool features', '', 'manage_options', 'sls-settings','sls_options_framwrork');  
}  
add_action('admin_menu', 'add_sls_options_framwork');



if ( is_admin() ) : // Load only if we are viewing an admin page



// Function to generate adds options page
function sls_options_framwrork() {
?>


	
<div class="wrap">
	<style type="text/css">
		.welcome-panel-column p{padding-right:20px}
		.installing_message h2{background: none repeat scroll 0 0 green;
color: #fff;
line-height: 30px;
padding: 20px;
text-align: center;}
	</style>
	<div class="installing_message">
		<h2>Thank you for installing our free plugin</h2>
	</div>
	

	<div class="welcome-panel" id="welcome-panel">
		
		<div class="welcome-panel-content">
			<h3>Our more free plugins</h3>
	<div class="welcome-panel-column-container">
		<div class="welcome-panel-column">
			<h4>Cute News Ticker</h4>
			<p>This plugin will enable news ticker in your wordpress theme. You can embed news ticker via shortcode in everywhere you want, even in theme files.</p>
			<a href="https://wordpress.org/plugins/cute-news-ticker/" target="_blank" class="button button-primary">Download form wordpress.org plugin directory</a>
		</div>
		
		<div class="welcome-panel-column">
			<h4>Cute Scroll To Top</h4>
			<p>This plugin will add a scroll to top button on footer right.</p>
			<a href="https://wordpress.org/plugins/cute-scroll-to-top/" target="_blank" class="button button-primary">Download form wordpress.org plugin directory</a>
		</div>
		
		<div class="welcome-panel-column welcome-panel-last">
			<h4>Responsive Video Ultimate</h4>
			<p>This plugin will enable responsive video in your wordpress theme.With this plugin you can easily embed responsive video in your pages, posts even in widgets by just few clicks. You can embed responsive video from most popular video sharing sites like Youtube,Vimeo, Dailymotion, funnyordie, blip.tv, ustream.tv.</p>
			<a href="https://wordpress.org/plugins/responsive-video-ultimate/" target="_blank" class="button button-primary">Download form wordpress.org plugin directory</a>
		</div>
	</div>
	
	<div class="welcome-panel-column-container">
		
		<div class="welcome-panel-column">
			<h4>Sanchari Testimonial</h4>
			<p>This plugin will enable Testimonial in any wordpress site.You can set this Testimonial everywhere in your site using shortcode. It has an awesome option panel. With this option panel you can manage Testimonial very easily and effectively.</p>
			<a href="https://wordpress.org/plugins/sanchari-testimonial/" target="_blank" class="button button-primary">Download form wordpress.org plugin directory</a>
		</div>
		
		
		
		<div class="welcome-panel-column welcome-panel-last">
			<h4>& more ....</h4>
			<p>Our more awesome free is coming soon...</p>
			<a href="http://arnabportfolio.blogspot.in/" target="_blank" class="button button-primary">My portfolio.</a>
		</div>
		
	</div>

	<br/><br/>
		<h3>Having problem? </h3>
		<p class="about-description"> I am offering premium service for you. Need help just knock me on fiverr.</p>

		<a href="https://www.fiverr.com/arnabkumar" target="_blank" class="button button-primary button-hero">I am on fiverr</a><br/><br/>
	
	
		</div>
	</div>


</div>
	


	<?php
}



endif;  // EndIf is_admin()


//redirect user when pluin active (This is for adds)

register_activation_hook(__FILE__, 'sls_my_plugin_activate');
add_action('admin_init', 'sls_my_plugin_redirect');

function sls_my_plugin_activate() {
    add_option('sls_plugin_do_activation_redirect', true);
}

function sls_my_plugin_redirect() {
    if (get_option('sls_plugin_do_activation_redirect', false)) {
        delete_option('sls_plugin_do_activation_redirect');
        if(!isset($_GET['activate-multi']))
        {
            wp_redirect("options-general.php?page=sls-settings");
        }
    }
}
 
 
 
 
 
 
 
 
 
 
 
?>