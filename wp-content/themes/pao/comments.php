<?php

/**
 *
 * Comment Form
 *
 * @package pao
 * @since 1.0.0
 * @version 1.1.0
 */

if ( post_password_required() ) {
	return;
} ?>

<?php // Comment list
$comment_list = get_comments_number( get_the_id() );
if( $comment_list > 0 ) : ?>
	<h3 class="comments-title"><?php printf( _nx( '1 comment', '<span class="count">%1$s comments</span>', get_comments_number(), 'comments', 'pao' ),
			number_format_i18n( get_comments_number() ) ); ?></h3>
	<?php wp_list_comments( array( 'callback' => 'pao_comment', 'style' => 'ul' ) ); ?>
<?php endif; ?>

<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
	<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php esc_html_e( 'comment navigation', 'pao' ); ?></h1>
		<div
			class="nav-previous"><?php previous_comments_link( esc_attr__( '&larr; older comments', 'pao' ) ); ?></div>
		<div class="nav-next"><?php next_comments_link( esc_attr__( 'newer comments &rarr;', 'pao' ) ); ?></div>
	</nav>
<?php endif; ?>


<?php

$fields = array(
	'author' => '<input required id="name" type="text" name="author" placeholder="' . esc_attr__( 'your name', 'pao' ) . '" size="30" tabindex="1" />',
	'email'  => '<input required id="email" type="email" name="email" placeholder="' . esc_attr__( 'your email', 'pao' ) . '" size="30" tabindex="2" />',
);

$comments_args = array(
	'id_form'              => 'contactform',
	'fields'               =>
		$fields,
	'comment_field'        => '<div class="form-group"><textarea required id="comment" aria-required="true" name="comment" placeholder="' . esc_attr__( 'your comment', 'pao' ) . '" rows="8" cols="60" tabindex="3"></textarea>',
	'must_log_in'          => '',
	'logged_in_as'         => '',
	'comment_notes_before' => '',
	'comment_notes_after'  => '',
	'title_reply'          => sprintf( esc_attr__( 'Write a comment', 'pao' ) ),
	'title_reply_to'       => esc_attr__( 'Leave a reply to %s', 'pao' ),
	'cancel_reply_link'    => esc_attr__( 'Cancel', 'pao' ),
	'label_submit'         => esc_attr__( 'Send Comment', 'pao' ),
	'submit_field'         => '</div><div class="input-wrapper clearfix">%1$s %2$s<span id="message"></span></div>',
);
?>
<div class="comments-form">
	<?php comment_form( $comments_args ); ?>
</div>
