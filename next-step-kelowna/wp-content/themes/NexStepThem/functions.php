<?php 
require_once('wp-bootstrap-navwalker.php');
function nextStep_calm_resources()
{
  //Styles 
  wp_enqueue_style( 'pagination', get_stylesheet_uri().'/assets/css/pagination.css');
  wp_enqueue_style( 'style', get_stylesheet_uri());
  wp_enqueue_style( 'navbar', get_template_directory_uri() . '/assets/css/navbar.css', array(), '1.1', 'all');
  wp_enqueue_style( 'footer', get_template_directory_uri() . '/assets/css/footer.css', array(), '1.1', 'all');
  wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.1', 'all');
  wp_enqueue_style( 'contact-information', get_template_directory_uri() . '/assets/css/contact-information.css', array(), '1.1', 'all');
  wp_enqueue_style( 'blog-template', get_template_directory_uri() . '/assets/css/blog-template.css', array(), '1.1', 'all');
  wp_enqueue_style( 'about-us', get_template_directory_uri() . '/assets/css/about-us.css', array(), '1.1', 'all');

  wp_enqueue_script( 'script', get_template_directory_uri(), array ( 'jquery' ), 1.1, true);

}

function nextStep_calm_menu()
{
	//Nav menus
	register_nav_menus(array(
	'primary' => __('main-menu'),
	'footer' => __('footer') 
	));
}

function my_custom_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Custom', 'your-theme-domain' ),
            'id' => 'custom-side-bar',
            'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}
function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   * 
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('&laquo;'),
    'next_text'       => __('&raquo;'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {
    echo "<nav class='custom-pagination'>";
      echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
      echo $paginate_links;
    echo "</nav>";
  }

}
add_action( 'widgets_init', 'my_custom_sidebar' );
add_action('wp_enqueue_scripts', 'nextStep_calm_resources');
add_action( 'init', 'nextStep_calm_menu' );