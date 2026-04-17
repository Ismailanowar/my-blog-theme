<?php get_header(); ?>

<div class="container my-5 text-center py-5">
    <h1 class="display-1 text-danger font-weight-bold">404</h1>
    <h2 class="mb-4">Oops! That page can&rsquo;t be found.</h2>
    <p class="lead mb-5">It looks like nothing was found at this location. Maybe try a search?</p>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <?php get_search_form(); ?>
        </div>
    </div>
    <div class="mt-5">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">Go Back Home</a>
    </div>
</div>

<?php get_footer(); ?>