<?php get_header(); ?>

<div class="container my-5">
    <div class="row justify-content-center">
        <article class="col-md-7">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                
                <h1 class="display-4 mb-3"><?php the_title(); ?></h1>

                <div class="post-meta text-muted mb-4 pb-3 border-bottom">
                    <span><i class="bi bi-person"></i> By <?php the_author(); ?></span> | 
                    <span><i class="bi bi-calendar"></i> <?php echo get_the_date(); ?></span> | 
                    <span><i class="bi bi-folder"></i> <?php the_category(', '); ?></span>
                </div>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail mb-4">
                        <?php the_post_thumbnail( 'full', ['class' => 'img-fluid rounded shadow-sm w-100'] ); ?>
                    </div>
                <?php endif; ?>

                <div class="post-content entry-content lh-lg">
                    <?php the_content(); ?>
                </div>

                <div class="post-tags mt-5">
                    <?php the_tags( '<span class="badge bg-secondary me-1">', '</span><span class="badge bg-secondary me-1">', '</span>' ); ?>
                </div>

                <hr class="my-5">

                <nav class="d-flex justify-content-between mb-5">
                    <div class="prev-post">
                        <?php previous_post_link('%link', '&laquo; Previous Post'); ?>
                    </div>
                    <div class="next-post">
                        <?php next_post_link('%link', 'Next Post &raquo;'); ?>
                    </div>
                </nav>

                <?php 
                if ( comments_open() || get_comments_number() ) :
                    echo '<div class="comments-wrapper bg-light p-4 rounded">';
                    comments_template();
                    echo '</div>';
                endif; 
                ?>

            <?php endwhile; endif; ?>
        </article>

        <aside class="col-md-5 mt-5 mt-md-0">
            <div class="sticky-top" style="top: 20px;">
                <div class="card mb-4 border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">About the Author</h5>
                        <p class="card-text"><?php the_author_meta('description'); ?></p>
                    </div>
                </div>
                
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Categories</h5>
                        <ul class="list-unstyled mb-0">
                            <?php wp_list_categories( array('title_li' => '') ); ?>
                        </ul>
		
		</div>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</div>

<?php get_footer(); ?>