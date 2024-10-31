<?php
function sls_admin_custom_login_css() {?>
<style type="text/css">
html{}
body.login {background:none;}
body.login div#login {}
body.login div#login p.message{background:green;color:#ffffff;}
body.login div#login h1 {}
body.login div#login h1 a {}
body.login div#login form#loginform {background:red;}
body.login div#login form#loginform p {}
body.login div#login form#loginform p label {color:green;}
body.login div#login form#loginform input {}
body.login div#login form#loginform input#user_login {}
body.login div#login form#loginform input#user_pass {}
body.login div#login form#loginform p.forgetmenot {}
body.login div#login form#loginform p.forgetmenot input#rememberme {}
body.login div#login form#loginform p.submit {}
body.login div#login form#loginform p.submit input#wp-submit {}
body.login div#login p#nav {}
body.login div#login p#nav a {}
body.login div#login p#backtoblog {}
body.login div#login p#backtoblog a {}
</style>
<?php
}
add_action('login_enqueue_scripts', 'sls_admin_custom_login_css');


