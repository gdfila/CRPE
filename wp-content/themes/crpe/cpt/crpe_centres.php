<?php

add_action('init', 'crpe_create_centres_type');

function crpe_create_centres_type() {
    //labels 
    $labels = [
        'name' => 'nos centres',
        'singular_name' => 'centre',
        'all_items' => 'tous centres',
        'add_new' => 'ajouter',
        'add_new_item' => 'ajouter un centre',
        'edit' => 'éditer',
        'edit_item' => 'éditer un centre',
        'new_item' => 'nouveau centre',
        'view' => 'voir ',
        'view_item' => 'voir un centre',
        'search_items' => 'rechercher un centre',
        'not_found' => 'aucun centre trouvé',
        'not_found_in_trash' => 'pas de centre dans la poubelle',
    ];

    register_post_type('centres', [
        'labels' => $labels,
        'public' => true, // pour que cela s'affiche dans l'admin
        'public_queyrable' => true, 
        'show_in_menu' => true,
        'exclude_from_search' => false,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post', 
        'has_archives' => true, 
        'hierarchical' => false, 
        'menu_position' => 2, 
        'supports' => ['title', 'editor', 'thumbnail', 'custom-fields' ],
        ]
    );
}
