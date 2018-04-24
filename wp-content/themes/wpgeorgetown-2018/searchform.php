<?php
/**
 * Search form
 *
 * @package      WPGeorgetown2018
 * @author       Bill Erickson
 * @since        1.0.0
 * @license      GPL-2.0+
**/
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text">Search for</span>
		<input type="search" class="search-field" placeholder="Enter search terms&hellip;" value="<?php echo get_search_query(); ?>" name="s" title="Search for" />
	</label>
	<button type="submit" class="search-submit">Search</button>
</form>
