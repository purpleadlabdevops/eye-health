<?php
function cpt_hiring_fun() {
	register_post_type( 'cpt_hiring',
		array(
			'labels' => array(
				'name' => __( 'Hiring' ),
				'singular_name' => __( 'hiring' )
			),
			'public' => true,
			'rewrite' => array('slug' => 'cpt_hiring'),
			'menu_position' => 5,
			'supports' => array( 'title' )
		)
	);
}
add_action( 'init', 'cpt_hiring_fun' );