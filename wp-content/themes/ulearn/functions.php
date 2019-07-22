<?php

function ulearn_script_enqueue() {
    wp_enqueue_style('customstyle', get_template_directory_uri().'/css/style.css', array(), '1', 'all');
    //wp_enqueue_style('customjs', get_template_directory_uri().'/js/ulearn.js', array(), '1', 'all'); for js
}
add_action('wp_enqueue_scripts', 'ulearn_script_enqueue');

?>