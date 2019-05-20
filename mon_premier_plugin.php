<?php
/*
Plugin Name: mon premier plugin
 */

function plugin_yoda_shortcode() {
    return "<blockquote>Que la force soit avec toi !</blockquote>";
}

function plugin_register_shortcode() {
    add_shortcode('yoda', 'plugin_yoda_shortcode');
}

add_action('init', 'plugin_register_shortcode');


