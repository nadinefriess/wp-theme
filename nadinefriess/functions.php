<?php

if (function_exists('register_sidebar'))
    register_sidebar();

//Kürzt den Auszug bei den Recent Post auf 20 Wörter
function custom_excerpt_length($length) {

    return 15;
}

add_filter('excerpt_length', 'custom_excerpt_length', 999);

//Entfernt [...] bei weiterführenden Auszügen
function new_excerpt_more($more) {
    return ' ...';
}

add_filter('excerpt_more', 'new_excerpt_more');

//Erlaubt/Unterstütz das Arbeiten mit Thumbs
add_theme_support('post-thumbnails');

//Blocking the dashboard but allowing login page
function block_dashboard() {
    $file = basename($_SERVER['PHP_SELF']);
    if (is_user_logged_in() && is_admin() && !current_user_can('edit_posts') && $file != 'admin-ajax.php') {
        wp_redirect(home_url());
        exit();
    }
}

add_action('init', 'block_dashboard');

add_filter("widget_text", "do_shortcode");
?>