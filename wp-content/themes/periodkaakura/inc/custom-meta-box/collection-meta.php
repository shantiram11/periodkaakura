<?php
/**
 * Hook in and add a metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
add_action('cmb2_admin_init', 'register_collection_page_metabox');
function register_collection_page_metabox()
{
    /** begin: collection_page meta box*/
    $cmb = new_cmb2_box(array(
        'id'           => 'collection_metabox',
        'title'        => 'Doors Collection ',
        'object_types' => array('page'), // post type
        'context'      => 'normal', //  'normal', 'advanced', or 'side'
        'priority'     => 'high',  //  'high', 'core', 'default' or 'low'
        'show_names'   => true, // Show field names on the left
        'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/collection.php' ),
    ));
    $group_field = $cmb->add_field( array(
        'id'          => 'image_group',
        'type'        => 'group',
        'repeatable'  => true,
        'options'     => array(
            'group_title'   => __( 'Collection {#}', 'cmb2' ),
            'add_button'    => __( 'Add Another Collection', 'cmb2' ),
            'remove_button' => __( 'Remove Collection', 'cmb2' ),
            'sortable'      => true,
        ),
    ) );
    $cmb->add_group_field( $group_field, array(
        'name' => 'Collection Title',
        'id'   => 'title',
        'type' => 'text',
    ) );
// Add file_list field to the group field
    $cmb->add_group_field( $group_field, array(
        'name' => 'Group of Images',
        'id'   => 'group_of_images',
        'type' => 'file_list',
    ) );

}