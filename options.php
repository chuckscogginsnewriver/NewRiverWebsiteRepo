<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __('One', 'options_check'),
		'two' => __('Two', 'options_check'),
		'three' => __('Three', 'options_check'),
		'four' => __('Four', 'options_check'),
		'five' => __('Five', 'options_check')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'options_check'),
		'two' => __('Pancake', 'options_check'),
		'three' => __('Omelette', 'options_check'),
		'four' => __('Crepe', 'options_check'),
		'five' => __('Waffle', 'options_check')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );
		
	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __('Home Page Settings', 'options_check'),
		'type' => 'heading');

/*Featured Images */


  $options[] = array(
		'name' => __('First Home Feature Image', 'options_check'),
		'desc' => __('Enter the URL for the first featured image on the home page.', 'options_check'),
		'id' => 'home_featured_01',
		'std' => 'http://placehold.it/600x340',
		'type' => 'text');
		
  $options[] = array(
		'name' => __('First Home Feature Image Link', 'options_check'),
		'desc' => __('Enter the link for the first featured image on the home page.', 'options_check'),
		'id' => 'home_featured_link_01',
		'std' => 'http://nrcc.net',
		'type' => 'text');
		
  $options[] = array(
		'name' => __('Second Home Feature Image', 'options_check'),
		'desc' => __('Enter the URL for the second featured image on the home page.', 'options_check'),
		'id' => 'home_featured_02',
		'std' => 'http://placehold.it/600x340',
		'type' => 'text');
		
  $options[] = array(
		'name' => __('Second Home Feature Image Link', 'options_check'),
		'desc' => __('Enter the link for the second featured image on the home page.', 'options_check'),
		'id' => 'home_featured_link_02',
		'std' => 'http://nrcc.net',
		'type' => 'text');

  $options[] = array(
		'name' => __('Third Home Feature Image', 'options_check'),
		'desc' => __('Enter the URL for the third featured image on the home page.', 'options_check'),
		'id' => 'home_featured_03',
		'std' => 'http://placehold.it/600x340',
		'type' => 'text');
		
  $options[] = array(
		'name' => __('Third Home Feature Image Link', 'options_check'),
		'desc' => __('Enter the link for the third featured image on the home page.', 'options_check'),
		'id' => 'home_featured_link_03',
		'std' => 'http://nrcc.net',
		'type' => 'text');
		
/* Secondary Images */

$options[] = array(
    'name' => __('Hide Secondary Images', 'options_check'),
    'desc' => __('Check this to hide the secondary images on the home page'),
    'id' => 'home_checkbox',
    'std' => '1',
    'type' => 'checkbox'
);

	$options[] = array(
		'name' => __('Secondary Home Page Images', 'options_check'),
		'desc' => __('Second set of images on the home page.', 'options_check'),
		'type' => 'info');

$options[] = array(
		'name' => __('First Home Secondary Image', 'options_check'),
		'desc' => __('Enter the URL for the first secondary image on the home page.', 'options_check'),
		'id' => 'home_secondary_01',
		'std' => 'http://placehold.it/750x400',
		'type' => 'text');
		
  $options[] = array(
		'name' => __('First Home Secondary Image Link', 'options_check'),
		'desc' => __('Enter the link for the first secondary image on the home page.', 'options_check'),
		'id' => 'home_secondary_link_01',
		'std' => 'http://nrcc.net',
		'type' => 'text');
		
  $options[] = array(
		'name' => __('Second Home Secondary Image', 'options_check'),
		'desc' => __('Enter the URL for the second secondary image on the home page.', 'options_check'),
		'id' => 'home_secondary_02',
		'std' => 'http://placehold.it/750x400',
		'type' => 'text');
		
  $options[] = array(
		'name' => __('Second Home Secondary Image Link', 'options_check'),
		'desc' => __('Enter the link for the second secondary image on the home page.', 'options_check'),
		'id' => 'home_secondary_link_02',
		'std' => 'http://nrcc.net',
		'type' => 'text');

  $options[] = array(
		'name' => __('Third Home Secondary Image', 'options_check'),
		'desc' => __('Enter the URL for the third secondary image on the home page.', 'options_check'),
		'id' => 'home_secondary_03',
		'std' => 'http://placehold.it/750x400',
		'type' => 'text');
		
  $options[] = array(
		'name' => __('Third Home Secondary Image Link', 'options_check'),
		'desc' => __('Enter the link for the third secondary image on the home page.', 'options_check'),
		'id' => 'home_secondary_link_03',
		'std' => 'http://nrcc.net',
		'type' => 'text');


	/**
	 * For $settings options see:
	 * http://codex.wordpress.org/Function_Reference/wp_editor
	 *
	 * 'media_buttons' are not supported as there is no post to attach items to
	 * 'textarea_name' is set by the 'id' you choose
	 */

/*	$wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress' )
	);
	
	$options[] = array(
		'name' => __('Default Text Editor', 'options_check'),
		'desc' => sprintf( __( 'You can also pass settings to the editor.  Read more about wp_editor in <a href="%1$s" target="_blank">the WordPress codex</a>', 'options_check' ), 'http://codex.wordpress.org/Function_Reference/wp_editor' ),
		'id' => 'example_editor',
		'type' => 'editor',
		'settings' => $wp_editor_settings );
		
		*/

	return $options;
}