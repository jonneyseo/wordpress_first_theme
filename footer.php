
<footer class="blog-footer">

  <p>
    <!-- This is where footer menu is shown -->
    <?php wp_nav_menu( array(
      'menu_class' => 'footer-menu-item',
      'theme_location' => 'footer-menu',
      'before' => '  |  ',
      'after' => '  |  '
    )); ?>
  </p>
      <p>Copyright 2020 John Seo @ BCIT New Media</p>
      <p><a href="#">Back to top</a></p>
    </footer>


    <script src="<?php echo get_stylesheet_directory_uri().'/assets/js/jquery-3.5.1.slim.min.js'?>"></script> 
    <script src="<?php echo get_stylesheet_directory_uri().'/assets/js/bootstrap.bundle.min.js'?>"></script> 

  </body>
</html>
