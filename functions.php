<?php
/**
* Theme functions and definitions
*
* @link URL
*
* @package WordPress
* @subpackage John Seo
* @since v1.0
*/


    // This is to add featured images
    add_theme_support( 'post-thumbnails' );

    // This is to register menus (navbar and footer)
    function john_menus_init(){
        register_nav_menus(
            array(
                'navbar-menu' => __( 'Navbar Menu' ),
                'footer-menu' => __( 'Footer Menu' )
            )
        );
    }
    add_action( 'init', 'john_menus_init' );

    // This custom function returns the adjusted class list
    function add_menu_item_classes($classes, $item, $args) {
        if(isset($args->add_a_class)) {
            $classes[] = $args->add_a_class;
        }
        return $classes;
    }
    // And the filter hook 
    add_filter('nav_menu_css_class', 'add_menu_item_classes', 10, 3);

    // Another function and hook to add classes to menu links
    function add_class_to_all_menu_anchors( $atts, $item, $args ) {
        $atts['class'] = $args->add_link_class;	
        return $atts;
    }
    add_filter( 'nav_menu_link_attributes', 'add_class_to_all_menu_anchors', 10, 3);

    // This shortens the length of excerpt from default 55 to 20
    function mytheme_custom_excerpt_length( $length ) {
        return 20;
    }
    add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );

    // In page.php, the latest 2 posts will be shown as cards
    function latest_post() {

    $args = array(
        'posts_per_page' => 2, 
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_type' => 'post',
        'post_status' => 'publish'
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
    ?>
        <!-- This is how the cards are structured -->
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-success"><?php the_category( ' ' ); ?></strong>
              <h3 class="mb-1">
                <a class="text-dark" href="<?php echo get_permalink($ID); ?>"><?php the_title(); ?></a>
              </h3>
              <div class="mb-2"><?php the_time('Y-m-d') ?></div>
                <p class="card-text mb-auto"><?php the_excerpt(__('(more...)')); ?></p>
                <a href="<?php echo get_permalink($ID); ?>">Continue reading</a>
              </div>
              <div class="card-img-right flex-auto align-self-center">
                <?php if(has_post_thumbnail() ) {
                        the_post_thumbnail('thumbnail');
                        } 
                ?> 
              </div>
            </div>
          </div>
    <?php
        endwhile;
    endif;
    }

    add_shortcode('lastest-post', 'latest_post');


    // Here three sidebars are registered
    function john_widgets_init() {
    //common arguments
    $shared_args = array(
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
        'before_widget' => '<div class="widget-copy">',
        'after_widget' => '</div>',
        );

        register_sidebar(
            array_merge(
                $shared_args,
                    array(
                        'name' => __( 'Sidebar 1', 'John' ),
                        'id' => 'sidebar-1',
                        'description' => __( 'Widgets in this area will be displayed in the first column on the side.', 'John' ),
                    )
            )
        );

        register_sidebar(
            array_merge(
                $shared_args,
                    array(
                        'name' => __( 'Sidebar 2', 'John' ),
                        'id' => 'sidebar-2',
                        'description' => __( 'Widgets in this area will be displayed in the second column on the side.', 'John' ),
                    )
            )
        );

        register_sidebar(
            array_merge(
                $shared_args,
                    array(
                        'name' => __( 'Sidebar 3', 'John' ),
                        'id' => 'sidebar-3',
                        'description' => __( 'Widgets in this area will be displayed in the third column on the side.', 'John' ),
                    )
            )
        );
    }
    // An action hook which is triggered by the init function
    add_action( 'widgets_init', 'john_widgets_init' );

