<?php get_header(); ?>

<div class="container my-5">
    <header class="archive-header mb-5 p-4 bg-light rounded shadow-sm">
        <h1 class="display-5"><?php the_archive_title(); ?></h1>
        <div class="archive-description text-muted">
            <?php the_archive_description(); ?>
        </div>
    </header>

    <div class="row">
        <div class="col-md-8">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="card mb-4 shadow-sm overflow-hidden">
                    <div class="row g-0 align-items-center">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="col-md-4">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'medium', ['class' => 'img-fluid w-100', 'style' => 'height: 200px; object-fit: cover;'] ); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        <div class="<?php echo has_post_thumbnail() ? 'col-md-8' : 'col-md-12'; ?>">
                            <div class="card-body">
                                <h3 class="h5"><a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none"><?php the_title(); ?></a></h3>
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; the_posts_pagination(); else : ?>
                <p>No posts found in this archive.</p>
            <?php endif; ?>
        </div>

        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>