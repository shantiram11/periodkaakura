<?php
/**
 * Hook in and add a metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
add_action('cmb2_admin_init', 'register_contact_page_metabox');
function register_contact_page_metabox()
{
    /** begin: contact_page meta box*/
    $cmb = new_cmb2_box(array(
        'id'           => 'contact_page_meta_box',
        'title'        => 'Get in touch Meta',
        'object_types' => array('page'), // post type
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
        'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/contact.php' ),
    ));

    $cmb->add_field(array(
        'name' => __('Contact Title', 'cmb2'),
        'desc' => __('Enter the Title', 'cmb2'),
        'id'   => 'contact_title',
        'type' => 'text',
    ));
    $cmb->add_field(array(
        'name' => __('Sub Title', 'cmb2'),
        'desc' => __('Enter the Sub Title', 'cmb2'),
        'id'   => 'contact_sub_title',
        'type' => 'text',
    ));
    $cmb->add_field(array(
        'name' => __('Description', 'cmb2'),
        'desc' => __('Enter the Description', 'cmb2'),
        'id'   => 'contact_description',
        'type' => 'textarea_small',
    ));
    $cmb->add_field( array(
        'name' => 'Business Start Time',
        'id' => 'start_texttime',
        'type' => 'text_time'
        // Override default time-picker attributes:
        // 'attributes' => array(
        //     'data-timepicker' => json_encode( array(
        //         'timeOnlyTitle' => __( 'Choose your Time', 'cmb2' ),
        //         'timeFormat' => 'HH:mm',
        //         'stepMinute' => 1, // 1 minute increments instead of the default 5
        //     ) ),
        // ),
        // 'time_format' => 'h:i:s A',
    ) );
    $cmb->add_field( array(
        'name' => 'Business Close Time',
        'id' => 'end_texttime',
        'type' => 'text_time'
    ) );
    $cmb->add_field( array(
        'name' => 'Office Address',
        'id' => 'office_addres',
        'type' => 'textarea_small'
    ) );
    $cmb->add_field( array(
        'name' => 'Email Address',
        'id' => 'email_addres',
        'type' => 'text'
    ) );
    $cmb->add_field( array(
        'name' => 'Contact Number',
        'id' => 'phone_number',
        'type' => 'text'
    ) );
    $cmb->add_field( array(
        'name' => 'Contact Form Shortcode',
        'id' => 'contact_shortcode',
        'type' => 'text'
    ) );
}