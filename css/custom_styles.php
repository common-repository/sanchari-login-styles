<?php
function sls_admin_new_css() {?>
<style type="text/css">
html{background:url(<?php echo sls_myprefix_get_option( 'body_bg_id' ); ?>) #e8e5de ;}
body.login div#login h1 a{background-image:url(<?php echo sls_myprefix_get_option( 'logo_id' ); ?>) ;}
body.login div#login p.message{background:<?php echo sls_myprefix_get_option( 'login_form_error_bg_id' ); ?>;}
body.login div#login p.message{color:<?php echo sls_myprefix_get_option( 'login_form_error_color_id' ); ?>;}
body.login div#login form#loginform {background:<?php echo sls_myprefix_get_option( 'loginform_bg_id' ); ?>;}
body.login div#login form#loginform p label {color:<?php echo sls_myprefix_get_option( 'loginform_p_color_id' ); ?>;}
</style>
<?php
}
add_action('login_enqueue_scripts', 'sls_admin_new_css');




