<?php
/**
 * Actions, filters, and template tags for content related files
 *
 * @package AgriFlex
 */


/**
 * Register action hook: agriflex_before_loop
 *
 * Located in index.php, single.php, archive.php, category.php,
 * author.php, page.php, tag.php after the opening content div
 *
 * @since AgriFlex 2.0
 */
function agriflex_before_loop() {

  do_action( 'agriflex_before_loop' );

} // agriflex_before_loop

/**
 * Register action hook: agriflex_after_loop
 *
 * Located in index.php, single.php, archive.php, category.php,
 * author.php, page.php, tag.php before the closing content div
 *
 * @since AgriFlex 2.0
 */
function agriflex_after_loop() {

  do_action( 'agriflex_after_loop' );

} // agriflex_after_loop
