<?php
/**
 * @package WordPress
 * @subpackage Aether
 */
?>
<?php
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
?>
<?php
if (function_exists('register_sidebar')) {
	register_sidebar( array(
		'name' => 'aside',
		'id' => 'aside',
		'before_widget' => '<div id="%1$s" class="%2$s widget">',
		'after_widget' => '</div>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>'
	));	
}	
?>
<?php
function register_my_menus() {
	register_nav_menus(
		array(
			'primary' => __('Primary'),
			'secondary' => __('Secondary'),
			'tertiary' => __('Tertiary')
		)
	);
}
function show_posts_nav() {
   global $wp_query;
   return ($wp_query -> max_num_pages > 1);
}
add_action('init', 'register_my_menus');
?>
<?php function aether_comments($comment, $args, $depth) { $GLOBALS['comment'] = $comment; ?>
	<li>
		<article <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
			<p class="comment-author vcard">
				<?php echo get_avatar($comment, $size='48', $default='<path_to_url>' ); ?>
				<?php printf(__('<span class="fn">%s</span> <span class="says">says:</span>'), get_comment_author_link()) ?>
			</p>
			<time class="comment-time" datetime="<?php the_time('Y-m-d')?>"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()) ?></a></time>
			<p class="comment-edit"><?php edit_comment_link(__('(Edit)'),'  ','') ?></p>
			<?php if ($comment->comment_approved == '0') : ?>
				<em><?php _e('Your comment is awaiting moderation.') ?></em>
			<?php endif; ?>
			<?php comment_text() ?>
		</article>
<?php } ?>