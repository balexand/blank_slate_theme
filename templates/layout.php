<!DOCTYPE html>
<html>
  <head>
    <title><?php bloginfo('name'); wp_title( '|', true); ?></title>
    <link rel="stylesheet" href="<?php echo get_bloginfo("template_directory") . "/style.css"; ?>" type="text/css" media="screen">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header>
      <h1><?php bloginfo("name"); ?></h1>
      <?php wp_nav_menu(array( 'container'=> 'nav')); ?>
    </header>

    <?php $insert_page_content_here(); ?>

    <?php wp_footer(); ?>
  </body>
</html>