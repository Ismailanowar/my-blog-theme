<?php
/**
 * The sidebar containing the main widget area
 */
?>

<aside id="secondary" class="widget-area">
    <?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
        
        <?php dynamic_sidebar( 'main-sidebar' ); ?>

    <?php else : ?>
        
        <div class="widget card mb-4 border-0 shadow-sm">
            <div class="card-header bg-white border-bottom-0">
                <h5 class="mb-0">Search</h5>
            </div>
            <div class="card-body">
                <?php get_search_form(); ?>
            </div>
        </div>

        <div class="widget card mb-4 border-0 shadow-sm">
            <div class="card-header bg-white border-bottom-0">
                <h5 class="mb-0">Categories</h5>
            </div>
            <div class="card-body">
                <ul class="list-unstyled mb-0">
                    <?php wp_list_categories( array( 'title_li' => '' ) ); ?>
                </ul>
            </div>
        </div>

    <?php endif; ?>
</aside>