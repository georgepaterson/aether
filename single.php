<?php
/**
 * @package WordPress
 * @subpackage Aether
 */
?>
<?php get_header(); ?>
	<div id="main" class="main" role="main">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1><?php the_title(); ?></h1>
				<time class="article-time" datetime="<?php the_time('Y-m-d')?>">Posted <?php the_time('F jS, Y') ?></time> 
				<p class="article-author">by <?php the_author() ?>.</p> 
				<?php if (comments_open()) : ?>
					<p class="article-comments"><a href="<?php the_permalink(); ?>#comments"><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></a></p>
				<?php endif; ?>
			</header>
			<?php the_content(''); ?>
			<footer>
				<ul>
					<li class="tags"><?php the_tags('Tags: ',', ',''); ?></li>
					<li class="category">Posted in 
						<?php if (function_exists('parentless_categories')) parentless_categories(','); 
						else the_category( ', ', 'multiple' ); ?>
					</li> 
				</ul>
			</footer>
		</article>
		<?php comments_template(); ?>
	<?php endwhile; endif; ?>
	</div>
	<?php get_footer(); ?>
</div>