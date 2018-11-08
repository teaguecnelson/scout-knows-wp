<?php
/**
* A Simple Category Template
* SK Gear Category
*/

// Adding img to top of category pages
add_action( 'genesis_after_header', 'wpsitesdotnet_category_archives_image');
/** 
* @author Brad Dalton - WP Sites 
* @example http://wpsites.net/web-design/display-image-on-all-category-pages/ 
*/
function wpsitesdotnet_category_archives_image () {
if (is_category() && !is_paged() ) {
echo '<div class="cat-hero-img"><img src="https://s3.amazonaws.com/scoutknows-web-production/wp-content/uploads/2018/11/DOG-SNOW1.jpg" alt="dog hiking with a coat on" width="100%" height="300" class="alignright size-full wp-image-38715" /></div>';
 
  }
}

// Add custom opening div for post title
add_action( 'genesis_archive_title_descriptions', 'sk_do_post_title_before', 7 );
function sk_do_post_title_before() {
   echo '<div class="my-entry-title-arch">';
}

// Add custom closing div for post title
add_action( 'genesis_archive_title_descriptions', 'sk_do_post_title_after' );
function sk_do_post_title_after() {
   echo '</div>';
}

// Adding three up subcategories section
add_action( 'genesis_after_header', 'wpsitesdotnet_category_archives_image_t', 25);
function wpsitesdotnet_category_archives_image_t () {
if (is_category() && !is_paged() ) {
echo '
<div class="subcategory-wrapper">
    <div class="three-up-module">
        <h2 class="three-up-subcat-header">
        GEAR SUBCATEGORIES <i class="icon ion-ios-paw"></i>
        </h2>
        <div class="three-up-home-top">
            <div class="three-up-top-section">
                <a href="/gear/essentials/"><img alt="man with small dog in harnes on street" src="https://s3.amazonaws.com/scoutknows-web-production/wp-content/uploads/2018/11/Essentials.jpg">
                <h3 class="three-up-top-section-title">
                    Essentials >
                </h3></a>
                <p>The basic things every dog owner should have for their dog.</p>
            </div>
                <div class="three-up-top-section">
                    <a href="/gear/interesting-finds/"><img alt="dog with superman costume on" src="https://s3.amazonaws.com/scoutknows-web-production/wp-content/uploads/2018/11/I-Finds.jpg">
                <h3 class="three-up-top-section-title">
                    Interesting Finds >
                </h3></a>
                <p>The non-essentials, but well worth looking thorough!</p>
            </div>
                <div class="three-up-top-section">
                <a href="/gear/playtime/"><img alt="two dogs running in the water with a frisbee" src="https://s3.amazonaws.com/scoutknows-web-production/wp-content/uploads/2018/11/Playtime.jpg">
                <h3 class="three-up-top-section-title">
                    Playtime >
                </h3></a>
                <p>All things toys and paytime. This is dog excitement zone 101!</p>
            </div>
        </div>
    </div>
</div>';
  }
}

// Runs the Genesis loop.
genesis();