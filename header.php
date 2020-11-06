

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>John Seo's Blog Template</title>

    <!-- get_stylesheet_directory function maps ans returns the correct css and js files' roots -->
    <link href="<?php echo get_stylesheet_directory_uri().'/assets/css/bootstrap.min.css'; ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="<?php echo get_stylesheet_directory_uri().'/assets/css/common.css'; ?>" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=PT+Serif:wght@400;700&display=swap" rel="stylesheet">
   </head>

   <body>

    <div class="container">
      <header>
          <div class="blog-header-logo text-center pt-2">John's World
          </div>
      </header>

      <!-- wp_nav_menu() displays a navigation menu  -->
      <?php wp_nav_menu( array(
        'theme_location' => 'navbar-menu',
        'container_class' => 'nav-scroller py-1 mb-2',
        'menu_class' => 'nav justify-content-center',
        'add_a_class' => 'text-muted',
        'add_link_class' => 'p-2 text-muted' 
       ));
      ?>