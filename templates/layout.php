<!DOCTYPE html>
<html>
  <head>
    <title><?php bloginfo('name'); wp_title( '|', true); ?></title>
    <link rel="stylesheet" href="<?php echo get_bloginfo("template_directory") . "/style.css"; ?>" type="text/css" media="screen">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <?php wp_nav_menu(); ?>

    <?php $insert_page_content_here(); ?>
  </body>
</html>