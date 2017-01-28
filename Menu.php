# Menu-Fixed-Item-add

add_filter( 'wp_nav_menu_objects', 'restructure_menu_links', 10, 2 );

function restructure_menu_links( $items, $args ) {

    $new_links = array();

    $label = '<a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>';    // add your custom menu item content here

    // Create a nav_menu_item object
    $item = array(
        'title'            => $label,
        'menu_item_parent' => 0,
        'ID'               => '',
        'db_id'            => '',
        'url'              => $link,
        'classes'          => array( '' )
    );

    $new_links[] = (object) $item; // Add the new menu item to our array

    // insert item
    $location = 0;   // insert at 3rd place
    array_splice( $items, $location, 0, $new_links );

    return $items;
}


=============================================================================================================================
add_filter('wp_nav_menu_items','add_search_box_to_menu', 10, 2);
function add_search_box_to_menu( $items, $args ) {
    if( $args->theme_location == 'main-menu' )
        return $items."<li><form role='search' method='get' class='search-form' action='https://pixelll.com'><label><input class='search-field'  placeholder='write keywords' name='s' id='search' type='search'></label><input class='search-submit' value='Search' type='submit'></form></li>";

    return $items;
}
