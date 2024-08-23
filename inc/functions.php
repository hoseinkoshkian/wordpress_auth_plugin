<?php
// فالی های عمومی که  قرار است هر حایی باشد
function wp_auth_load_assets()
{
    var_dump(WP_AUTH_URL . 'assets/css/auth.css');
    wp_register_style("wp_auth_style", WP_AUTH_URL . 'assets/css/auth.css');
    wp_enqueue_style("wp_auth_style");
    wp_register_style("wp_auth_script", WP_AUTH_URL . 'assets/js/auth.js' , ['jquery']);
    wp_enqueue_style("wp_auth_script");
}

add_action("wp_enqueue_scripts", "wp_auth_load_assets");
