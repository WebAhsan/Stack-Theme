<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stack
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="blog-comment">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h4>
			<?php
			$stack_comment_count = get_comments_number();
			if ( '1' === $stack_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One Comment;%1$s&rdquo;', 'stack' ),
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			} else {
				printf( 
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s Comments', '%1$s Comments', $stack_comment_count, 'comments title', 'stack' ) ),
					number_format_i18n( $stack_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					'<span>' . wp_kses_post( get_the_title() ) . '</span>'
				);
			}
			?>
		</h4><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'walker'     => new stack_Walker_Comment(),
					'style'      => 'ol',
					'short_ping' => true,
					'avatar_size' => '60',
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'stack' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().





	$fields = array(
        'author' => sprintf(
            '<div class="col-md-4"><div class="form-group">%s %s</div> </div>',
            sprintf(
                
                ( $req ? $required_indicator : '' )
            ),
            sprintf(
                '<input class="form-control" id="author" name="author" placeholder="Name" />',
                esc_attr( $commenter['comment_author'] ),
                ( $req ? $required_attribute : '' )
            )
        ),
        'email'  => sprintf(
            '<div class="col-md-4"><div class="form-group">%s %s</div> </div>',
            sprintf(
                ( $req ? $required_indicator : '' )
            ),
            sprintf(
                '<input id="email" class="form-control" name="email" %s  size="30" placeholder="Email Address" aria-describedby="email-notes"%s />',
                ( $html5 ? 'type="email"' : 'type="text"' ),
                esc_attr( $commenter['comment_author_email'] ),
                ( $req ? $required_attribute : '' )
            )
        ),

		'url'    => sprintf(
			'<div class="col-md-4"><div class="form-group">%s %s</div> </div>',
			sprintf(
				''
			),
			sprintf(
				'<input id="url" class="form-control" placeholder="Website" name="url" %s value="%s" size="30" maxlength="200" />',
				( $html5 ? 'type="url"' : 'type="text"' ),
				esc_attr( $commenter['comment_author_url'] )
			)
		),

    );

	$fields = apply_filters( 'comment_form_default_fields', $fields );

	$defaults = array(

       
        'comment_field'        => sprintf(
            '  <div class="col-md-12">
			<div class="form-group"> %s %s</div></div>',
            sprintf(
                $required_indicator
            ),
            '<textarea id="message" name="comment" class="form-control"  cols="45" placeholder=" Message" rows="8" maxlength="65525"' . $required_attribute . '></textarea>',
			
        ),
		'fields'               => $fields,
		'label_submit'         => __( 'Post Comment' ),
		'class_form'           => 'row',
		'class_submit'         => 'btn btn-common',
		'submit_field'         => '<div class="support-btn mb-30">%1$s %2$s</div>',
	

	);


	comment_form($defaults);
	?>

</div><!-- #comments -->
