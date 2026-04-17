<?php
/**
 * Template Name: About Us Template
 */
get_header(); ?>

<div class="about-hero bg-primary text-white py-5 mb-5 text-center">
    <div class="container">
        <h1 class="display-3 fw-bold"><?php the_title(); ?></h1>
        <p class="lead">Learn our story and our mission</p>
    </div>
</div>

<div class="container my-5">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
            <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail( 'full', ['class' => 'img-fluid rounded shadow-lg'] ); ?>
            <?php else : ?>
                <img src="https://via.placeholder.com/600x400" class="img-fluid rounded shadow" alt="About Us">
            <?php endif; ?>
        </div>

        <div class="col-md-6 ps-md-5">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="about-content lh-lg">
                    <?php the_content(); ?>
                </div>
            <?php endwhile; endif; ?>
            
            <div class="mt-4">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-outline-primary btn-lg">Contact with us</a>
            </div>
        </div>
    </div>

    <div class="row mt-5 pt-5 text-center">
        <div class="col-md-4">
            <h3 class="fw-bold text-primary">500+</h3>
            <p class="text-muted">Published post</p>
        </div>
        <div class="col-md-4">
            <h3 class="fw-bold text-primary">100K+</h3>
            <p class="text-muted">Monthly reader</p>
        </div>
        <div class="col-md-4">
            <h3 class="fw-bold text-primary">10+</h3>
            <p class="text-muted">Experienced writer</p>
        </div>
<div class="col-md-12">
            <h3 class="fw-bold text-primary">About Me</h3>
            <p class="text-muted">I am Md Ismail Hossain. I am From Bangladesh,Over the past 5 years, I have developed a variety of WordPress-based websites ranging 	from business portfolios to e-commerce solutions. I specialize in custom theme development, plugin creation, and Gutenberg block integration. My skill set 	includes PHP, HTML, CSS, JavaScript, React.js, and MySQL, and I always follow WordPress coding standards to ensure performance, scalability, and security.</p>
        </div>
    </div>
</div>

<?php get_footer(); ?>