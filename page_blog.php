<?php
/**
 *
 * Template Name: Blog
 * This file handles blog post listings within a page.
 *
 * @author Teague Nelson
 * @link http://wwww.thebudgetdiet.com
 * @package Genesis
 */
 
remove_action( 'genesis_before_loop', 'genesis_do_blog_template_heading' );
add_action( 'genesis_after_header', 'genesis_standard_loop' );
 
genesis();
