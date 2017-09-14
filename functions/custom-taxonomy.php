<?php

// FAQ Category
if ( ! function_exists( 'fr_register_taxonomy_faq_category' ) ) {
	// Register Custom Taxonomy
	function fr_register_taxonomy_faq_category() {

		$labels = array(
			'name'                       => _x( 'FAQ Categories', 'Taxonomy General Name', 'xscoop' ),
			'singular_name'              => _x( 'FAQ Category', 'Taxonomy Singular Name', 'xscoop' ),
			'menu_name'                  => __( 'Categories', 'xscoop' ),
			'all_items'                  => __( 'All FAQ Categories', 'xscoop' ),
			'parent_item'                => __( 'Parent FAQ Category', 'xscoop' ),
			'parent_item_colon'          => __( 'Parent FAQ Category:', 'xscoop' ),
			'new_item_name'              => __( 'New FAQ Category Name', 'xscoop' ),
			'add_new_item'               => __( 'Add New FAQ Category', 'xscoop' ),
			'edit_item'                  => __( 'Edit FAQ Category', 'xscoop' ),
			'update_item'                => __( 'Update FAQ Category', 'xscoop' ),
			'view_item'                  => __( 'View FAQ Category', 'xscoop' ),
			'separate_items_with_commas' => __( 'Separate FAQ categories with commas', 'xscoop' ),
			'add_or_remove_items'        => __( 'Add or remove FAQ categories', 'xscoop' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'xscoop' ),
			'popular_items'              => __( 'Popular FAQ Categories', 'xscoop' ),
			'search_items'               => __( 'Search FAQ Categories', 'xscoop' ),
			'not_found'                  => __( 'Not Found', 'xscoop' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
			'rewrite'					 => array('slug' => 'faq-category'),
		);
		register_taxonomy( 'fr_faq_category', array( 'fr_faq' ), $args );
	}
	add_action( 'init', 'fr_register_taxonomy_faq_category', 0 );
}

?>