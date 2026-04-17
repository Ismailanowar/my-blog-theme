<footer class="text-white pt-5 pb-3 mt-5" style="background-color: #1a237e !important;">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-1' ); ?>
                <?php else : ?>
                    <h5 class="fw-bold mb-3">About Us</h5>
                    <p class="text-light">I am expert Wordpress<br> Developer Including Theme, <br>Plugin, Elementor, Block Theme</p>
                <?php endif; ?>
            </div>

            <div class="col-md-4">
                <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-2' ); ?>
                <?php else : ?>
                    <h5 class="fw-bold mb-3">Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo site_url('');?>" class="text-light text-decoration-none">Home</a></li>
                        <li><a href="<?php echo site_url('/services');?>" class="text-light text-decoration-none">Services</a></li>
                        <li><a href="#" class="text-light text-decoration-none">Contact</a></li>
                    </ul>
                <?php endif; ?>
            </div>

            <div class="col-md-4">
                <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-3' ); ?>
                <?php else : ?>
                    <h5 class="fw-bold mb-3">Contact Info</h5>
                    <p class="text-light mb-1"><i class="bi bi-geo-alt me-2"></i> Noakhali, Chottogram</p>
                    <p class="text-light mb-1"><i class="bi bi-envelope me-2"></i> mdismailanowar@gmail.com</p>
                    <p class="text-light"><i class="bi bi-telephone me-2"></i> +8801822067909</p>
                <?php endif; ?>
            </div>
        </div>

        <hr class="my-4 bg-secondary">
        
        <div class="row">
            <div class="col-md-12 text-center">
                <p class="small mb-0 text-light">
                    &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const swiper = new Swiper('.featured-slider', {
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        effect: 'fade', // স্লাইড হবে নাকি ফেইড হবে
        fadeEffect: {
            crossFade: true
        },
    });
});
</script>
<?php wp_footer(); ?>
</body>
</html>