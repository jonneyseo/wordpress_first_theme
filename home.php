<?php
/**
* This is blog posts index page
*
* @link URL
*
* @package WordPress
* @subpackage John Seo
* @since v1.0
*/
?>


<?php get_header(); ?>

      <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic"><?php single_post_title(); ?></h1>
          <p class="lead my-3">Blog is informal diary-style text posts</p>
          <p class="lead my-3">Many blogs provide commentary on a particular subject or topic, ranging from politics to sports.</p>
        </div>
      </div>

      <main role="main" class="container">
        <div class="row">
          <div class="col-md-8 blog-main">
            <h3 class="pb-3 mb-4 font-italic border-bottom">
              Posts
            </h3>

            <!-- This will show all the posts -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <div class="blog-post">
              <div class="blog-thumbnail mb-2">
                <!-- For this page, placeholder image intentionally won't be shown if there is no thumbnail -->
                <?php
                if(has_post_thumbnail() ){
                the_post_thumbnail( 'medium_large', ['class' => 'img-fluid']);
                }
                ?>
              </div>
              <!-- Post title, time, excerpt, and permalink will be appeared accordingly -->
              <h2 class="blog_post"> <?php the_title(); ?> </h2>
              <p class="blog-post-meta"> <?php the_time('F jS, Y') ?> </p>
              <p> <?php the_excerpt(__('(more...)')); ?> </p>
              <div class="text-right">
                <a class="btn btn-primary" href="<?php echo get_permalink($ID); ?>"> READ MORE </a>
              </div>
            </div>
            <hr>

            <?php endwhile; else: ?>
            
            <!-- When there is no post made yet -->
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

      </main><!-- /.container -->

    <?php get_footer(); ?>