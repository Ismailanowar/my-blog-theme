<?php get_header(); ?>

<div class="container my-5">
    <div class="row">
        
        <div class="col-md-8">
            <h2 class="mb-4">Latest Posts</h2>
            
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="col-md-12 mb-4">
            <div class="card h-100 shadow-sm overflow-hidden">
                <div class="row g-0 align-items-center"> <?php if ( has_post_thumbnail() ) : ?>
                        <div class="col-md-4">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'medium_large', [
                                    'class' => 'img-fluid w-100', 
                                    'style' => 'height: 250px; object-fit: cover;'
                                ] ); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <div class="<?php echo has_post_thumbnail() ? 'col-md-8' : 'col-md-12'; ?>">
                        <div class="card-body">
                            <h3 class="card-title h4">
                                <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <p class="text-muted small mb-2">
                                By <?php the_author(); ?> | <?php echo get_the_date(); ?>
                            </p>
                            <div class="card-text mb-3">
                                <?php the_excerpt(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm">Read More</a>
                        </div>
                    </div>

                </div> </div> </div>
    <?php endwhile; else : ?>
        <div class="col-12">
            <p>No posts found.</p>
        </div>
    <?php endif; ?>
</div>
     <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div> </div> </div> <?php get_footer(); ?>