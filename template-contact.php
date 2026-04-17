<?php
/**
 * Template Name: Contact Us
 */
get_header(); ?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-body p-5">
                    <h1 class="mb-4 text-center"><?php the_title(); ?></h1>
                    
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="mb-4 text-muted text-center">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; endif; ?>

                    <form action="#" method="POST" class="contact-form">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Type Name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="email@example.com" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" placeholder="What do you want to know about?">
                        </div>

                        <div class="mb-4">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Enter your message here...." required></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg px-5">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5 text-center">
        <div class="col-md-4">
            <div class="p-3">
                <h5 class="fw-bold">Address</h5>
                <p class="text-muted">Chatkhil, Chottogram, Bangladesh</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3">
                <h5 class="fw-bold">Email</h5>
                <p class="text-muted">mdismailanowar@gmail.com</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3">
                <h5 class="fw-bold">Mobile No</h5>
                <p class="text-muted">+8801822067909</p>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>