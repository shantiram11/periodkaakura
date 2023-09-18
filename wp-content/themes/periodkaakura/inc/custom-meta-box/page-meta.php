<?php
/**
 * Hook in and add a metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */

add_action('cmb2_admin_init', 'register_section_metabox');
add_action('cmb2_admin_init', 'register_hero_section_metabox');
add_action('cmb2_admin_init', 'register_testimonial_section_metabox');
add_action('cmb2_admin_init', 'register_section_news_metabox');
add_action('cmb2_admin_init', 'register_section_team_metabox');
add_action('cmb2_admin_init', 'register_section_gallery_metabox');
add_action('cmb2_admin_init', 'register_section_videos_metabox');

function register_hero_section_metabox()
{
    /** begin: hero_section meta box*/
    $cmb = new_cmb2_box(array(
        'id'           => 'hero_section_meta_box',
        'title'        => 'Hero Section  Meta',
        'object_types' => array('sections'), // post type
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
        'show_on_cb'  => 'pkk_show_only_in_section_hero_sections',
        ));
    /**End:  section meta box*/
    $group_field_id = $cmb->add_field( array(
        'id'          => 'section_hero_section_repeat_group',
        'type'        => 'group',
        'description' => __( 'Reusable Slide Upload', 'cmb2' ),

        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Poster{#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Poster', 'cmb2' ),
            'remove_button'     => __( 'Remove Poster', 'cmb2' ),
            'sortable'          => true,
            'closed'         => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Poster',
        'id'   => 'poster',
        'type' => 'file',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Spotify Url',
        'id'   => 'url',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );
}
function register_testimonial_section_metabox()
{
    /** begin: testimonial_section meta box*/
    $cmb = new_cmb2_box(array(
        'id'           => 'testimonial_section_meta_box',
        'title'        => ' Testimonial  Meta',
        'object_types' => array('sections'), // post type
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
        'show_on_cb'  => 'pkk_show_only_in_testimonial_section',
    ));
    /**End:  section meta box*/
    $group_field_id = $cmb->add_field( array(
        'id'          => 'section_testimonial_section_repeat_group',
        'type'        => 'group',
        'description' => __( 'Reusable Testimonial Upload', 'cmb2' ),

        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Testimonial{#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Testimonial', 'cmb2' ),
            'remove_button'     => __( 'Remove Testimonial', 'cmb2' ),
            'sortable'          => true,
            'closed'         => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );

    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Name',
        'id'   => 'name',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Position',
        'id'   => 'position',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Testimonial',
        'id'   => 'testimonial',
        'type' => 'textarea_small',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Image',
        'id'   => 'image',
        'type' => 'file',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );
}
function register_section_metabox()
{
    /** begin: hero_section meta box*/
    $cmb = new_cmb2_box(array(
        'id' => 'section_meta_box',
        'title' => ' Section  Meta',
        'object_types' => array('sections'), // post type
        'context' => 'normal', //  'normal', 'advanced', or 'side'
        'priority' => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names' => true, // Show field names on the left
//        'show_on_cb'  => 'pkk_show_only_in_section_hero_sections',
    ));
    $cmb->add_field(array(
        'name' => __('section Title', 'cmb2'),
        'desc' => __('Enter the section Title', 'cmb2'),
        'id' => 'section_title',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => __('Section Subtitle', 'cmb2'),
        'desc' => __('Enter the section Subtitle', 'cmb2'),
        'id' => 'section_subtitle',
        'type' => 'text',
    ));
}
function register_section_news_metabox()
{
    /** begin: hero_section meta box*/
    $cmb = new_cmb2_box(array(
        'id' => 'section_news_meta_box',
        'title' => ' Section News Meta',
        'object_types' => array('sections'), // post type
        'context' => 'normal', //  'normal', 'advanced', or 'side'
        'priority' => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names' => true, // Show field names on the left
        'show_on_cb'  => 'pkk_show_only_in_news',
    ));
    /**End:  section meta box*/
    $group_field_id = $cmb->add_field( array(
        'id'          => 'section_news_repeat_group',
        'type'        => 'group',
        'description' => __( 'Reusable News Upload', 'cmb2' ),

        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'News{#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another News', 'cmb2' ),
            'remove_button'     => __( 'Remove News', 'cmb2' ),
            'sortable'          => true,
            'closed'         => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );

    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Link',
        'id'   => 'link',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Image',
        'id'   => 'image',
        'type' => 'file',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );
}

function register_section_team_metabox()
{
    /** begin: hero_section meta box*/
    $cmb = new_cmb2_box(array(
        'id' => 'section_team_meta_box',
        'title' => ' Section Team Meta',
        'object_types' => array('sections'), // post type
        'context' => 'normal', //  'normal', 'advanced', or 'side'
        'priority' => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names' => true, // Show field names on the left
        'show_on_cb'  => 'pkk_show_only_in_team',
    ));
    /**End:  section meta box*/
    $group_field_id = $cmb->add_field( array(
        'id'          => 'section_team_repeat_group',
        'type'        => 'group',
        'description' => __( 'Reusable Team Upload', 'cmb2' ),

        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Member{#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Member', 'cmb2' ),
            'remove_button'     => __( 'Remove Member', 'cmb2' ),
            'sortable'          => true,
            'closed'         => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );

    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Name',
        'id'   => 'name',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Image',
        'id'   => 'image',
        'type' => 'file',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Description',
        'id'   => 'body',
        'type' => 'textarea_small',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Instagram Url',
        'id'   => 'insta',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Twitter Url',
        'id'   => 'twitter',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );
}
function register_section_gallery_metabox()
{
    /** begin: hero_section meta box*/
    $cmb = new_cmb2_box(array(
        'id' => 'section_gallery_meta_box',
        'title' => ' Section Gallery Meta',
        'object_types' => array('sections'), // post type
        'context' => 'normal', //  'normal', 'advanced', or 'side'
        'priority' => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names' => true, // Show field names on the left
        'show_on_cb'  => 'pkk_show_only_in_gallery',
    ));
    /**End:  section meta box*/
    $group_field_id = $cmb->add_field( array(
        'id'          => 'section_gallery_repeat_group',
        'type'        => 'group',
        'description' => __( 'Reusable Gallery Upload', 'cmb2' ),

        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Image{#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Image', 'cmb2' ),
            'remove_button'     => __( 'Remove Image', 'cmb2' ),
            'sortable'          => true,
            'closed'         => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Image',
        'id'   => 'image',
        'type' => 'file',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Caption',
        'id'   => 'caption',
        'type' => 'textarea_small',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );
}

function register_section_videos_metabox()
{
    /** begin: hero_section meta box*/
    $cmb = new_cmb2_box(array(
        'id' => 'section_videos_meta_box',
        'title' => ' Section Video Meta',
        'object_types' => array('sections'), // post type
        'context' => 'normal', //  'normal', 'advanced', or 'side'
        'priority' => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names' => true, // Show field names on the left
        'show_on_cb'  => 'pkk_show_only_in_videos',
    ));
    /**End:  section meta box*/
    $group_field_id = $cmb->add_field( array(
        'id'          => 'section_videos_repeat_group',
        'type'        => 'group',
        'description' => __( 'Reusable Video Upload', 'cmb2' ),

        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Video{#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Video', 'cmb2' ),
            'remove_button'     => __( 'Remove Video', 'cmb2' ),
            'sortable'          => true,
            'closed'         => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Youtube Iframe',
        'id'   => 'iframe',
        'type' => 'wysiwyg',
        'sanitization_cb' => 'custom_sanitize_function', // Add a custom sanitize function
        'options' => array(
            'attributes' => array(
                'maxlength' => 65535,
            )),
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );
    function custom_sanitize_function($value, $field_args, $field) {
        $value = htmlspecialchars_decode($value); // Escape special characters
        return $value;
    }
}

