<?php
/**
* This is the template page for (three) sidebars
*
* @link URL
*
* @package WordPress
* @subpackage John Seo
* @since v1.0
*/
?>

<!-- The sidebar basically takes the 1/3 place on the right of the page, allows up to 3 sidebars -->
<aside class="col-md-4 blog-sidebar">

    <div class="p-3 mb-3 bg-light rounded">
        <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
            <div>
                <?php dynamic_sidebar( 'sidebar-1' ); ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="p-3 mb-3 bg-light rounded">
        <?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
            <div>
                <?php dynamic_sidebar( 'sidebar-2' ); ?>
            </div>
        <?php endif; ?>
    </div>

    <div class="p-3 mb-3 bg-light rounded">
        <?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
            <div>
                <?php dynamic_sidebar( 'sidebar-3' ); ?>
            </div>
        <?php endif; ?>
    </div>

</aside>