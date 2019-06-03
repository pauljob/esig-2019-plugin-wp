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

function plugin_vador_shortcode() {
    if (empty($content)) {
        $content = 'Luke';
    }
    return "<blockquote>". $content . ", je suis ton père ! </blockquote>";
}

function mon_plugin_register_shortcode() {
    add_shortcode('yoda', 'plugin_yoda_shortcode');
    add_shortcode('vador', 'plugin_vador_shortcode');
}
add_action('init', 'mon_plugin_register_shortcode');



