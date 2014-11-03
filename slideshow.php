<?php
/*
Plugin Name: Quick Slideshow
Plugin URI: https://www.wordpress.org
Description: Includes the custom content type slides. More to come?
Author: Brian Henderson
Version: 0.01
Author URI: https://www.linkedin.com/profile/view?id=7689315
*/


add_action( 'init', 'create_slide' );
function create_slide() {
	register_post_type( 'slide',
		array(
			'labels' => array(
				'name' => __( 'Slides' ),
				'singular_name' => __( 'Slide' )
			),
			'public' => true,
			'has_archive' => true,
			'hierarchical' => true,
			'supports' => array('title','editor','page-attributes'),
			'rewrite' => array('slug' => 'slides'),
		)
	);
}

?>