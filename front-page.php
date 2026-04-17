<?php get_header(); ?>

<section class="home-hero bg-dark text-white py-5 mb-5" style="background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('https://via.placeholder.com/1920x600'); background-size: cover; background-position: center;">
    <div class="container py-5 text-center">
        <h1 class="display-3 fw-bold mb-3">Welcome to Our Blog</h1>
        <p class="lead mb-4">Learn something new, share your experiences. We bring you new technology news every day</p>
        <a href="#latest-posts" class="btn btn-primary btn-lg px-4 gap-3">Start reading</a>
    </div>
</section>

<div class="container my-5" id="latest-posts">
    <div class="row">
        <div class="col-md-8">
            <h2 class="mb-4 pb-2 border-bottom">Recent Posts</h2>
            
            <div class="row">
                <?php 
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => 2,
                );

                $blogposts = new WP_Query($args);

                if ($blogposts->have_posts()) : 
                    while ($blogposts->have_posts()) : $blogposts->the_post(); 
                ?>
                    <div class="col-md-12 mb-4">
                        <div class="card h-100 shadow-sm overflow-hidden">
                            <div class="row g-0">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="col-md-5">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail( 'large', ['class' => 'img-fluid h-100 w-100', 'style' => 'object-fit: cover; min-height: 200px;'] ); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                
                                <div class="<?php echo has_post_thumbnail() ? 'col-md-7' : 'col-md-12'; ?>">
                                    <div class="card-body d-flex flex-column h-100">
                                        <h3 class="card-title h4">
                                            <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none"><?php the_title(); ?></a>
                                        </h3>
                                        <div class="mb-2 text-muted small">
                                            <i class="bi bi-calendar"></i> <?php echo get_the_date(); ?> | 
                                            <i class="bi bi-person"></i> <?php the_author(); ?>
                                        </div>
                                        <p class="card-text text-secondary"><?php echo wp_trim_words( get_the_excerpt(), 25 ); ?></p>
                                        <div class="mt-auto">
                                            <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary btn-sm">Read details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php 
                    endwhile;
                    
                    // পেজিনেশন (Custom Query এর জন্য pagination কিছুটা আলাদা হয়, তবে সাধারণ ভাবে এটি দিতে পারেন)
                    the_posts_pagination(array(
                        'mid_size'  => 2,
                        'prev_text' => 'Previous',
                        'next_text' => 'Next',
                    ));

                    wp_reset_postdata(); // কুয়েরি শেষ করে ডাটা রিসেট করা জরুরি
                
                else : ?>
                    <div class="col-12">
                        <p>Sorry, no posts were found</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<div class="swiper featured-slider mb-5">
    <div class="swiper-wrapper">
        <?php 
        $slider_args = array(
            'posts_per_page' => 5, // কয়টি স্লাইড দেখাবে
            'meta_key'       => '_thumbnail_id', // শুধুমাত্র ইমেজ থাকা পোস্টগুলো দেখাবে
        );
        $slider_query = new WP_Query($slider_args);

        if ($slider_query->have_posts()) : while ($slider_query->have_posts()) : $slider_query->the_post(); ?>
            <div class="swiper-slide">
                <div class="slider-item"  style="height: 500px; background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>');">
                    <div class="container h-100 d-flex align-items-center justify-content-center text-center">
                        <div class="text-white col-md-8">
                            <h2 class="display-4 fw-bold mb-3"><?php the_title(); ?></h2>
                            <p class="lead mb-4"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-lg">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; wp_reset_postdata(); endif; ?>
    </div>
    
    <div class="swiper-button-next text-white"></div>
    <div class="swiper-button-prev text-white"></div>
    <div class="swiper-pagination"></div>
</div>
<?php get_footer(); ?>