<?php
/**
 * Frontend website functions
 * php version 7.4
 *
 */

 function wpdocs_sf_scripts() {
    
	// Enqueue theme CSS file
	wp_enqueue_style('sourcefuse', get_template_directory_uri().'/style.css');

	// Enqueue theme header CSS file
	wp_enqueue_style('header_css', get_template_directory_uri().'/assets/css/header.css');
    
	// Enqueue theme banner CSS file
	wp_enqueue_style('banner_css', get_template_directory_uri().'/assets/css/banner.css');

	// Enqueue theme Second Section CSS file
	wp_enqueue_style('second_section_css', get_template_directory_uri().'/assets/css/second-section.css');

    // Enqueue Slider Section CSS file
	wp_enqueue_style('slider_section_css', get_template_directory_uri().'/assets/css/slider-section.css');

    // Enqueue common JS file
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );
    
	//enqueue bootstrap CSS
	wp_enqueue_style( 'bootstrap-min-css', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css' );
}
add_action('wp_enqueue_scripts', 'wpdocs_sf_scripts');


/**
 * remove p tag from content
 *
 * @param string $content post content.
 *
 * @return string $content
 */
function sf_Remove_ptag($content)
{
    $content = str_ireplace('<p>', '', $content);
    $content = str_ireplace('</p>', '', $content);
    return $content;
}


/**
 * Get sf Image source
 *
 * @param int    $attachmentId image ID.
 * @param string $size         size of the image.
 * @param bool   $icon         true or false.
 *
 * @return string $image_src[0] Image URL.
 */
function sf_Get_Image_src($attachmentId, $size = 'full', $icon = false)
{
    $image_src = wp_get_attachment_image_src($attachmentId, $size, $icon);
    return $image_src[0];
}


/**
 * Get sf Image alt
 *
 * @param int    $attachmentId image ID.
 * @param string $default      default alt name for image.
 *
 * @return string $image_alt Image alt string.
 */
function sf_Get_Image_alt($attachmentId, $default = null)
{
    $image_alt = get_post_meta($attachmentId, '_wp_attachment_image_alt', true);
    if ($image_alt == '') {
        $image_alt = $default;
    }
    return $image_alt;
}


/**
 * Function to create the image with crop points
 *
 * @param array $image Image array.
 * @param int   $width Image size to return.
 * @param array $ratio Image ratio to return.
 *
 * @return string Return the image URL.
 */
function sf_Get_image( $image, $width = null, $ratio = null )
{

    if ($image && ! empty($image) && ! empty($image[0]) ) {

        $url = $image[0];

        $dimention = null;

        if ($image[1] > $image[2] ) {
            $dimention = $image[2];
        } else {
            $dimention = $image[1];
        }

        if (! empty($width) && ! empty($ratio) ) {

            $height = ( $dimention * $ratio[1] ) / $ratio[0];

            $params = array(
            'crop' => '0,0,' . (int) $dimention . 'px,' . (int) $height . 'px',
            'w'    => $width . 'px',
            );

            $url .= '?' . build_query($params);
        } elseif (! empty($width) ) {

            $params = array(
            'w' => $width . 'px',
            );

            $url .= '?' . build_query($params);
        }

        return $url;
    } else {
        return '';
    }
}


/**
 * Create custom post type for case study
 *
 * @return $labels for post type
 */
function CXR_Project_Post_type()
{
    $labels = array(
        'name'                => _x('Projects', 'Post Type General Name'),
        'singular_name'       => _x('Project', 'Post Type Singular Name'),
        'menu_name'           => __('Projects'),
        'all_items'           => __('All Projects'),
        'view_item'           => __('View Project'),
        'add_new_item'        => __('Add New Project'),
        'add_new'             => __('Add New'),
        'edit_item'           => __('Edit Project'),
        'update_item'         => __('Update Project'),
        'search_items'        => __('Search Project'),
        'not_found'           => __('Not Found'),
        'not_found_in_trash'  => __('Not found in Trash'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => __('project'),
        'description'         => __('Projects'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-welcome-write-blog',
        'can_export'          => true,
        'has_archive'         => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,

    );

    // Registering your Custom Post Type
    register_post_type('project', $args);

}
add_action('init', 'CXR_Project_Post_type', 0);
