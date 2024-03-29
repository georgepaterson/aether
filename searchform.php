<?php
/**
 * @package WordPress
 * @subpackage Aether
 */
?>
<form action="/" method="get" accept-charset="utf-8" id="search-form" class="search-form" role="search">
	<fieldset class="search-fieldset">
		<legend class="accessible">Quick serach form</legend>
		<label for="search-input" class="search-label accessible">Search:</label>
		<input type="search" name="s" id="search-input" class="search-input" value="<?php the_search_query(); ?>" />
		<input type="submit" id="search-submit" class="button" role="button" value="Search" />
	</fieldset>
</form>