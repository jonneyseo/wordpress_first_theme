<?php
/**
* This is the template page for home and about page by the hierarchy of wordpress
*
* @link URL
*
* @package WordPress
* @subpackage John Seo
* @since v1.0
*/
?>

<?php get_header(); ?>

      <!-- This does not customize yet -->
      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Life is a journey.</h1>
          <p class="lead my-3">A journey that must be traveled no matter how bad the roads and accommodations.</p>
          <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Oliver Goldsmith</a></p>
        </div>
      </div>

      <div class="row mb-2">
        <!-- This will call the funtion from function.php, that shows the 2 latest posts in the cards. -->
        <?php echo do_shortcode('[lastest-post]'); ?>
        </div>
      </div>

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            <!-- The current menu name -->
            <?php single_post_title(); ?>
          </h3>

          <!-- This will show the posts -->
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <div class="blog-post">
            <p> <?php the_content(); ?> </p>
          </div>
          <hr>

          <?php endwhile; else: ?>
            <!-- When there is no post (content) -->
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
          <?php endif; ?>

          <!-- This does not work yet for this assignment -->
          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div>

        <?php get_sidebar(); ?>

          </div>
    </main>

    <?php get_footer(); ?>