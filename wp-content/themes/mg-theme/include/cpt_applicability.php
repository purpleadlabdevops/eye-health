<?php
function cpt_applicability_fun() {
	register_post_type( 'cpt_applicability',
		array(
			'labels' => array(
				'name' => __( 'Applicabilitys' ),
				'singular_name' => __( 'Applicability' )
			),
			'public' => true,
			'rewrite' => array('slug' => 'cpt_applicability'),
			'menu_position' => 5,
			'supports' => array( 'title', 'editor', 'thumbnail' )
		)
	);
}
add_action( 'init', 'cpt_applicability_fun' );