<?php

function register_project_tags_taxonomy() {
    register_taxonomy('tags', ['project'], [
        'label'             => 'Tags',
        'public'            => false,
        'hierarchical'      => false, // false = comportement "tag"
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true, // pour Gutenberg
        'rewrite'           => false,
    ]);
}
add_action('init', 'register_project_tags_taxonomy');