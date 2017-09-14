<?php
// CPT Slide
if ( ! function_exists('fr_register_post_type_slide') ) {
	// Register Custom Post Type
	function fr_register_post_type_slide() {

		$labels = array(
			'name'                => _x( 'Slides', 'Post Type General Name', 'aegis' ),
			'singular_name'       => _x( 'Slide', 'Post Type Singular Name', 'xscoop' ),
			'menu_name'           => __( 'Slides', 'xscoop' ),
			'name_admin_bar'      => __( 'Slides', 'xscoop' ),
			'parent_item_colon'   => __( 'Parent Slide:', 'xscoop' ),
			'all_items'           => __( 'All Slides', 'xscoop' ),
			'add_new_item'        => __( 'Add New Slide', 'xscoop' ),
			'add_new'             => __( 'Add New', 'xscoop' ),
			'new_item'            => __( 'New Slide', 'xscoop' ),
			'edit_item'           => __( 'Edit Slide', 'xscoop' ),
			'update_item'         => __( 'Update Slide', 'xscoop' ),
			'view_item'           => __( 'View Slide', 'xscoop' ),
			'search_items'        => __( 'Search Slide', 'xscoop' ),
			'not_found'           => __( 'Not found', 'xscoop' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'xscoop' ),
		);
		$args = array(
			'label'               => __( 'Slide', 'xscoop' ),
			'description'         => __( 'Slide Image', 'xscoop' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'revisions', 'custom-fields', ),
			'taxonomies'          => array(),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 25,
			'menu_icon'			  => 'dashicons-format-gallery',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'rewrite'			  => array('slug' => 'slide'),
		);
		register_post_type( 'fr_slide', $args );
	}
	add_action( 'init', 'fr_register_post_type_slide', 0 );
}

// CPT Payment
if ( ! function_exists('fr_register_post_type_payment') ) {
	// Register Custom Post Type
	function fr_register_post_type_payment() {

		$labels = array(
			'name'                => _x( 'Payments', 'Post Type General Name', 'xscoop' ),
			'singular_name'       => _x( 'Payment', 'Post Type Singular Name', 'xscoop' ),
			'menu_name'           => __( 'Payments', 'xscoop' ),
			'name_admin_bar'      => __( 'Payments', 'xscoop' ),
			'parent_item_colon'   => __( 'Parent Payment:', 'xscoop' ),
			'all_items'           => __( 'All Payments', 'xscoop' ),
			'add_new_item'        => __( 'Add New Payment', 'xscoop' ),
			'add_new'             => __( 'Add New', 'xscoop' ),
			'new_item'            => __( 'New Payment', 'xscoop' ),
			'edit_item'           => __( 'Edit Payment', 'xscoop' ),
			'update_item'         => __( 'Update Payment', 'xscoop' ),
			'view_item'           => __( 'View Payment', 'xscoop' ),
			'search_items'        => __( 'Search Payment', 'xscoop' ),
			'not_found'           => __( 'Not found', 'xscoop' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'xscoop' ),
		);
		$args = array(
			'label'               => __( 'Payment', 'xscoop' ),
			'description'         => __( 'Payment Image', 'xscoop' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'revisions', 'custom-fields', ),
			'taxonomies'          => array(),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 25,
			'menu_icon'			  => 'dashicons-money',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'rewrite'			  => array('slug' => 'payment'),
		);
		register_post_type( 'fr_payment', $args );
	}
	add_action( 'init', 'fr_register_post_type_payment', 0 );
}

// CPT FAQ
if ( ! function_exists('fr_register_post_type_faq') ) {
	// Register Custom Post Type
	function fr_register_post_type_faq() {

		$labels = array(
			'name'                => _x( 'FAQs', 'Post Type General Name', 'xscoop' ),
			'singular_name'       => _x( 'FAQ', 'Post Type Singular Name', 'xscoop' ),
			'menu_name'           => __( 'FAQs', 'xscoop' ),
			'name_admin_bar'      => __( 'FAQs', 'xscoop' ),
			'parent_item_colon'   => __( 'Parent FAQ:', 'xscoop' ),
			'all_items'           => __( 'All FAQs', 'xscoop' ),
			'add_new_item'        => __( 'Add New FAQ', 'xscoop' ),
			'add_new'             => __( 'Add New', 'xscoop' ),
			'new_item'            => __( 'New FAQ', 'xscoop' ),
			'edit_item'           => __( 'Edit FAQ', 'xscoop' ),
			'update_item'         => __( 'Update FAQ', 'xscoop' ),
			'view_item'           => __( 'View FAQ', 'xscoop' ),
			'search_items'        => __( 'Search FAQ', 'xscoop' ),
			'not_found'           => __( 'Not found', 'xscoop' ),
			'not_found_in_trash'  => __( 'Not found in Trash', 'xscoop' ),
		);
		$args = array(
			'label'               => __( 'FAQ', 'xscoop' ),
			'description'         => __( 'FAQ Image', 'xscoop' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'trackbacks', 'revisions', 'custom-fields', ),
			'taxonomies'          => array(),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 25,
			'menu_icon'			  => 'dashicons-lightbulb',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'post',
			'rewrite'			  => array('slug' => 'faq'),
		);
		register_post_type( 'fr_faq', $args );
	}
	add_action( 'init', 'fr_register_post_type_faq', 0 );
}

?>