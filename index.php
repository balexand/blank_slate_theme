<?php

require_once("layout.php");

layout(function() { ?>
  
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
    <?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?>
    <?php the_content(); ?>
  <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
  <?php endif; ?>
  
  <?php get_sidebar() ?>
  
<?php }); // end layout

?>