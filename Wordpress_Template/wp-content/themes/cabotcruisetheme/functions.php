<?php
//remove visual code editor tab
add_filter( 'user_can_richedit' , '__return_false', 50);
//creating navigation menu
register_nav_menu( 'siteNavigation', 'primaryNavigation');

?>