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

    <div id="container">
      <section id="content">
        <?php $insert_page_content_here(); ?>
      </section>

      <aside>
        <?php get_sidebar() ?>
      </aside>
    </div>

    <footer>
      <p>I'm the footer. Please edit or delete me.</p>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>