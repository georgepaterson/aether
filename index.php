<?php
/**
 * @package WordPress
 * @subpackage Aether
 */
?>
<?php get_header(); ?>
<div id="main" class="main" role="main">
	<?php if (is_search()) : ?>		
		<h1 class="title">Search Results: &ldquo;<?php the_search_query(); ?>&rdquo; 
			<?php if (get_query_var('paged')) echo ' &mdash; Page '.get_query_var('paged'); ?></h1>
	<?php endif; ?>
	<?php get_template_part('article'); ?>
</div>
<?php get_footer(); ?>