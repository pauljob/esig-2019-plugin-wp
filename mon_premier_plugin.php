<?php
/*
Plugin Name: mon premier plugin
 */

function plugin_yoda() {
    return "<blockcode>Que la force soit avec toi !</blockcode>";
}
add_shortcode('yoda', 'plugin_yoda');
