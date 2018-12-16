<?php

// thumbnail
add_theme_support('post-thumbnails');
// set_post_thumbnail_size( 1568, 9999 );

// 自動整形OFF
// remove_filter( 'the_content', 'wpautop' );


function new_excerpt_more( $more ) {
  return '';
}
add_filter('excerpt_more', 'new_excerpt_more');