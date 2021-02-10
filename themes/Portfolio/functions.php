<?php


// Css enqueue voor in head


function load_stylesheets()
{
	wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
	wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


// Javascript enqueue voor in footer


function loadjs()
{
	wp_register_script('customjs', get_template_directory_uri() . '/js/script.js', '', 1, true);
	wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts', 'loadjs');


// include custom jQuery


function shapeSpace_include_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');


// Menus


add_theme_support('menus');

register_nav_menus(
	array(
		'top-menu' => __('Top Menu', 'theme'),
		'link_before' => '<span class="menuClick">',
    	'link_after' => '</span>',
	)
);


// Option page


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}


// Contact form 7


add_filter('wpcf7_autop_or_not', '__return_false');



// templates


function makewp_exclude_page_templates( $post_templates ) {
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
unset( $post_templates['templates/my-full-width-post-template.php'] );
}
return $post_templates;
}
add_filter( 'theme_page_templates', 'makewp_exclude_page_templates' );

function project_post_type() {
    
    // Labels
    $labels = array(
        'name'    => _x( 'Projects', 'post type general name' ),
        'singular_name' => _x( 'Project', 'post type singular name' ),
        'menu_name' => 'Case Studies',
        'add_new' => _x( 'Add Project', 'project item' ),
        'add_new_item' => __( 'Add New Project' ),
        'edit_item' => __( 'Edit Project' ),
        'new_item' => __( 'New Project' ),
        'view_item' => __( 'View Project' ),
        'search_items' => __( 'Search Projects' ),
        'not_found' =>  __( 'No Projects Found' ),
        'not_found_in_trash' => __( 'No Projects Found in Trash' ),
        'parent_item_colon' => ''
    );
    
    // Register post type
    register_post_type( 'projects' , array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-awards',
        'rewrite' => array( 'slug' => 'project' ),
        'menu_position' => 5,
        'hierarchical' => true,
        'capability_type'    => 'page',
        'supports' => array(
                        'title',
                        'editor',
                        'excerpt',
                        'genesis-seo',
                        'custom-fields',
                        'page-attributes'
                    )
    ) );
}
add_action( 'init', 'project_post_type', 0 );




// Thumbnails

add_theme_support('post-thumbnails');

// Image sizes

add_image_size('small, 300, 300, true'); 

add_image_size('medium, 500, 500, true'); 

add_image_size('Large, 800, 800, true'); 

