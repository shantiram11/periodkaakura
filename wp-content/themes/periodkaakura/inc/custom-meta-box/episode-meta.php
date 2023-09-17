<?php
/**
 * Hook in and add a metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */


add_action('cmb2_admin_init', 'register_episode_metabox');

function register_episode_metabox()
{
    /** begin: episode meta box*/
    $cmb = new_cmb2_box(array(
        'id'           => 'section_episode_meta_box',
        'title'        => 'Episode Section  Meta',
        'object_types' => array('sections'), // post type
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
        'show_on_cb'  => 'pkk_show_only_in_section_episodes',

    ));
    /**End:  section meta box*/
    $group_field_id = $cmb->add_field( array(
        'id'          => 'section_episode_repeat_group',
        'type'        => 'group',
        'description' => __( 'Reusable Episode Upload', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Episode{#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Add Another Episode', 'cmb2' ),
            'remove_button'     => __( 'Remove Episode', 'cmb2' ),
            'sortable'          => true,
            'closed'         => true, // true to have the groups closed by default
             'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Episode Title',
        'id'   => 'episode_title',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );

    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Episode Description',
        'id'   => 'Episode_body',
        'type' => 'wysiwyg',
        'sanitization_cb' => 'my_custom_sanitize_function', // Add a custom sanitize function
        'options' => array(
            'attributes' => array(
                'maxlength' => 65535,
            )),
    ));

    function my_custom_sanitize_function($value, $field_args, $field) {
        $value = htmlspecialchars_decode($value); // Escape special characters
        return $value;
    }
}