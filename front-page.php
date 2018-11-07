<?php

// // Adding img to top of category pages
// add_action( 'genesis_after_header', 'wpsitesdotnet_front_image');
// /** 
// * @author Brad Dalton - WP Sites 
// * @example http://wpsites.net/web-design/display-image-on-all-category-pages/ 
// */
// function wpsitesdotnet_front_image () {
// if (is_front_page() ) {
// echo '<div class="front-hero"><img src="https://s3.amazonaws.com/scoutknows-web-production/wp-content/uploads/2018/10/girl-on-lawn-with-dog.jpg" alt="girl with dog on lawn" width="100%" height="300" class="size-full wp-image-38715" /></div>';
 
//   }
// }

// Adds Front Page Widget Area (Registerd in functions.php)
add_action( 'genesis_meta', 'my_homepage_setup' );
/**
 * Add widget support for homepage.
 *
 */
function my_homepage_setup() {

	if ( is_front_page() && !is_paged()  && is_active_sidebar( 'front-page-top' ) ) {

		 //* Add front page top widget
		add_action( 'genesis_after_header', 'display_front_page_top_widget' );

	}
}

// Add markup to display front page widgets.
function display_front_page_top_widget() {

	genesis_widget_area( 'front-page-top', array(
		'before' => '<div class="featured-widget-area"><div class="wrap">',
		'after'  => '</div></div>',
	) );

}

genesis();