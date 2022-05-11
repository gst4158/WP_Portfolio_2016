<?php
//-----------------------------------------------------------//
// 	           			Portfolio Taxonomy 		             //
//-----------------------------------------------------------//
// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_location_taxonomies', 0 );
// create two taxonomies, genres and writers for the post type "book"
function create_location_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Categories' ),
		'all_items'         => __( 'All Categories' ),
		'parent_item'       => __( 'Category' ),
		'parent_item_colon' => __( 'Categories:' ),
		'edit_item'         => __( 'Edit Category' ),
		'update_item'       => __( 'Update Category' ),
		'add_new_item'      => __( 'Add Movie Category' ),
		'new_item_name'     => __( 'New Movie Category' ),
		'menu_name'         => __( 'Categories' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'proftax' )
	);

	register_taxonomy( 'proftax', array( 'optionspage' ), $args );

	// Creation Default Terms for Taxonomy
	//$parent_term = term_exists('proftax'); // array is returned if taxonomy is given
	//$parent_term_id = $parent_term['term_id']; // get numeric term id

	// Set default category items
	$terms = array('Uncategorized', 'Web Design', 'Front-End Development', 'Wordpress Development', 'Programing Skills');
	foreach ( $terms as $term ) {
		wp_insert_term(
			$term, // the term 
			'proftax', // the taxonomy
			array(
				'description'=> ucfirst($term).' category',
				'slug' => pageSlug($term),
			)
		);	
	}
	/* get categories from a post type title
	$args = array( 'post_type' => 'movie', 'posts_per_page' => -1, 'order' => 'DESC');
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();
		wp_insert_term(
			get_the_title(), // the term 
			'locationtax', // the taxonomy
			array(
				'description'=> get_the_title().' category',
				'slug' => pageSlug(get_the_title()),
				'parent'=> $parent_term_id,
			)
		);
	endwhile; wp_reset_query();
	*/

}




?>