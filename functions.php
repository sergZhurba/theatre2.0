<?php

remove_filter('pre_term_description', 'wp_filter_kses');

remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );

show_admin_bar(false);

add_theme_support('post-thumbnails');
add_theme_support('post-formats', array(
	'aside',
	'image',
	'video',
	'gallery'
	));


register_nav_menu('primary', 'Primary menu');

