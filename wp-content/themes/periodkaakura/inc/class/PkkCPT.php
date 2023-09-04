<?php
class ArgyleCPT
{
    public static function init(){
        add_action('init',array(__CLASS__,'pkk_register_custom_post_type'));
//        add_action('init',array(__CLASS__,'pkk_register_taxonomy'));
    }

    public static function pkk_register_custom_post_type(){

        //Register Custom Post Type Sections starts
        register_post_type('sections', array(
            'labels'              => array(
                'name'                => _x( 'Sections', 'Post Type General Name', 'pkk' ),
                'singular_name'       => _x( 'Section', 'Post Type Singular Name', 'pkk' ),
                'menu_name'           => __( 'Sections', 'pkk' ),
                'parent_item_colon'   => __( 'Parent Section', 'pkk' ),
                'all_items'           => __( 'All Sections', 'pkk' ),
                'view_item'           => __( 'View Section', 'pkk' ),
                'add_new_item'        => __( 'Add New Section', 'pkk' ),
                'add_new'             => __( 'Add New', 'pkk' ),
                'edit_item'           => __( 'Edit Section', 'pkk' ),
                'update_item'         => __( 'Update Section', 'pkk' ),
                'search_items'        => __( 'Search Section', 'pkk' ),
                'not_found'           => __( 'Not Found', 'pkk' ),
                'not_found_in_trash'  => __( 'Not found in Trash', 'pkk' ),
                'new_item'           => __( 'New Section' ),
            ),

            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions' ),
            // You can associate this CPT with a taxonomy or custom taxonomy.
//            'taxonomies'          => array( 'genres' )
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 20,
            'can_export'          => true,
            'has_archive'         => false,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'post',
            'show_in_rest'        => true,
            'menu_icon'           => 'dashicons-open-folder',
            'query_var'           => true,
            'rewrite'             => array( 'slug' => 'sections' ),

        ));
        //Register Custom Post Type Sections ends here
    }
}
ArgyleCPT::init();

