<?php

function wp_auth_login_handler($atts, $content = null)
{
    return "<H1>helllllooo mother fucker </H>";
    // include WP_AUTH_TPL . "front/login.php";
}
function wp_auth_login_register($atts, $content = null)
{
    // include WP_AUTH_TPL . "front/register.php";
}


add_shortcode('wp_auth_login', "wp_auth_login_handler");
add_shortcode('wp_auth_register', "wp_auth_login_register");
