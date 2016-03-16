<?php
// Register Video post type
function videos() {

	$labels = array(
		'name'                  => _x( 'Videoer', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Video', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Video', 'text_domain' ),
		'name_admin_bar'        => __( 'Video', 'text_domain' ),
		'archives'              => __( 'Videoarkiv', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Alle Video', 'text_domain' ),
		'add_new_item'          => __( 'Tilføj ny Video', 'text_domain' ),
		'add_new'               => __( 'Tilføj Ny', 'text_domain' ),
		'new_item'              => __( 'Ny Video', 'text_domain' ),
		'edit_item'             => __( 'Rediger Video', 'text_domain' ),
		'update_item'           => __( 'Opdater Video', 'text_domain' ),
		'view_item'             => __( 'Se Video', 'text_domain' ),
		'search_items'          => __( 'Søg efter Video', 'text_domain' ),
		'not_found'             => __( 'Ikke fundet', 'text_domain' ),
		'not_found_in_trash'    => __( 'Ikke fundet i papirkurv', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Video', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'videos', $args );

}
add_action( 'init', 'videos', 0 );

// Produkter
	// Register Custom Post Type
	function post_catalog() {

	  $labels = array(
	    'name'                => 'Produkter',
	    'singular_name'       => 'Produkt',
	    'menu_name'           => 'Produkter',
	    'parent_item_colon'   => 'Nuværende produkt',
	    'all_items'           => 'Alle produkter',
	    'view_item'           => 'Vis produkt',
	    'add_new_item'        => 'Tilføj nyt produkt',
	    'add_new'             => 'Tilføj ny',
	    'edit_item'           => 'Rediger produkt',
	    'update_item'         => 'Opdater produkt',
	    'search_items'        => 'Søg produkt',
	    'not_found'           => 'Ikke fundet',
	    'not_found_in_trash'  => 'Ikke fundet i papirkurven',
	  );
	  $rewrite = array(
	    'slug'                => 'produkt',
	    'with_front'          => true,
	    'pages'               => true,
	    'feeds'               => true,
	  );
	  $args = array(
	    'label'               => 'post_catalog',
	    'description'         => 'Produkter',
	    'labels'              => $labels,
	    'supports'            => array( ),
	    'taxonomies'          => array( 'catalog_categories' ),
	    'hierarchical'        => false,
	    'public'              => true,
	    'show_ui'             => true,
	    'show_in_menu'        => true,
	    'show_in_nav_menus'   => true,
	    'show_in_admin_bar'   => true,
	    'menu_position'       => 5,
			'menu_icon'           => 'dashicons-cart',
	    'can_export'          => true,
	    'has_archive'         => true,
	    'exclude_from_search' => false,
	    'publicly_queryable'  => true,
	    'capability_type'     => 'page',
	    'rewrite'             => $rewrite,
	  );
	  register_post_type( 'post_catalog', $args );

	}
	// Register Custom Taxonomy
	function catalog_categories() {

	  $labels = array(
	    'name'                       => _x( 'Produkt kategorier', 'Taxonomy General Name', 'text_domain' ),
	    'singular_name'              => _x( 'Produkt kategori', 'Taxonomy Singular Name', 'text_domain' ),
	    'menu_name'                  => __( 'Produkt kategorier', 'text_domain' ),
	    'all_items'                  => __( 'Alle kategorier', 'text_domain' ),
	    'parent_item'                => __( 'Nuværende kategori', 'text_domain' ),
	    'parent_item_colon'          => __( 'Nuværende kategori:', 'text_domain' ),
	    'new_item_name'              => __( 'Ny kategori', 'text_domain' ),
	    'add_new_item'               => __( 'Tilføj ny kategori', 'text_domain' ),
	    'edit_item'                  => __( 'Rediger kategori', 'text_domain' ),
	    'update_item'                => __( 'Opdater kategori', 'text_domain' ),
	    'separate_items_with_commas' => __( '', 'text_domain' ),
	    'search_items'               => __( '', 'text_domain' ),
	    'add_or_remove_items'        => __( 'Tilføj og slet kategorier', 'text_domain' ),
	    'choose_from_most_used'      => __( '', 'text_domain' ),
	    'not_found'                  => __( 'Ikke fundet', 'text_domain' ),
	  );
	  $rewrite = array(
	    'slug'                       => 'produkter',
	    'with_front'                 => true,
	    'hierarchical'               => false,
	  );
	  $args = array(
	    'labels'                     => $labels,
	    'hierarchical'               => true,
	    'public'                     => true,
	    'show_ui'                    => true,
	    'show_admin_column'          => true,
	    'show_in_nav_menus'          => true,
	    'show_tagcloud'              => true,
	    'rewrite'                    => $rewrite,
	  );
	  register_taxonomy( 'catalog_categories', array( 'post_catalog' ), $args );

	}

	// Hook into the 'init' action
	if (get_field('enable_produkter', 'option')) {
		add_action( 'init', 'catalog_categories', 0 );
		add_action( 'init', 'post_catalog', 0 );
	}

// Medarbejdere
function medarbejder_post_type() {

	$labels = array(
		'name'                => _x( 'Medarbejdere', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Medarbejder', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Medarbejdere', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'Alle Medarbejdere', 'text_domain' ),
		'view_item'           => __( 'Se Medarbejder', 'text_domain' ),
		'add_new_item'        => __( 'Tilføj Ny Medarbejder', 'text_domain' ),
		'add_new'             => __( 'Tilføj Ny', 'text_domain' ),
		'edit_item'           => __( 'Rediger Medarbejder', 'text_domain' ),
		'update_item'         => __( 'Opdater medarbejder', 'text_domain' ),
		'search_items'        => __( 'Søg efter medarbejder', 'text_domain' ),
		'not_found'           => __( 'Ingen fundet', 'text_domain' ),
		'not_found_in_trash'  => __( 'Ingen Medarbejder profiler fundet i Papirkurven', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'medarbejder', 'text_domain' ),
		'description'         => __( 'Klinikkens medarbejdere', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'page-attributes', 'title', 'editor'),
		'taxonomies'          => array( 'employees_categories' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'menu_icon'           => 'dashicons-admin-users',
	);
	register_post_type( 'medarbejder', $args );

}
// Register Custom Taxonomy
function employees_categories() {

	$labels = array(
		'name'                       => _x( 'Medarbejder kategorier', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Medarbejder kategori', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Medarbejder kategorier', 'text_domain' ),
		'all_items'                  => __( 'Alle kategorier', 'text_domain' ),
		'parent_item'                => __( 'Nuværende kategori', 'text_domain' ),
		'parent_item_colon'          => __( 'Nuværende kategori:', 'text_domain' ),
		'new_item_name'              => __( 'Ny kategori', 'text_domain' ),
		'add_new_item'               => __( 'Tilføj ny kategori', 'text_domain' ),
		'edit_item'                  => __( 'Rediger kategori', 'text_domain' ),
		'update_item'                => __( 'Opdater kategori', 'text_domain' ),
		'separate_items_with_commas' => __( '', 'text_domain' ),
		'search_items'               => __( '', 'text_domain' ),
		'add_or_remove_items'        => __( 'Tilføj og slet kategorier', 'text_domain' ),
		'choose_from_most_used'      => __( '', 'text_domain' ),
		'not_found'                  => __( 'Ikke fundet', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                       => 'Medarbejderer',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'employees_categories', array( 'medarbejder' ), $args );

}

if (get_field('enable_employees', 'option')) {
	// Hook into the 'init' action
	add_action( 'init', 'employees_categories', 0 );
	// Hook into the 'init' action
	add_action( 'init', 'medarbejder_post_type', 0 );
}

// Register Custom Post Type
function global_news() {

	$labels = array(
		'name'                  => _x( 'Globale nyheder', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Global nyhed', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Globale nyheder', 'text_domain' ),
		'name_admin_bar'        => __( 'Globale nyheder', 'text_domain' ),
		'archives'              => __( 'Nyhedsarkiv', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent item', 'text_domain' ),
		'all_items'             => __( 'Alle nyheder', 'text_domain' ),
		'add_new_item'          => __( 'Tilføj ny nyhed', 'text_domain' ),
		'add_new'               => __( 'Tilføj ny', 'text_domain' ),
		'new_item'              => __( 'Ny nyhed', 'text_domain' ),
		'edit_item'             => __( 'Ret nyhed', 'text_domain' ),
		'update_item'           => __( 'Opdater nyhed', 'text_domain' ),
		'view_item'             => __( 'Vis nyhed', 'text_domain' ),
		'search_items'          => __( 'Find nyhed', 'text_domain' ),
		'not_found'             => __( 'Ikke fundet', 'text_domain' ),
		'not_found_in_trash'    => __( 'Ikke fundet i papirkurven', 'text_domain' ),
		'featured_image'        => __( 'Nyhedsbillede', 'text_domain' ),
		'set_featured_image'    => __( 'Tilføj nyhedsbillede', 'text_domain' ),
		'remove_featured_image' => __( 'Fjern nyhedsbillede', 'text_domain' ),
		'use_featured_image'    => __( 'Brug nyhedsbilllede', 'text_domain' ),
		'insert_into_item'      => __( 'Indsæt i nyhed', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Upload til nyhed', 'text_domain' ),
		'items_list'            => __( 'Nyhedsliste', 'text_domain' ),
		'items_list_navigation' => __( '', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Global nyhed', 'text_domain' ),
		'description'           => __( 'Globale nyheder på tværs af sites.', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', ),
		'rewrite'            	=> array( 'slug' => 'global' ),
		'show_in_rest'      	=> true,
        'rest_base'          	=> 'global-api',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
		'taxonomies'            => array( ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'query_var'          	=> true,
		'menu_position'         => 3,
		'menu_icon'             => 'dashicons-networking',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
	);
	register_post_type( 'global_news', $args );

}
add_action( 'init', 'global_news', 0 );
