<?php
/**
 * @package WordPress
 * @subpackage Aether
 */
?>
<div id="comments">
	<?php if ( post_password_required() ) : ?>
			<p class="alert"><?php _e( 'This post is password protected. Enter the password to view any comments.' ); ?></p>
		</div>
	<?php return; endif; ?>
	<?php if ( have_comments() ) : ?>
		<h2 id="comments-title"><?php
			printf( _n( 'One Response to %2$s', '%1$s Responses to %2$s', get_comments_number() ),
			number_format_i18n( get_comments_number() ), get_the_title() ); ?>
		</h2>		
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<ul id="comment-nav">
				<li class="nav-previous"><?php previous_comments_link() ?></li>
				<li class="nav-next"><?php next_comments_link() ?></li>
			</ul>
		<?php endif; ?>
		<ol class="comment-list">
			<?php wp_list_comments( array( 'callback' => 'aether_comments' ) ); ?>
		</ol>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
			<ul id="comment-nav">
				<li class="nav-previous"><?php previous_comments_link() ?></li>
				<li class="nav-next"><?php next_comments_link() ?></li>
			</ul>
		<?php endif; ?>
		<?php else : if ( ! comments_open() && have_comments() ) : ?>
			<p class="nocomments"><?php _e( 'Comments are closed.' ); ?></p>
		<?php endif; ?>
	<?php endif; ?>
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		<?php if ( is_user_logged_in() ) : ?>
			<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>.</p> 
			<p><a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out</a> &raquo;</p>
		<?php else : ?>
			<label for="author">Name <?php if ($req) echo "(required)"; ?></label>
			<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" <?php if ($req) echo "required"; ?> />
			<label for="email">Email <?php if ($req) echo "(required)"; ?></label>
			<input type="email" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" <?php if ($req) echo "required"; ?> />
			<p class="comment-notes">Your email address will not be published.</p>
			<label for="url">Website</label>
			<input type="url" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" />
		<?php endif; ?>
		<label for="comment">Comment</label>
		<textarea name="comment" id="comment" required="required"></textarea>
		<p>You may use these <abbr title="HyperText Markup Language">HTML</abbr>tags and attributes: <code><?php echo allowed_tags(); ?></code></p>
		<input type="submit" name="submit" id="send" value="Post comment" />
		<?php comment_id_fields(); ?>
		<?php do_action('comment_form', $post->ID); ?>
	</form>
</div>
