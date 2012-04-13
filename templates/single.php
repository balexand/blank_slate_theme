<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

  <?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?>

  <?php the_content(); ?>
</article>

<?php comments_template('', true); ?>