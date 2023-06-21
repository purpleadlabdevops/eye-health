<?php
function cpt_doctors_fun() {
	register_post_type( 'cpt_doctors',
		array(
			'labels' => array(
				'name' => __( 'Doctors' ),
				'singular_name' => __( 'doctor' )
			),
			'public' => true,
			'rewrite' => array('slug' => 'cpt_doctors'),
			'menu_position' => 5,
			'supports' => array( 'title', 'editor', 'thumbnail' )
		)
	);
}
add_action( 'init', 'cpt_doctors_fun' );