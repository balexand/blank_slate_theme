<?php

function theme_init_function() {
  add_theme_support('menus');

  register_sidebar( array(
		'name' => __( 'Primary Widget Area', 'twentyten' ),
		'id' => 'primary-widget-area',
		'description' => __( 'The primary widget area', 'twentyten' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}


add_action('init', 'theme_init_function');

function render_template_within_layout($name) {
  $insert_page_content_here = create_function('', 'require "templates/' . $name . '.php";');
  require 'templates/layout.php';
}
?>