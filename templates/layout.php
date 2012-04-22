<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1" />

    <title><?php bloginfo('name'); wp_title( '|', true); ?></title>
    <link rel="stylesheet" href="<?php echo get_bloginfo("template_directory") . "/style.css"; ?>" type="text/css" media="screen">

    <!-- FIXME optionally point these to Feedburner -->
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="/feed/rss/" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="/feed/atom/" />

    <!-- old IE needs HTML5 shiv even if we don't need the rest of Modernizr's functionality -->
    <!--[if lt IE 9]>
      <script src="<?php echo get_bloginfo("template_directory"); ?>/javascripts/modernizr.js" type="text/javascript"></script>
    <![endif]-->

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
        <?php dynamic_sidebar('primary-widget-area'); ?>
      </aside>
    </div>

    <footer>
      <p>I'm the footer. Please edit or delete me.</p>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>