<?php 

function cpt_temoignages() {
    $labels = array(
        'name'               => 'Témoignages',
        'singular_name'      => 'temoignage',
        'menu_name'          => 'Témoignages',
        'name_admin_bar'     => 'Témoignages',
        'add_new'            => 'Ajouter un nouveau',
        'add_new_item'       => 'Ajouter un nouveau témoignage',
        'new_item'           => 'Nouveau témoignage',
        'edit_item'          => 'Modifier le témoignage',
        'view_item'          => 'Voir le témoignage',
        'all_items'          => 'Tous les temoignages',
        'search_items'       => 'Rechercher des temoignages',
        'not_found'          => 'Aucun témoignage trouvé',
        'not_found_in_trash' => 'Aucun témoignage dans la corbeille'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => false,
        'rewrite'            => array('slug' => 'temoignages'),
        'show_in_rest'       => true,
        'publicly_queryable' => true, // no de single page and remove URL on admin in single page
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'menu_icon'          => 'dashicons-editor-quote',
    );

    register_post_type('temoignage', $args);
}
add_action('init', 'cpt_temoignages');