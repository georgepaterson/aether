<?php
/**
 * @package WordPress
 * @subpackage Aether
 */
?>
<?php get_header(); ?>
<div id="main" class="main" role="main">
	<?php if ( is_category() ) : ?>
		<h1><?php single_cat_title(); ?></h1>
	<?php elseif( is_tag() ) : ?>
		<h1>Posts Tagged &ldquo;<?php single_tag_title(); ?>&rdquo;</h1>
	<?php elseif (is_day()) : ?>
		<h1>Archive for <?php the_time('F jS, Y'); ?></h1>
	<?php elseif (is_month()) : ?>
		<h1>Archive for <?php the_time('F, Y'); ?></h1>
	<?php elseif (is_year()) : ?>
		<h1 class="archive-title">Archive for <?php the_time('Y'); ?></h1>
	<?php elseif (is_author()) : ?>
		<h1>Author Archive</h1>
	<?php elseif (isset($_GET['paged']) && !empty($_GET['paged'])) : ?>
		<h1>Blog Archives</h1>
	<?php endif; ?>
	<?php get_template_part('article'); ?>
</div>
<?php get_footer(); ?>