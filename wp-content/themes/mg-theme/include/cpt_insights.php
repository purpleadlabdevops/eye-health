<?php
function cpt_insights_fun() {
	register_post_type( 'cpt_insights',
		array(
			'labels' => array(
				'name' => __( 'insights' ),
				'singular_name' => __( 'insight' )
			),
			'public' => true,
			'rewrite' => array('slug' => 'cpt_insights'),
			'menu_position' => 5,
			'supports' => array( 'title', 'editor', 'thumbnail' )
		)
	);
}
add_action( 'init', 'cpt_insights_fun' );