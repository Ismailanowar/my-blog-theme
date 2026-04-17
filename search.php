<?php get_header(); ?>

<div class="container my-5">
    <div class="row">
        <div class="col-md-8">
            <h2 class="mb-4 border-bottom pb-3">
                <?php printf( __( 'Search Results for: %s', 'modern-blog' ), '<span class="text-primary">' . get_search_query() . '</span>' ); ?>
            </h2>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="card mb-3 border-0 border-bottom rounded-0">
                    <div class="card-body px-0">
                        <h3 class="h5"><a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none"><?php the_title(); ?></a></h3>
                        <p class="small text-muted mb-1"><?php echo get_the_date(); ?></p>
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            <?php endwhile; the_posts_pagination(); else : ?>
                <div class="alert alert-warning">
                    Sorry, nothing matched your search terms. Please try again with some different keywords.
                </div>
                <?php get_search_form(); ?>
            <?php endif; ?>
        </div>

        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>