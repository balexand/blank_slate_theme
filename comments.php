<?php

// Render a comment </li> with the close tag omitted
function theme_comment_callback($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment;
  ?>
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
      <?php echo get_avatar( $comment, 50 ); ?>
      <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>" class="comment_permalink comment_date"><?php printf('On %1$s at %2$s', get_comment_date(),  get_comment_time() ); ?></a>
      <?php printf( '%s <span class="says">said:</span>', sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?> <?php edit_comment_link('(Edit)', ' '); ?>
      <div class="comment_body"><?php comment_text(); ?></div>

      <div class="reply">
        <?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
      </div>

      <?php if ( $comment->comment_approved == '0' ) : ?>
        <em class="comment-awaiting-moderation">Your comment is awaiting moderation.</em>
        <br />
      <?php endif; ?>
  <?php
}

// Render a pingback </li> with the close tag omitted
function themepingback_callback( $pingback, $args, $depth) {
  $GLOBALS['comment'] = $pingback;
  ?>
    <li>
      <?php comment_author_link(); ?><?php edit_comment_link('(Edit)', ' '); ?>
  <?php
}

?>

<div id="comments">
  <?php if ( post_password_required() ) : ?>
    <!-- Comments hidden for password protected posts -->
  <?php elseif ( have_comments() ) : ?>

    <h3 id="comments_title">Comments</h3>
    <ol class="comments_list">
      <?php wp_list_comments( array( 'callback' => 'theme_comment_callback', 'type' => 'comment' ) ); ?>
    </ol>

    <h3 id="pingbacks_title">Pingbacks</h3>
    <ol class="pingbacks_list">
      <?php wp_list_comments( array( 'callback' => 'theme_pingback_callback', 'type' => 'pings' ) ); ?>
    </ol>

  <?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
    <p>Comments are closed.</p>
  <?php endif; ?>

  <?php comment_form(); ?>
</div>