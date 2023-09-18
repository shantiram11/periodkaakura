<?php
/**
 * Hook in and add a metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
add_action('cmb2_admin_init', 'register_about_page_metabox');
add_action('cmb2_admin_init', 'register_about_body_metabox');
function register_about_page_metabox()
{
    /** begin: about_page meta box*/
    $cmb = new_cmb2_box(array(
        'id'           => 'about_page_meta_box',
        'title'        => 'About Page Meta',
        'object_types' => array('page'), // post type
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
        'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/about.php' ),
    ));

    $cmb->add_field(array(
        'name' => __('Banner Image', 'cmb2'),
        'desc' => __('Upload Banner Image', 'cmb2'),
        'id'   => 'banner_image',
        'type' => 'file',
    ));
    $cmb->add_field(array(
        'name' => __('Page Title', 'cmb2'),
        'desc' => __('Enter the  Title', 'cmb2'),
        'id'   => 'about_title',
        'type' => 'text',
    ));
    $cmb->add_field(array(
        'name' => __('Description', 'cmb2'),
        'desc' => __('Enter the Description', 'cmb2'),
        'id'   => 'about_description',
        'type' => 'textarea',
    ));
    $cmb->add_field( array(
        'name' => 'Background Image',
        'id' => 'background_image',
        'type' => 'file'
    ) );
    $cmb->add_field( array(
        'name' => 'Card Title',
        'id' => 'card_title',
        'type' => 'text'
    ) );
    $cmb->add_field( array(
        'name' => 'card Body',
        'id' => 'card_body',
        'type' => 'textarea'
    ) );
    $cmb->add_field( array(
        'name' => 'Esewa ID',
        'id' => 'esewa',
        'type' => 'text'
    ) );
    $cmb->add_field( array(
        'name' => 'Paypal ID',
        'id' => 'paypal',
        'type' => 'text'
    ) );
}
function register_about_body_metabox()
{
    /** begin: hero_section meta box*/
    $cmb = new_cmb2_box(array(
        'id' => 'about_body_meta_box',
        'title' => 'Primary Content',
        'object_types' => array('page'), // post type
        'context' => 'normal', //  'normal', 'advanced', or 'side'
        'priority' => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names' => true, // Show field names on the left
        'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/about.php' ),
    ));
    /**End:  section meta box*/
    $group_field_id = $cmb->add_field( array(
        'id'          => 'about_repeat_group',
        'type'        => 'group',
        'description' => __( 'Reusable About Info', 'cmb2' ),

        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Info{#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Info', 'cmb2' ),
            'remove_button'     => __( 'Remove Info', 'cmb2' ),
            'sortable'          => true,
            'closed'         => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Title',
        'id'   => 'title',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Description',
        'id'   => 'description',
        'type' => 'textarea',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );
}