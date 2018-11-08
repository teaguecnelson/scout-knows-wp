<?php
/**
* A Simple Category Template
* SK Food Category
*/

// Adding img to top of category pages
add_action( 'genesis_after_header', 'wpsitesdotnet_category_archives_image');
/** 
* @author Brad Dalton - WP Sites 
* @example http://wpsites.net/web-design/display-image-on-all-category-pages/ 
*/
function wpsitesdotnet_category_archives_image () {
if (is_category() && !is_paged() ) {
echo '<div class="cat-hero-img"><img src="https://s3.amazonaws.com/scoutknows-web-production/wp-content/uploads/2018/11/chowfood.jpg" alt="dog with tongue out waiting for food" width="100%" height="300" class="alignright size-full wp-image-38715" /></div>';
 
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
        FOOD SUBCATEGORIES <i class="icon ion-ios-paw"></i>
        </h2>
        <div class="three-up-home-top">
            <div class="three-up-top-section">
                <a href="/food/brand-reviews/"><img alt="pedigree dog food review" src="https://s3.amazonaws.com/scoutknows-web-production/wp-content/uploads/2018/11/Food-Review.jpg">
                <h3 class="three-up-top-section-title">
                    Brand Reviews >
                </h3></a>
                <p>Each dog food has different ingredients, nutritional values, and standards that it meets. We break down each dog food and assess what’s to like and not like, the nutritional value, what are the ingredients, and the bottom line about it it’s a good one or which other brands we would recommend instead.</p>
            </div>
                <div class="three-up-top-section">
                    <a href="/food/treats-bones/"><img alt="dog with treat on nose" src="https://s3.amazonaws.com/scoutknows-web-production/wp-content/uploads/2018/11/Treats.jpg">
                <h3 class="three-up-top-section-title">
                    Treats & Bones >
                </h3></a>
                <p>Dogs love treats, chewys, and bones. But while rewarding your dog for being good, make sure you are giving them something that is just as good for them! Different treats and bones have different benefits or concerns to be aware of.</p>
            </div>
                <div class="three-up-top-section">
                <a href="/food/specialty-diets-boosters/"><img alt="dog with man on a beach" src="https://s3.amazonaws.com/scoutknows-web-production/wp-content/uploads/2018/11/Special-Diet.jpg">
                <h3 class="three-up-top-section-title">
                    Specialty Diets & Boosters >
                </h3></a>
                <p>For the discerning dog parent looking to give their dog a health boost via diet or supplements, or for the for the dog parent of a dog with special diet needs. We break down different specialty diets, what their advantages are, and how to go about getting the right chow for your dog’s diet.</p>
            </div>
        </div>
    </div>
</div>';
  }
}

// Runs the Genesis loop.
genesis();