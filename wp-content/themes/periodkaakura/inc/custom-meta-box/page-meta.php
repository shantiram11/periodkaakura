<?php
/**
 * Hook in and add a metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
add_action('cmb2_admin_init', 'register_page_metabox');
add_action('cmb2_admin_init', 'register_homepage_metabox');
function dont_show_in_other_templates() {
    $screen = get_current_screen();
    if ( $screen->post_type == 'page' ) {
        $template = get_post_meta( $screen->id, '_wp_page_template', true );
        if ( $template != 'templates/home.php' && $template != 'templates/collection.php' ) {
            return true;
        }
    }
    return false;
}
function register_page_metabox()
{
    /** begin: page meta box*/
    $cmb = new_cmb2_box(array(
        'id'           => 'page_meta_box',
        'title'        => 'Page Meta',
        'object_types' => array('page'), // post type
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
//        'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/home.php' ),
    ));

    $cmb->add_field(array(
        'name' => __('Page Heading', 'cmb2'),
        'desc' => __('Enter the page Heading', 'cmb2'),
        'id'   => 'page_heading',
        'type' => 'textarea_small',
    ));
    $cmb->add_field(array(
        'name' => __('Page Url', 'cmb2'),
        'desc' => __('Enter the Page Url', 'cmb2'),
        'id'   => 'page_url',
        'type' => 'textarea_small',
    ));
    $cmb->add_field(array(
        'name' => __('Page Sub Heading', 'cmb2'),
        'desc' => __('Enter the page Sub Heading', 'cmb2'),
        'id'   => 'page_sub_heading',
        'type' => 'textarea_small',
    ));
    $cmb->add_field(array(
        'name' => __('Page Gallery', 'cmb2'),
        'desc' => __('Upload the image for this Page', 'cmb2'),
        'id'   => 'page_gallery',
        'type' => 'file_list',
        'show_on_cb'      => 'dont_show_in_other_templates',
    ));

    /** begin: Home page Hero meta box*/
    $cmb = new_cmb2_box(array(
        'id'           => 'home_page_hero_meta_box',
        'title'        => 'Hero Section Meta',
        'object_types' => array('page'), // post type
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
        'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/home.php' ),
    ));
    $cmb->add_field(array(
        'name' => __('Button text', 'cmb2'),
        'desc' => __('Enter the Button Text for homepage hero section', 'cmb2'),
        'id'   => 'hero_button_text',
        'type' => 'text',
    ));
    $cmb->add_field(array(
        'name' => __('Button Link', 'cmb2'),
        'desc' => __('Enter the Button Link for homepage hero section', 'cmb2'),
        'id'   => 'hero_button_link',
        'type' => 'text',
    ));
    /** begin: About meta box*/
    $cmb = new_cmb2_box(array(
        'id'           => 'home_page_about_meta_box',
        'title'        => 'About Section Meta',
        'object_types' => array('page'), // post type
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
        'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/home.php' ),
    ));
    $cmb->add_field(array(
        'name' => __('About text', 'cmb2'),
        'desc' => __('Enter the About Text for the section', 'cmb2'),
        'id'   => 'about_text',
        'type' => 'wysiwyg',
        'sanitization_cb' => 'my_custom_sanitize_function'
    ));
    function my_custom_sanitize_function($value, $field_args, $field) {
        $value = htmlspecialchars_decode($value); // Escape special characters
        return $value;
    }

    $cmb->add_field(array(
        'name' => __('About Image', 'cmb2'),
        'desc' => __('Upload the image for the section', 'cmb2'),
        'id'   => 'about_image',
        'type' => 'file',
    ));
    /** begin: Home page Slider meta box*/
    $cmb = new_cmb2_box(array(
        'id'           => 'home_page_slider_meta_box',
        'title'        => 'Slider Meta',
        'object_types' => array('page'), // post type
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
        'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/home.php' ),
    ));
    $cmb->add_field(array(
        'name' => __('Slider Title', 'cmb2'),
        'desc' => __('Enter Title for the Slider Section', 'cmb2'),
        'id'   => 'slider_title',
        'type' => 'text',
    ));
    $group_field_id = $cmb->add_field( array(
        'id'          => 'door_repeat_fields',
        'type'        => 'group',
        'description' => __( 'Reusable Door Slide', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group

        'options'     => array(
            'group_title'       => __( 'Door Slide', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Door Slide', 'cmb2' ),
            'remove_button'     => __( 'Remove Door Slide', 'cmb2' ),
            'sortable'          => true,
            'closed'         => true, // true to have the groups closed by default
             'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );
    $cmb->add_group_field( $group_field_id, array(
        'name' => ' Title',
        'id'   => 'title',
        'type' => 'text',
    ) );
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Image',
        'id'   => 'image',
        'type' => 'file',
    ) );
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Page Url',
        'id'   => 'page_url',
        'type' => 'text',
    ) );
}
function register_homepage_metabox()
{
    /** begin: page meta box*/
    $cmb = new_cmb2_box(array(
        'id' => 'homepage_meta_box',
        'title' => 'Home page Meta (Sections )',
        'object_types' => array('page'), // post type
        'context' => 'normal', //  'normal', 'advanced', or 'side'
        'priority' => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names' => true, // Show field names on the left
        'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/home.php' ),
    ));
    $group_field_id = $cmb->add_field( array(
        'id'          => 'product_type_repeat_fields',
        'type'        => 'group',
        'description' => __( 'Reusable Product Types (Sections)', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Product Types (Sections)', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Product Type (Section)', 'cmb2' ),
            'remove_button'     => __( 'Remove Product Type (Section)', 'cmb2' ),
            'sortable'          => true,
            'closed'         => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );
    $cmb->add_group_field( $group_field_id, array(
    'name' => ' Title',
        'id'   => 'title',
        'type' => 'text',
    ) );
    $cmb->add_group_field( $group_field_id, array(
        'name' => ' Sub Title',
        'id'   => 'sub_title',
        'type' => 'text',
    ) );
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Featured Images',
        'id'   => 'images',
        'type' => 'file_list',
    ) );
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Url for page',
        'id'   => 'url',
        'type' => 'text',
    ) );
}