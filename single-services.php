<?php get_header(); ?>

<div class="container my-5 py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1 class="display-3 mb-4"><?php the_title(); ?></h1>
                
                <?php if (has_post_thumbnail()) : ?>
                    <div class="mb-5">
                        <?php the_post_thumbnail('full', ['class' => 'img-fluid rounded shadow']); ?>
                    </div>
                <?php endif; ?>

                <div class="content fs-5 lh-lg text-start">
                    <?php the_content(); ?>
                </div>

                <div class="mt-5">
                    <a href="<?php echo get_post_type_archive_link('services'); ?>" class="btn btn-outline-secondary">View all services</a>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>