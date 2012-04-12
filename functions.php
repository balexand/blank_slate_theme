<?php

function theme_init_function() {
  add_theme_support('menus');

  register_sidebar( array(
    'name' => 'Home page sidebar',
    'id' => 'primary-widget-area',
    'description' => 'Widgets that go on the sidebar.',
    'before_widget' => '<div id="%1$s" class="widget_container %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3 class="widget_title">',
    'after_title' => '</h3>',
  ) );
}


add_action('init', 'theme_init_function');

function render_template_within_layout($name) {
  $insert_page_content_here = create_function('', 'require "templates/' . $name . '.php";');
  require 'templates/layout.php';
}
?>