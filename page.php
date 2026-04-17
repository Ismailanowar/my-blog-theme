<?php get_header(); ?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1 class="display-4 mb-4 text-center"><?php the_title(); ?></h1>
                    
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="page-thumbnail mb-4 text-center">
                            <?php the_post_thumbnail( 'full', ['class' => 'img-fluid rounded shadow-sm'] ); ?>
                        </div>
                    <?php endif; ?>

                    <div class="entry-content lh-lg border-top pt-4">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>