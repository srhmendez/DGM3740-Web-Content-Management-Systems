<?php
//remove visual code editor tab
add_filter( 'user_can_richedit' , '__return_false', 50);
//creating navigation menu
register_nav_menu( 'siteNavigation', 'primaryNavigation');


//adding read more... link to search entries
function wpdocs_excerpt_more( $search ) {
    return '<a href="'.get_the_permalink().'" rel="nofollow"  class="readMore">Read More...</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );
?>