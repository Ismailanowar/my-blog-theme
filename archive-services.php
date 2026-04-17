<?php get_header(); ?>

<div class="container my-5">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold">Our Services</h1>
        <p class="text-muted">Below is a list of the services we provide.</p>
    </div>

    <div class="row">
        <?php 
        $args = array(
            'post_type' => 'services',
            'posts_per_page' => 6
        );
        $services_query = new WP_Query($args);

        if ($services_query->have_posts()) : 
            while ($services_query->have_posts()) : $services_query->the_post(); 
        ?>
            <div class="col-md-6 mb-4">
                <div class="card h-100 border-0 shadow-sm text-center p-3">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="mb-3">
                            <?php the_post_thumbnail('medium', ['class' => 'img-fluid rounded-circle', 'style' => 'width: 100px; height: 100px; object-fit: cover;']); ?>
                        </div>
                    <?php endif; ?>
                    
                    <div class="card-body">
                        <h4 class="card-title"><?php the_title(); ?></h4>
                        <div class="card-text text-muted mb-3">
                            <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm">See details</a>
                    </div>
                </div>
            </div>
        <?php 
            endwhile; 
            wp_reset_postdata();
        else : ?>
            <p class="text-center">No service found.</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>