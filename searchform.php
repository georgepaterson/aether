<?php
/**
 * @package WordPress
 * @subpackage Aether
 */
?>
<form action="/" method="get" accept-charset="utf-8" role="search">
	<label for="search-input">Search:</label>
	<input type="text" name="s" id="search-input" value="<?php the_search_query(); ?>" />
	<input type="submit" id="search-submit" role="button" />
</form>