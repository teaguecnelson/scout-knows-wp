<?php
/**
* A Simple Category Template
* SK Insurance Category
*/

// Adding img to top of category pages
add_action( 'genesis_after_header', 'wpsitesdotnet_category_archives_image');
/** 
* @author Brad Dalton - WP Sites 
* @example http://wpsites.net/web-design/display-image-on-all-category-pages/ 
*/
function wpsitesdotnet_category_archives_image () {
if (is_category() && !is_paged() ) {
echo '<div class="cat-hero-img"><img src="https://s3.amazonaws.com/scoutknows-web-production/wp-content/uploads/2018/11/Insurancetop.jpg" alt="dog with orange and white fur sleeping on ground" width="100%" height="300" class="alignright size-full wp-image-38715" /></div>';
 
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
        INSURANCE SUBCATEGORIES <i class="icon ion-ios-paw"></i>
        </h2>
        <div class="three-up-home-top">
            <div class="three-up-top-section">
                <a href="/insurance/compare-plans/"><img alt="vet clipping dog toe nails" src="https://s3.amazonaws.com/scoutknows-web-production/wp-content/uploads/2018/11/vet.jpg">
                <h3 class="three-up-top-section-title">
                    Compare Plans >
                </h3></a>
                <p>Different Plans from different insurers offer different things at different price points. Find out which plan is right for you and your dog.</p>
            </div>
                <div class="three-up-top-section">
                    <a href="/insurance/coverage/"><img alt="weiner dog on a wooden pier" src="https://s3.amazonaws.com/scoutknows-web-production/wp-content/uploads/2018/11/coverage.jpg">
                <h3 class="three-up-top-section-title">
                    Coverage >
                </h3></a>
                <p>Pet Insurance (especially for dogs) works a little differently than insurance for people. Find out what is covered under different plans and what add ons might be good to get.</p>
            </div>
                <div class="three-up-top-section">
                <a href="/insurance/stories/"><img alt="man with dog on knealing on his lawn" src="https://s3.amazonaws.com/scoutknows-web-production/wp-content/uploads/2018/11/stories.jpg">
                <h3 class="three-up-top-section-title">
                    Stories >
                </h3></a>
                <p>Real life stories from people on how their pet insurance came into play when their dog needed help.</p>
            </div>
        </div>
    </div>
</div>';
  }
}

// Runs the Genesis loop.
genesis();