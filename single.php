<?php
/**
* This is the template page for a single post
*
* @link URL
*
* @package WordPress
* @subpackage John Seo
* @since v1.0
*/
?>


<?php get_header(); ?>

      <!-- For a banner image JS-->
      <div class="single-banner m-3">
      <!-- If there is a thumbnail upladed by a user, that will be shown with the full size, creating the img-banner class -->
      <?php
        if(has_post_thumbnail() ){
          the_post_thumbnail( 'full', ['class' => 'img-fluid']);
        }
        else{
        // placeholder image will be displayed
          echo '<img class="img-fluid" src="'.
          get_stylesheet_directory_uri().'/assets/images/no-image.png"> ';
        }
      ?>
      </div>

    <main role="main" class="container">
      <div class="row">
        <!-- This 2/3 place is for the post -->

        <div class="col-md-8 blog-main">

          <!-- Posts are shown with this loop, in this order: title, time, content -->
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <div class="blog-post">
            <h2 class="blog_post pt-1 pb-1"> <?php the_title(); ?> </h2>
            <p class="blog-post-meta"> <?php the_time('F jS, Y') ?> </p>
            <hr class="blog_post_line">
            <p> <?php the_content(); ?> </p>
          </div>
          <hr>

          <?php endwhile; else: ?>
            <!-- When there is no post -->
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
          <?php endif; ?>

          <!-- This does not work for this assignment -->
          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div>

        <?php get_sidebar(); ?>

      </div>

    </main>

    <?php get_footer(); ?>