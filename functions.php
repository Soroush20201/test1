
<?php // Add support for Featured Images
add_theme_support('post-thumbnails');

add_theme_support('page-templates');
add_theme_support('menus');

function register_my_menus() {
    register_nav_menus(
        array(
            'top_menu' => __('Top Menu', 'theme')
        )
    );
}
add_action('after_setup_theme', 'register_my_menus');


function load_stylesheets()
{
    wp_enqueue_style('font', get_template_directory_uri().'/css/font-awesome.min.css',array(),1,'all');

    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css',array(),1,'all');

    wp_enqueue_style('style', get_template_directory_uri().'/style.css',array(),1,'all');

    wp_enqueue_style('owl.carousel', get_template_directory_uri().'/css/owl.carousel.css',array(),1,'all');

    wp_enqueue_style('owltheme', get_template_directory_uri().'/css/owl.theme.default.css',array(),1,'all');

    wp_enqueue_style('custom', get_template_directory_uri().'/custom.css',array(),1,'all');
    
}

add_action('wp_enqueue_scripts','load_stylesheets');



//jqouery sctipts

wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery.js',array(),1,1,1);
wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js',array(),1,1, 1);
wp_enqueue_script('carousel', get_template_directory_uri().'/js/owl.carousel.min.js',array(),1,1,1);
wp_enqueue_script('index', get_template_directory_uri().'/js/index.js',array(),1,1,1);
wp_enqueue_script('custom', get_template_directory_uri().'/js/custom.js',array(),1,1,1);



     


function custom_store_post_type() {
    $labels = array(
        'name' => 'فروشگاه ها',
        'singular_name' => 'فروشگاه',
        'add_new' => 'افزودن',
        'add_new_item' => 'افزودن فروشگاه جدید',
        'edit_item' => 'ویرایش صفحه فروشگاه',
        'new_item' => 'صفحه فروشگاه جدبد',
        'view_item' => 'نمایش صفحه فروشگاه',
        'search_items' => 'جستجوی صفحات فروشگاه ها',
        'not_found' => 'هیچ صفحه فروشگاهی یافت نشد',
        'not_found_in_trash' => 'هیچ صفحه فروشگاهی در زباله دان پیدا نشد',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'store-post-type'), // Customize the slug
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5, // Position in the admin menu
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'), // Add or remove features
    );

    register_post_type('store_post_type', $args);
}
add_action('init', 'custom_store_post_type');

function custom_city_post_type() {
    $labels = array(
        'name' => 'شهر ها',
        'singular_name' => 'شهر',
        'add_new' => 'افزودن',
        'add_new_item' => 'افزودن شهر جدید',
        'edit_item' => 'ویرایش صفحه شهر',
        'new_item' => 'صفحه شهر جدید',
        'view_item' => 'نمایش صفحه شهر',
        'search_items' => 'جستجوی صفحه ی شهر ها',
        'not_found' => 'هیچ صفحه شهری یافت نشد',
        'not_found_in_trash' => 'هیچ صفحه شهری در زباله دان یافت نشد',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'city-post-type'), // Customize the slug
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 6, // Position in the admin menu
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'comments'), // Add or remove features
    );

    register_post_type('city_post_type', $args); // Change the post type name here
}
add_action('init', 'custom_city_post_type');


// function create_relationship_taxonomy() {
//     $args = array(
//         'hierarchical' => false,
//         'labels' => array(
//             'name' => 'Cities',
//             'singular_name' => 'City',
//         ),
//         'show_ui' => true,
//     );
//     register_taxonomy('store_city', 'store_post_type', $args);
// }
// add_action('init', 'create_relationship_taxonomy');

// function show_relationship_taxonomy() {
//     $post_types = array('store_post_type'); // Replace with your custom post type slug

//     foreach ($post_types as $post_type) {
//         add_meta_box(
//             'store_city_div',
//             'Cities',
//             'post_categories_meta_box', // Corrected function name
//             $post_type,
//             'side', // Change the position if needed
//             'core'
//         );
//     }
// }
// add_action('add_meta_boxes', 'show_relationship_taxonomy');
function add_city_metabox() {
    add_meta_box(
        'store_city_metabox',
        'City', // Metabox title
        'display_store_city_metabox',
        'store_post_type', // Your 'Store' post type slug
        'side', // Change the position if needed
        'default'
    );
}
add_action('add_meta_boxes', 'add_city_metabox');

function display_store_city_metabox($post) {
    // Fetch the selected city for the current store
    $selected_city = get_post_meta($post->ID, 'store_city', true);

    // Query to retrieve all cities
    $cities = get_posts(array(
        'post_type' => 'city_post_type', // Your 'City' post type slug
        'numberposts' => -1,
    ));

    // Display a dropdown to select the city for the store
    echo '<label for="store_city">Select a City:</label><br>';
    echo '<select id="store_city" name="store_city">';
    echo '<option value="">Select a City</option>';

    foreach ($cities as $city) {
        $selected = ($selected_city == $city->ID) ? 'selected' : '';
        echo '<option value="' . $city->ID . '" ' . $selected . '>' . $city->post_title . '</option>';
    }

    echo '</select>';
}

function save_store_city($post_id) {
    if (array_key_exists('store_city', $_POST)) {
        update_post_meta($post_id, 'store_city', sanitize_text_field($_POST['store_city']));
    }
}
add_action('save_post', 'save_store_city');




function add_city_column($columns) {
    // Add a 'City' column
    $columns['store_city'] = 'City';
    return $columns;
}
add_filter('manage_store_post_type_posts_columns', 'add_city_column');

function display_city_column($column, $post_id) {
    if ($column === 'store_city') {
        // Get the city ID for the current store
        $city_id = get_post_meta($post_id, 'store_city', true);

        if ($city_id) {
            // Get city details
            $city = get_post($city_id);

            // Display the city name with a link to the city details
            echo '<a href="' . get_edit_post_link($city_id) . '">' . esc_html($city->post_title) . '</a>';
        } else {
            echo 'No City Assigned';
        }
    }
}
add_action('manage_store_post_type_posts_custom_column', 'display_city_column', 10, 2);



// add_filter('template_redirect', function () {
//     ob_start(null, 0, 0);
//   });
?>