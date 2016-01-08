<?php

/*
* Plugin Name: Skills
* Plugin URI: http://arildosilva.grupoproativ.com.br
* Author: Arildo Oliveira
* Author URI: http://arildosilva.grupoproativ.com.br
* Version: 1.0
* License: GPLv2
* Description: This plugin adds a custom post type called 'Skills'.
*/

function skills_register_post_type() {
    $labels = array(
        'name' => 'Skills',
        'singular_name' => 'Skill',
        'menu_name' => 'Skills',
        'name_admin_bar' => 'Skill',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Skill',
        'new_item' => 'New Skill',
        'edit_item' => 'Edit Skill',
        'view_item' => 'View Skill',
        'all_items' => 'All Skills',
        'search_items' => 'Search Skills',
        'parent_item_colon' => 'Parent Skills:',
        'not_found' => 'No skills found.',
        'not_found_in_trash' => 'No skills found in trash.'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'skill'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title')
    );
    register_post_type('skill', $args);
}
add_action('init', 'skills_register_post_type');

