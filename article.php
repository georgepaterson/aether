<?php
/**
 * @package WordPress
 * @subpackage Aether
 */
?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			<p><time datetime="<?php the_time('Y-m-d')?>">Posted <?php the_time('F jS, Y') ?></time> 
				<span class="author">by <?php the_author() ?></span>. 
				<?php if (comments_open()) : ?>
					<a class="comment" href="<?php the_permalink(); ?>#comments"><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></a>
				<?php endif; ?>
			</p>
		</header>
		<?php the_content(''); ?>
		<footer>
			<ul>
				<?php the_tags('<li class="tags">Tags: ',', ','</li>'); ?>
				<li class="category">Posted in: 
					<?php if (function_exists('parentless_categories')) parentless_categories(','); 
					else the_category( ', ', 'multiple' ); ?>
				</li>
			</ul>
		</footer>
	</article>
<?php endwhile; else: ?>
	<p><?php _e("Sorry, but you are looking for something that isn't here."); ?></p>
<?php endif; ?>